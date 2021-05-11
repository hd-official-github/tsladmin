<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $this->login();
    }
    public function verify_session()
    {
        if (!$this->session->user) {
            redirect(base_url() . 'admin');
        }
    }
    public function login()
    {
        if ($this->session->user) {
            redirect(base_url() . 'admin/dashboard');
        } else {
            $this->load->view('admin/admin_login');
        }
    }
    public function submit_login_data()
    {
        if ($this->input->post('submit')) {
            $this->load->model('admin_model');
            $res = $this->admin_model->verify_username($this->input->post('userid'));
            if ($res) {
                $res = $this->admin_model->verify_password($this->input->post('pass'));
                if ($res) {
                    $this->session->set_userdata('user', $this->input->post('userid'));  ///////// SET SESSION
                    redirect(base_url() . 'admin/dashboard');
                } else {
                    $d['err'] = "WRONG PASSWORD";
                    $this->load->view('admin/admin_login', $d);
                }
            } else {
                $d['err'] = "WRONG USERID";
                $this->load->view('admin/admin_login', $d);
            }
        } else {
            redirect(base_url() . 'admin');
        }
    }
    public function dashboard()
    {

        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }

    /////////////////////////////////////// BLOGS //////////////////////////////////////
    public function blogs()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');

        $data['blogs'] = $this->admin_model->get_blogs();
        $this->load->view('admin/blog', $data);
        $this->load->view('admin/footer');
    }

    public function add_blog()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $data['loc'] = $this->admin_model->get_location();
        $this->load->view('admin/add_blog', $data);
        $this->load->view('admin/footer');
    }
    public function edit_blog()
    {
        $this->verify_session();
        $id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $data = $this->admin_model->get_blog_byid($id);
        foreach ($data->result() as $row) {
            $arr['arr'] = array(
                'id' => $row->id,
                'slug' => $row->slug,
                'meta_title' => $row->meta_title,
                'meta_desc' => $row->meta_desc,
                'loc' => $row->loc,
                'blog_title' => $row->blog_title,
                'blog_desc' => $row->blog_desc,
                'image_alt' => $row->image_alt,
                'blog_img' => $row->blog_img,
                'blog_img_name' => $row->blog_img_name
            );
        }
        $arr['location'] = $this->admin_model->get_location();
        $this->load->view('admin/header');
        $this->load->view('admin/edit_blog', $arr);
        $this->load->view('admin/footer');
    }
    public function update_blog()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            $fs_present = $_FILES['userfile']['size']; // file size > 0 if file is present
            if ($fs_present == 0) {
                // if no image change
                $d = array(
                    'slug' => $this->input->post('slug'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'blog_title' => $this->input->post('blog_title'),
                    'loc' => $this->input->post('loc'),
                    'blog_desc' => $this->input->post('blogdesc'),
                    'image_alt' => $this->input->post('imgalt'),
                );
                $this->load->model('admin_model');
                $this->admin_model->update_blog($this->input->post('id'), $d);
                redirect(base_url() . 'admin/blogs');
            } else {

                $config3['upload_path'] = './uploads/blogs';   // Directory 
                $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
                $config3['max_size'] = '30720';   //Max Size
                // $config3['file_name'] = "blog_" . trim($this->input->post('blog_title'));   // For unique image name at a time
                $this->load->library('upload', $config3);  //File Uploading library
                $this->upload->initialize($config3);
                if ($this->upload->do_upload('userfile')) {

                    unlink('./uploads/blogs/' . $this->input->post('blog_img_name'));
                    $data = $this->upload->data();
                    $sign = base_url() . "uploads/blogs/" . $data['raw_name'] . $data['file_ext'];
                    $d = array(
                        'slug' => $this->input->post('slug'),
                        'meta_title' => $this->input->post('meta_title'),
                        'meta_desc' => $this->input->post('meta_desc'),
                        'blog_title' => $this->input->post('blog_title'),
                        'blog_desc' => $this->input->post('blogdesc'),
                        'image_alt' => $this->input->post('imgalt'),
                        'loc' => $this->input->post('loc'),
                        'blog_img' => $sign,
                        'blog_img_name' => $data['raw_name'] . $data['file_ext']
                    );
                    $this->load->model('admin_model');
                    $this->admin_model->update_blog($this->input->post('id'), $d);
                    redirect(base_url() . 'admin/blogs');
                } else {
                    $d['err'] = "ERROR UPLOADING IMAGE";
                    $this->load->model('admin_model');

                    $data = $this->admin_model->get_blog_byid($this->input->post('id'));
                    foreach ($data->result() as $row) {
                        $d['arr'] = array(
                            'id' => $row->id,
                            'slug' => $row->slug,
                            'meta_title' => $row->meta_title,
                            'loc' => $row->loc,
                            'meta_desc' => $row->meta_desc,
                            'blog_title' => $row->blog_title,
                            'blog_desc' => $row->blog_desc,
                            'image_alt' => $row->image_alt,
                            'blog_img' => $row->blog_img,
                            'blog_img_name' => $row->blog_img_name
                        );
                    }
                    $d['location'] = $this->admin_model->get_location();
                    $this->load->view('admin/header');
                    $this->load->view('admin/edit_blog', $d);
                    $this->load->view('admin/footer');
                }
            }
        } else {
            redirect(base_url() . 'admin/add_blog');
        }
    }
    public function submit_blog()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            $config3['upload_path'] = './uploads/blogs';   // Directory 
            $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
            $config3['max_size'] = '30720';   //Max Size
            // $config3['file_name'] = "blog_" . trim($this->input->post('blog_title'));   // For unique image name at a time
            $this->load->library('upload', $config3);  //File Uploading library
            $this->upload->initialize($config3);
            if ($this->upload->do_upload('userfile')) {
                $data = $this->upload->data();
                $sign = base_url() . "uploads/blogs/" . $data['raw_name'] . $data['file_ext'];
                $d = array(
                    'slug' => $this->input->post('slug'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'loc' => $this->input->post('loc'),
                    'blog_title' => $this->input->post('blog_title'),
                    'blog_desc' => $this->input->post('blogdesc'),
                    'image_alt' => $this->input->post('imgalt'),
                    'blog_img' => $sign,
                    'blog_img_name' => $data['raw_name'] . $data['file_ext']
                );
                $this->load->model('admin_model');
                $this->admin_model->upload_blog($d);
                redirect(base_url() . 'admin/blogs');
            } else {
                $d['err'] = "ERROR UPLOADING IMAGE";
                $this->load->view('admin/header');
                $this->load->view('admin/add_blog', $d);
                $this->load->view('admin/footer');
            }
        } else {
            redirect(base_url() . 'admin/add_blog');
        }
    }
    public function delete_blog()
    {
        $this->verify_session();
        $id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $icon_name = $this->admin_model->get_blog_image_name($id);
        unlink("./uploads/blogs/" . $icon_name);
        $this->admin_model->delete_blog($id);
        redirect(base_url() . 'admin/blogs');
    }
    /////////////////////////////////////// LOCATION //////////////////////////////////////
    public function location()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $data['location'] = $this->admin_model->get_location();
        $this->load->view('admin/location', $data);
        $this->load->view('admin/footer');
    }
    public function add_location()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->view('admin/add_location');
        $this->load->view('admin/footer');
    }
    public function add_sub_location()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $data['location'] = $this->admin_model->get_location();
        $this->load->view('admin/add_sub_location', $data);
        $this->load->view('admin/footer');
    }
    public function get_sub_loc()
    {
        $this->verify_session();
        $loc = $this->input->post('location');

        $this->load->model('admin_model');
        $data = $this->admin_model->get_sub_location($loc);

          echo "<option value='0'>--Select Sublocation--</option>";
        foreach ($data->result() as $row) {
            echo '<option value="' . $row->sub_loc_name . '" >' . $row->sub_loc_name . '</option>';
        }
       
    }
    public function edit_location()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $data = $this->admin_model->get_location_byname($this->uri->segment(3));
        foreach ($data->result() as $row) {
            $data = array(
                'id' => $row->id,
                'location_name' => $row->location_name,
                'meta_title' => $row->meta_title,
                'meta_desc' => $row->meta_desc,
                'footer_content' => $row->footer_content,
            );
        }
        $this->load->view('admin/edit_location', $data);
        $this->load->view('admin/footer');
    }
    public function update_location()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            $arr = array(
                'location_name' => $this->input->post('location'),
                'meta_title' => $this->input->post('meta_title'),
                'meta_desc' => $this->input->post('meta_desc'),
                'footer_content' => $this->input->post('footer_location_content')
            );
            $this->load->model('admin_model');

            $this->admin_model->update_location($this->input->post('ide'), $arr);
            redirect(base_url() . 'admin/location');
        } else {
            redirect(base_url() . 'admin');
        }
    }
    public function submit_location()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            $arr = array(
                'location_name' => $this->input->post('location'),
                'meta_title' => $this->input->post('meta_title'),
                'meta_desc' => $this->input->post('meta_desc'),
                'footer_content' => $this->input->post('footer_location_content')
            );
            $this->load->model('admin_model');
            $this->admin_model->upload_location($arr);
            redirect(base_url() . 'admin/location');
        } else {
            redirect(base_url() . 'admin/location');
        }
    }
    public function edit_sub_location()
    {
        $id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $data['subloc_data'] = $this->admin_model->edit_sub_loc($id);
        $data['location'] = $this->admin_model->get_all_locs();
        $this->load->view('admin/header');
        $this->load->view('admin/edit_sub_location', $data);
        $this->load->view('admin/footer');
    }
    public function update_sub_location()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            $fs_present = $_FILES['userfile']['size'];
            if ($fs_present == 0) {
                //no img change
                $arr = array(
                    'location_name' => $this->input->post('location'),
                    'sub_loc_name' => $this->input->post('sub_loc'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'subloc_img' => $this->input->post('subloc_img'),
                    'sublocimg_name' => $this->input->post('sublocimg_name'),
                );
            } else {
                //img changed
                $config3['upload_path'] = './uploads/sublocation';   // Directory 
                $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
                $config3['max_size'] = '30720';   //Max Size
                $this->load->library('upload', $config3);  //File Uploading library
                $this->upload->initialize($config3);
                if ($this->upload->do_upload('userfile')) {
                    $data = $this->upload->data();
                    $sign = base_url() . "uploads/sublocation/" . $data['raw_name'] . $data['file_ext'];
                    $arr = array(
                        'location_name' => $this->input->post('location'),
                        'sub_loc_name' => $this->input->post('sub_loc'),
                        'meta_title' => $this->input->post('meta_title'),
                        'meta_desc' => $this->input->post('meta_desc'),
                        'subloc_img' => $sign,
                        'sublocimg_name' => $data['raw_name'] . $data['file_ext']
                    );
                } else {
                    $d['err'] = "ERROR UPLOADING IMAGE";
                    $this->load->view('admin/header');
                    $this->load->view('admin/add_sub_location', $d);
                    $this->load->view('admin/footer');
                    die;
                }
            }
            unlink('./uploads/sublocation/' . $this->input->post('sublocimg_name'));
            $this->load->model('admin_model');
            $this->admin_model->update_sublocation($this->input->post('ide'), $arr);
            redirect(base_url() . 'admin/location');
        } else {
            redirect(base_url() . 'admin');
        }
    }
    public function submit_sub_location()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            $config3['upload_path'] = './uploads/sublocation';   // Directory 
            $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
            $config3['max_size'] = '30720';   //Max Size
            // $config3['file_name'] = "blog_" . trim($this->input->post('blog_title'));   // For unique image name at a time
            $this->load->library('upload', $config3);  //File Uploading library
            $this->upload->initialize($config3);
            if ($this->upload->do_upload('userfile')) {
                $data = $this->upload->data();
                $sign = base_url() . "uploads/sublocation/" . $data['raw_name'] . $data['file_ext'];
                $d = array(
                    'location_name' => $this->input->post('location'),
                    'sub_loc_name' => $this->input->post('sub_loc'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'subloc_img' => $sign,
                    'sublocimg_name' => $data['raw_name'] . $data['file_ext']
                );
                $this->load->model('admin_model');
                $this->admin_model->upload_sub_location($d);
                redirect(base_url() . 'admin/location');
            } else {
                $d['err'] = "ERROR UPLOADING IMAGE";
                $this->load->view('admin/header');
                $this->load->view('admin/add_sub_location', $d);
                $this->load->view('admin/footer');
            }
        } else {
            redirect(base_url() . 'admin/location');
        }
    }
    public function get_sub_location()
    {
        $this->verify_session();
        $val = $this->input->post('city');
        if (!isset($val)) {
            echo '<div id="card"><h2> NO SUB LOCATION<h2></div>';
        } else {
            $this->load->model('admin_model');
            $res = $this->admin_model->get_sub_location($val);
            // print_r($res);
            // die;
            // if ($res['data']->affected_rows > 0) {
            foreach ($res->result() as $row) {
                echo ('<div class="card-content">
                    ' . $row->sub_loc_name . '
                    <div class="options">
                        <a href="' . base_url() . 'admin/edit_sub_location/' . $row->id . '" class="actions w-inline-block"><img src="' . base_url()
                    . 'assets/images/edit.png" loading="lazy" width="33" alt="" /></a>
                        <a href="' . base_url()
                    . 'admin/del_sub_loc_by_id/' . $row->id . '" class="actions w-inline-block"><img src="' . base_url()
                    . 'assets/images/delete.png" loading="lazy" width="33" alt="" /></a>
                    </div>
                </div>');
            }
            die;
            // } else {
            //     echo '<div id="card"><h2> NO SUB LOCATION FOUND<h2></div>';
            // }
        }
    }
    public function delete_location()
    {
        $this->verify_session();
        $loc = $this->input->post('location');
        $this->load->model('admin_model');
        $this->admin_model->delete_sub_location($loc);
        $this->admin_model->delete_location($loc);
    }
    public function del_sub_loc_by_id()
    {
        $this->verify_session();
        $id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $d = $this->admin_model->get_subloc_img_name($id);
        unlink('./uploads/sublocation/' . $d);
        $this->admin_model->del_sub_loc_by_id($id);
        redirect(base_url() . 'admin/location');
    }

    /////////////////////////////////////// CATEGORY /////////////////////////////////
    public function category()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $data['category'] = $this->admin_model->get_category();
        $this->load->view('admin/category', $data);
        $this->load->view('admin/footer');
    }
    public function add_category()
    {
        $this->verify_session();

        $this->load->model('admin_model');
        $data['location'] = $this->admin_model->get_all_loc();
        $this->load->view('admin/header');
        $this->load->view('admin/add_category', $data);
        $this->load->view('admin/footer');
    }
    public function edit_category()
    {
        $this->verify_session();
        $name = str_replace('-', ' ', $this->uri->segment(3));
        $this->load->model("admin_model");
        $arr['location'] = $this->admin_model->get_location();

        $q = $this->admin_model->get_category_details($name);
        foreach ($q->result() as $row) {
            $arr['arr'] = array(
                'id' => $row->id,
                'slug' => $row->slug,
                'category_name' => $row->category_name,
                'location_name' => $row->location,
                'meta_title' => $row->meta_title,
                'meta_desc' => $row->meta_desc,
                'icon' => $row->icon,
                'icon_name' => $row->icon_name,
                'icon_alt' => $row->icon_alt,
                'footer_content' => $row->footer_content,
            );
        }
        $this->load->view('admin/header');
        $this->load->view('admin/edit_category', $arr);
        $this->load->view('admin/footer');
    }
   
    public function submit_category()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            $config3['upload_path'] = './uploads/category';   // Directory 
            $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
            $config3['max_size'] = '30720';   //Max Size
            $this->load->library('upload', $config3);  //File Uploading library
            $this->upload->initialize($config3);
            if ($this->upload->do_upload('userfile')) {
                $data = $this->upload->data();
                $sign = base_url() . "uploads/category/" . $data['raw_name'] . $data['file_ext'];
                $d = array(
                    'slug' => $this->input->post('slug'),
                    'category_name' => $this->input->post('category_name'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'icon' => $sign,
                    'icon' => $sign,
                    'icon_name' => $data['raw_name'] . $data['file_ext'],
                    'icon_alt' => $this->input->post('icon_alt'),
                    'footer_content' => $this->input->post('footer_category_content'),
                    'location' => $this->input->post('location')
                );
                $this->load->model('admin_model');
                $this->admin_model->upload_category($d);
                redirect(base_url() . 'admin/category');
            } else {
                $d['err'] = "ERROR UPLOADING IMAGE";
                $this->load->view('admin/header');
                $this->load->view('admin/add_category', $d);
                $this->load->view('admin/footer');
            }
        } else {
            redirect(base_url() . 'admin/add_category');
        }
    }
    public function update_category()
    {
        $this->verify_session();
        $this->load->model('admin_model');
        if ($this->input->post('submit')) {
            $fs_present = $_FILES['userfile']['size']; // file size > 0 if file is present
            if ($fs_present == 0) {
                // no img change
                $arr = array(
                    'slug' => $this->input->post('slug'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'category_name' => $this->input->post('category_name'),
                    'icon_name' => $this->input->post('icon_name'),
                    'icon' => $this->input->post('icon'),
                    'icon_alt' => $this->input->post('icon_alt'),
                    'footer_content' => $this->input->post('footer_category_content'),
                );
                $this->admin_model->update_category($this->input->post('id'), $arr);
                redirect(base_url() . 'admin/dashboard');
            } else {
                $config3['upload_path'] = './uploads/category';   // Directory 
                $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
                $config3['max_size'] = '30720';   //Max Size
                $this->load->library('upload', $config3);  //File Uploading library
                $this->upload->initialize($config3);
                if ($this->upload->do_upload('userfile')) {
                    unlink('./uploads/category/' . $this->input->post('icon_name'));
                    $data = $this->upload->data();
                    $sign = base_url() . "uploads/category/" . $data['raw_name'] . $data['file_ext'];
                    $d = array(
                        'slug' => $this->input->post('slug'),
                        'category_name' => $this->input->post('category_name'),
                        'meta_title' => $this->input->post('meta_title'),
                        'meta_desc' => $this->input->post('meta_desc'),
                        'icon' => $sign,
                        'icon_name' => $data['raw_name'] . $data['file_ext'],
                        'icon_alt' => $this->input->post('icon_alt'),
                        'footer_content' => $this->input->post('footer_category_content'),
                    );
                    $this->admin_model->update_category($this->input->post('id'), $d);
                }
                redirect(base_url() . 'admin/category');
            }
        } else {
            redirect(base_url() . 'admin/category');
        }
    }
   
    public function delete_category()
    {
        $this->verify_session();
        $cat_name = $this->input->post('category');
        $this->load->model('admin_model');
        $icon_name = $this->admin_model->get_cat_image_name($cat_name);
        unlink("./uploads/category/" . $icon_name);
        $this->admin_model->delete_cat($cat_name);
    }
    
    ///////////////////////////// SUB-CATEGORY////////////////////////
    public function add_sub_category()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $data['category'] = $this->admin_model->get_category();
        $data['location'] = $this->admin_model->get_location();
        $this->load->view('admin/add_sub_category', $data);
        $this->load->view('admin/footer');
    }
    public function submit_sub_category()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            $config3['upload_path'] = './uploads/subcategory';   // Directory 
            $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
            $config3['max_size'] = '30720';   //Max Size
            // $config3['file_name'] = "blog_" . trim($this->input->post('blog_title'));   // For unique image name at a time
            $this->load->library('upload', $config3);  //File Uploading library
            $this->upload->initialize($config3);
            if ($this->upload->do_upload('userfile')) {
                $d = $this->upload->data();
                $sign = base_url() . "uploads/subcategory/" . $d['raw_name'] . $d['file_ext'];
                $data = array(
                    'slug' => $this->input->post('slug'),
                    'category_name' => $this->input->post('category'),
                    'sub_category_name' => $this->input->post('subcat'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'location' => $this->input->post('location_name'),
                    'icon' => $sign,
                    'icon_name' => $d['raw_name'] . $d['file_ext'],
                    'icon_alt' => $this->input->post('icon_alt'),
                    'footer_content' => $this->input->post('footer_subcategory_content'),
                );
                $this->load->model('admin_model');
                $this->admin_model->upload_sub_category($data);
                redirect(base_url() . 'admin/category');
            } else {
                $d['err'] = "ERROR UPLOADING IMAGE";
                $this->load->model('admin_model');
                $d['category'] = $this->admin_model->get_category();
                $this->load->view('admin/header');
                $this->load->view('admin/add_category', $d);
                $this->load->view('admin/footer');
            }
        } else {
            redirect(base_url() . 'admin/add_category');
        }
    }
    public function get_sub_category()
    {
        $this->verify_session();
        $val = $this->input->post('category');
        if (!isset($val)) {
            echo '<div id="card"><h2> NO SUB CATEGORY<h2></div>';
        } else {
            $this->load->model('admin_model');
            $res = $this->admin_model->get_sub_category($val);
            // print_r($res);
            // die;
            // if ($res['data']->affected_rows > 0) {
            foreach ($res->result() as $row) {
                echo ('<div class="card-content">
                    ' . $row->sub_category_name . '
                    <div class="options">
                        <a href="' . base_url() . 'admin/edit_subcategory/' . $row->id . '" class="actions w-inline-block"><img src="' . base_url()
                    . 'assets/images/edit.png" loading="lazy" width="33" alt="" /></a>
                        <a href="' . base_url() . 'admin/delete_subcategory/' . $row->id . '" class="actions w-inline-block"><img src="' . base_url()
                    . 'assets/images/delete.png" loading="lazy" width="33" alt="" /></a>
                    </div>
                </div>');
            }
            die;
            // } else {
            //     echo '<div id="card"><h2> NO SUB LOCATION FOUND<h2></div>';
            // }
        }
    }
    public function get_sub_cat()
    {
        $this->load->model('admin_model');
       
        $res = $this->admin_model->get_sub_category($this->input->post('cat'));
       echo " <option value='0' default>--PLEASE SELECT SUB CATEGORY..</option>";
        foreach($res->result() as $row){
            echo '<option value="'.$row->sub_category_name.'">'.$row->sub_category_name.'</option>';
        }
    }
    public function edit_subcategory()
    {
        $this->verify_session();
        $this->load->model('admin_model');
        $data['res'] = $this->admin_model->get_subcat_by_id($this->uri->segment(3));
        $data['category'] = $this->admin_model->get_category();
        $data['location'] = $this->admin_model->get_location();
        $this->load->view('admin/header');
        $this->load->view('admin/edit_subcategory',$data);
        $this->load->view('admin/footer');
    }
    public function update_sub_category()
    {
        $this->verify_session();
   
        $this->load->model('admin_model');
        if ($this->input->post('submit')) {
            $fs_present = $_FILES['userfile']['size']; // file size > 0 if file is present
            if ($fs_present == 0) {
                // no img change
                
                $arr = array(
                    'slug' => $this->input->post('slug'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'category_name' => $this->input->post('category'),
                    'icon_name' => $this->input->post('icon_name'),
                    'location' => $this->input->post('location_name'),
                    'sub_category_name' => $this->input->post('subcat'),
                    'icon' => $this->input->post('icon'),
                    'icon_alt' => $this->input->post('icon_alt'),
                    'footer_content' => $this->input->post('footer_subcategory_content'),
                );
                // print_r($arr); die;
                $this->admin_model->update_subcategory($this->input->post('id'), $arr);
                redirect(base_url() . 'admin/dashboard');
            } else {
                $config3['upload_path'] = './uploads/subcategory';   // Directory 
                $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
                $config3['max_size'] = '30720';   //Max Size
                $this->load->library('upload', $config3);  //File Uploading library
                $this->upload->initialize($config3);
                if ($this->upload->do_upload('userfile')) {
                    unlink('./uploads/subcategory/' . $this->input->post('icon_name'));
                    $data = $this->upload->data();
                    $sign = base_url() . "uploads/subcategory/" . $data['raw_name'] . $data['file_ext'];
                    $d = array(
                        'slug' => $this->input->post('slug'),
                        'sub_category_name' => $this->input->post('subcat'),
                        'meta_title' => $this->input->post('meta_title'),
                        'location' => $this->input->post('location_name'),
                        'category_name' => $this->input->post('category'),
                        'meta_desc' => $this->input->post('meta_desc'),
                        'icon' => $sign,
                        'icon_name' => $data['raw_name'] . $data['file_ext'],
                        'icon_alt' => $this->input->post('icon_alt'),
                        'footer_content' => $this->input->post('footer_subcategory_content'),
                    );
                    $this->admin_model->update_subcategory($this->input->post('id'), $d);
                }
                redirect(base_url() . 'admin/category');
            }
        } else {
            redirect(base_url() . 'admin/category');
        }
    }
    public function delete_subcategory()
    {
        $this->verify_session();
        $sub_cat_id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $icon_name = $this->admin_model->get_subcat_image_name($sub_cat_id);
        unlink("./uploads/subcategory/" . $icon_name);
        $this->admin_model->delete_subcat($sub_cat_id);
        redirect(base_url() . 'admin/category');
    }
    /////////////////////////////////////// LIST //////////////////////////////////////
    public function list()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $data['business'] = $this->admin_model->get_business();
        $this->load->view('admin/list', $data);
        $this->load->view('admin/footer');
    }
    public function add_business()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $data['category'] = $this->admin_model->get_category();
        $data['loc_list'] = $this->admin_model->get_location();
        $data['sub_loc'] = $this->admin_model->get_subloc();
        $data['sub_cat'] = $this->admin_model->get_all_sub_category();


        $this->load->view('admin/add_business', $data);
        $this->load->view('admin/footer');
    }
    public function edit_business()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $data['category'] = $this->admin_model->get_category();
        $data['sub_category'] = $this->admin_model->get_all_sub_category();
        $d = $this->admin_model->get_business_byid($this->uri->segment(3));
        foreach ($d->result() as $row) {
            $data['business_id'] = $row->business_id;
            $data['meta_title'] = $row->meta_title;
            $data['meta_desc'] = $row->meta_desc;
            $data['business_name'] = $row->business_name;
            $data['category_id'] = $row->category_id;
            $data['about'] = $row->about;
            $data['business_id'] = $row->business_id;
            $data['main_img_name'] = $row->main_img_name;
            $data['main_image'] = $row->main_image;
            $data['main_img_alt'] = $row->main_img_alt;
            $data['features'] = $row->features;
            $data['address'] = $row->address;
            $data['sub_cat'] = $row->sub_category;

            $data['map_loc'] = $row->map_loc;
            $data['website'] = $row->website;
            $data['mobno'] = $row->mobno;
            $data['email'] = $row->email;
            $data['facebook'] = $row->facebook;
            $data['instagram'] = $row->instagram;
            $data['twitter'] = $row->twitter;
            $data['opening_hours'] = $row->opening_hours;
            $data['price_range'] = $row->price_range;
            $data['rating'] = $row->rating;
            $data['location'] = $row->location;
            $data['sub_location'] = $row->sub_location;
        }
        $data['loc_list'] = $this->admin_model->get_location();
        $data['cat_name'] = $this->admin_model->get_cat_name_by_id($data['category_id']);
        

        $this->load->view('admin/edit_business', $data);
        $this->load->view('admin/footer');
    }
    public function submit_business()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {

            $config3['upload_path'] = './uploads/business';   // Directory 
            $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
            $config3['max_size'] = '30720';   //Max Size
            $this->load->library('upload', $config3);  //File Uploading library
            $this->upload->initialize($config3);
            if ($this->upload->do_upload('main_img')) {
                $d = $this->upload->data();

                //generate businessid, reviewid
                $string = 'abcdefghijklmnopqrstvwxyz1234567890';
                $businessid = substr(str_shuffle($string), 0, 8);



                //--------------------------------------------//

                $sign = base_url() . "uploads/business/" . $d['raw_name'] . $d['file_ext'];
                $data = array(
                    'business_id' => $businessid,
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'business_name' => trim($this->input->post('business_name')),
                    'category_id' => $this->input->post('category'),
                    'location' => $this->input->post('location'),
                    'sub_location' => $this->input->post('sub_location'),
                    'about' => $this->input->post('about_business'),
                    'mobno' => $this->input->post('mobno'),
                    'email' => $this->input->post('email'),
                    'sub_category' => $this->input->post('sub_cat'),

                    'main_image' => $sign,
                    'main_img_name' => $d['raw_name'] . $d['file_ext'],
                    'main_img_alt' => $this->input->post('main_img_alt'),
                    'features' => $this->input->post('features'),
                    'address' => $this->input->post('business_address'),
                    'map_loc' => $this->input->post('business_map_loc'),
                    'website' => $this->input->post('business_website'),
                    'facebook' => $this->input->post('facebook_link'),
                    'instagram' => $this->input->post('twitter_link'),
                    'twitter' => $this->input->post('instagram_link'),
                    'opening_hours' => $this->input->post('opening'),
                    'price_range' => $this->input->post('pricing'),
                    'rating' => $this->input->post('rating'),
                );
                $this->load->model('admin_model');
                $this->admin_model->upload_business($data);
                redirect(base_url() . 'admin/list');
            } else {
                $d['err'] = "ERROR UPLOADING IMAGE";
                $this->load->view('admin/header');
                $this->load->model('admin_model');
                $d['category'] = $this->admin_model->get_category();
                $this->load->view('admin/add_business', $d);
                $this->load->view('admin/footer');
            }
        } else {
            redirect(base_url() . 'admin/add_business');
        }
    }
    public function update_business()
    {
        $this->verify_session();
        $this->load->model('admin_model');
        if ($this->input->post('submit')) {
            $fs_present = $_FILES['main_img']['size']; // file size > 0 if file is present
            if ($fs_present == 0) {
                // no img change
                $arr = array(
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'business_name' => $this->input->post('business_name'),
                    'category_id' => $this->input->post('category'),
                    'about' => $this->input->post('about_business'),
                    'main_img_alt' => $this->input->post('main_img_alt'),
                    'address' => $this->input->post('business_address'),
                    'map_loc' => $this->input->post('business_map_loc'),
                    'website' => $this->input->post('business_website'),
                    'mobno' => $this->input->post('mobno'),
                    'email' => $this->input->post('email'),
                    'sub_category' => $this->input->post('sub_cat'),
                    'facebook' => $this->input->post('facebook_link'),
                    'instagram' => $this->input->post('twitter_link'),
                    'twitter' => $this->input->post('instagram_link'),
                    'opening_hours' => $this->input->post('opening'),
                    'price_range' => $this->input->post('pricing'),
                    'rating' => $this->input->post('rating'),
                    'location' => $this->input->post('location'),
                    'sub_location' => $this->input->post('sub_location'),
                );
                $this->admin_model->update_business($this->input->post('business_id'), $arr);
                redirect(base_url() . 'admin/list');
            } else {
                $config3['upload_path'] = './uploads/business';   // Directory 
                $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
                $config3['max_size'] = '30720';   //Max Size
                $this->load->library('upload', $config3);  //File Uploading library
                $this->upload->initialize($config3);
                if ($this->upload->do_upload('main_img')) {
                    unlink('./uploads/business/' . $this->input->post('main_img_name'));
                    $d = $this->upload->data();
                    //--------------------------------------------//

                    $sign = base_url() . "uploads/business/" . $d['raw_name'] . $d['file_ext'];
                    $data = array(
                        'business_id' => $this->input->post('business_id'),
                        'meta_title' => $this->input->post('meta_title'),
                        'meta_desc' => $this->input->post('meta_desc'),
                        'business_name' => $this->input->post('business_name'),
                        'category_id' => $this->input->post('category'),
                        'about' => $this->input->post('about_business'),
                        'mobno' => $this->input->post('mobno'),
                        'email' => $this->input->post('email'),
                        'sub_category' => $this->input->post('sub_cat'),
                        'main_image' => $sign,
                        'main_img_name' => $d['raw_name'] . $d['file_ext'],
                        'main_img_alt' => $this->input->post('main_img_alt'),
                        'features' => $this->input->post('features'),
                        'address' => $this->input->post('business_address'),
                        'map_loc' => $this->input->post('business_map_loc'),
                        'website' => $this->input->post('business_website'),
                        'facebook' => $this->input->post('facebook_link'),
                        'instagram' => $this->input->post('twitter_link'),
                        'twitter' => $this->input->post('instagram_link'),
                        'opening_hours' => $this->input->post('opening'),
                        'price_range' => $this->input->post('pricing'),
                        'rating' => $this->input->post('rating'),
                        'location' => $this->input->post('location'),
                        'sub_location' => $this->input->post('sub_location'),
                    );
                    $this->admin_model->update_business($this->input->post('business_id'), $data);
                    redirect(base_url() . 'admin/list');
                } else {
                    //cannot upload
                    redirect(base_url() . 'list');
                }
            }
        } else {
            redirect(base_url() . 'list');
        }
    }
    public function add_reviews()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $data['business'] = $this->admin_model->get_business();
        $this->load->view('admin/add_reviews', $data);
        $this->load->view('admin/footer');
    }
    public function submit_review()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            $d = array(
                'name' => $this->input->post('name'),
                'business_id' => $this->input->post('business'),
                'review_text' => $this->input->post('review'),
                'rating' => $this->input->post('rating'),
            );
            $this->load->model('admin_model');
            $this->admin_model->upload_review($d);
            redirect(base_url() . 'admin/list');
        } else {
            redirect(base_url() . 'admin/list');
        }
    }
    public function delete_business()
    {
        $this->verify_session();

        $business_id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $this->admin_model->delete_business_images($business_id);
        $this->admin_model->delete_business_reviews($business_id);
        $main_img_name = $this->admin_model->get_main_img_name($business_id);

        unlink("./uploads/business/" . $main_img_name);
        $this->admin_model->delete_business($business_id);
        redirect(base_url() . 'admin/list');
    }
    /////////////////////////Business Image////////////////////
    public function add_business_image()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $d['business'] = $this->admin_model->get_business();
        $this->load->view('admin/add_business_image', $d);
        $this->load->view('admin/footer');
    }
    public function submit_business_image()
    {
        $this->verify_session();

        if ($this->input->post('submit')) {


            $countfiles = count($_FILES['files']['name']);

            for ($i = 0; $i < $countfiles; $i++) {
                if (!empty($_FILES['files']['name'][$i])) {
                    $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                    $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                    $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                    $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                    $config['upload_path'] = './uploads/business';
                    $config['allowed_types'] = 'jpg|jpeg|png';
                    $config['max_size'] = '30720'; // max_size in kb
                    // $config['file_name'] = $_FILES['files']['name'][$i];
                    // print_r($_FILES['files']);
                    // die;
                    //Load upload library
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    // File upload
                    if ($this->upload->do_upload('file')) {
                        // Get data about the file
                        $uploadData = $this->upload->data();

                        $arr = array(
                            'image_url' => base_url() . "uploads/business/" . $uploadData['raw_name'] . $uploadData['file_ext'],
                            'business_id' => $this->input->post('business'),
                            'img_alt' => $this->input->post('img_alt'),
                            'image_name' => $uploadData['raw_name'] . $uploadData['file_ext'],
                        );
                        // print_r($arr);
                        // die;
                        $this->load->model('admin_model');
                        $this->admin_model->upload_business_img($arr);
                        // redirect(base_url() . 'admin/add_business_image');
                    } else {
                        $d['err'] = "ERROR UPLOADING IMAGE";
                        $this->load->view('admin/header');
                        $this->load->model('admin_model');
                        $d['business'] = $this->admin_model->get_business();
                        $this->load->view('admin/add_business_image', $d);
                        $this->load->view('admin/footer');
                    }
                } else {
                    redirect(base_url() . 'admin/add_business_image');
                }
            }
            redirect(base_url() . 'admin/list');
        }
    }
    public function get_business_img()
    {
        $this->load->model('admin_model');
        $res = $this->admin_model->get_b_img($this->input->post('b_id'));
        foreach ($res->result() as $row) {
            echo ('<div class="card-content"><img height=50 width=50 src="'.$row->image_url.'">
                
                <div class="options">
                    
                    <a href="' . base_url()
                . 'admin/del_b_img/' . $row->id . '" class="actions w-inline-block"><img src="' . base_url()
                . 'assets/images/delete.png" loading="lazy" width="33" alt="" /></a>
                </div>
            </div>');
        }
    }
    public function del_b_img()
    {
        $this->load->model('admin_model');
        $id = $this->uri->segment(3);
        $res = $this->admin_model->delete_record('business_images',$id);
        if($res){
            redirect(base_url().'admin/add_business_image');
        }

    }

    public function add_faq()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $d['business'] = $this->admin_model->get_business();
        $this->load->view('admin/add_faq', $d);
        $this->load->view('admin/footer');
    }
    public function submit_faq()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            $d = array(
                'business_id' => $this->input->post('business'),
                'question' => $this->input->post('question'),
                'answer' => $this->input->post('answer'),

            );
            $this->load->model('admin_model');
            $this->admin_model->upload_faq($d);
            redirect(base_url() . 'admin/list');
        } else {
            redirect(base_url() . 'admin/list');
        }
    }
    public function add_features()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');

        $data['loc_list'] = $this->admin_model->get_location();

        //$id = $this->admin_model->get_business_id();
        // $ids=array();
        // foreach($id->result() as $row){
        //     $ids[] =$row->business_id; 
        // }    

        //$data['features'] = $this->admin_model->get_features($ids);
        $this->load->view('admin/add_features', $data);
        $this->load->view('admin/footer');
    }

    public function add_features1()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');

        $data['loc_list'] = $this->admin_model->get_location();
        $data['business'] = $this->admin_model->get_business();


        $this->load->view('admin/add_features1', $data);
        $this->load->view('admin/footer');
    }
    public function submit_features()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            $d = array(
                'business_id' => $this->input->post('business'),
                'location' => $this->input->post('location'),

            );
            $this->load->model('admin_model');
            $this->admin_model->upload_features($d);
            redirect(base_url() . 'admin/add_features');
        } else {
            redirect(base_url() . 'admin/add_features');
        }
    }
    public function delete_feature($id)
    {
        $id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $this->admin_model->delete_feature($id);
        redirect(base_url() . 'admin/add_features');
    }
    public function add_features2()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');

        $data['loc_list'] = $this->admin_model->get_location();
        $data['business'] = $this->admin_model->get_business();


        $this->load->view('admin/add_features2', $data);
        $this->load->view('admin/footer');
    }
    public function submit_features2()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            $d = array(
                'business_id' => $this->input->post('business'),
                'location' => $this->input->post('location'),

            );
            $this->load->model('admin_model');
            $this->admin_model->upload_features2($d);
            redirect(base_url() . 'admin/add_features');
        } else {
            redirect(base_url() . 'admin/add_features');
        }
    }
    public function getfeature()
    {
        $this->verify_session();
        $loc = $this->input->post('location');
        $feature = $this->input->post('feature');
        if ($feature == 1) {
            $table = "business_feature";
        } else {
            $table = "business_feature2";
        }
        $this->load->model('admin_model');
        $data['loc_list'] = $this->admin_model->get_location();

        $res = $this->admin_model->getfeature_first($loc, $table);
        if ($res->num_rows()) {
            foreach ($res->result() as $row) {
                echo '<div class="blog-list">
                    <div class="bleft">
                        <p class="paragraph-5">' . $row->business_name . '</p>
                    </div>
                    <div class="bright">
                        <input type="hidden" value="first" id="first" name="table">
                        <a href="' . base_url() . 'admin/delete_feature/' . $row->business_id . '" class="actions w-inline-block"><img src="' . base_url() . 'assets/images/delete.png" loading="lazy" width="32" sizes="(max-width: 479px) 100vw, 32px" alt="" /></a>
                    </div>
               </div>';
            }
        } else {
            echo '<div class="blog-list"><div class="bleft" style="padding:10px;"><p class="paragraph-5">Sorry!! Do data is available</p></div></div>';
        }
    }


    public function add_banners()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->view('admin/add_banners');
        $this->load->view('admin/footer');
    }
    public function add_banner1()
    {
        $this->verify_session();
        $this->load->model('admin_model');
        $data['loc_list'] = $this->admin_model->get_location();
        $data['allbanner1'] = $this->admin_model->get_allbanner1();
        // $data['cat'] = $this->admin_model->getcat_by_loc();
        $this->load->view('admin/header');
        $this->load->view('admin/add_banner1', $data);
        $this->load->view('admin/footer');
    }
    public function getcat_loc()
    {
        $this->verify_session();
        $this->load->model('admin_model');
        $data = $this->admin_model->getcat_by_loc($this->input->post('loc'));
        echo "<option value='' selected>---Select--- </option>";
        foreach ($data->result() as $row) {
            echo "<option value='$row->category_name'> $row->category_name </option>";
        }
    }
    public function add_banner2()
    {
        $this->verify_session();
        $this->load->model('admin_model');
        $data['loc_list'] = $this->admin_model->get_location();
        $data['allbanner2'] = $this->admin_model->get_allbanner2();
        $this->load->view('admin/header');
        $this->load->view('admin/add_banner2', $data);
        $this->load->view('admin/footer');
    }
    public function submit_banner1()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            if (empty($this->input->post('cat'))) {
                $config3['upload_path'] = './uploads/banners';   // Directory 
                $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
                $config3['max_size'] = '30720';   //Max Size
                $this->load->library('upload', $config3);  //File Uploading library
                $this->upload->initialize($config3);
                if ($this->upload->do_upload('main_img_desktop')) {
                    $d = $this->upload->data();
                    $desk = base_url() . "uploads/banners/" . $d['raw_name'] . $d['file_ext'];
                    $desk_name = $d['raw_name'] . $d['file_ext'];
                }
                if ($this->upload->do_upload('main_img_mobile')) {
                    $d = $this->upload->data();
                    $mob = base_url() . "uploads/banners/" . $d['raw_name'] . $d['file_ext'];
                    $mob_name = $d['raw_name'] . $d['file_ext'];
                }
                $data = array(
                    'img_alt_desktop' => $this->input->post('img_alt_desktop'),
                    'img_alt_mobile' => $this->input->post('img_alt_mobile'),
                    'img_name_desktop' => $desk_name,
                    'img_name_mobile' => $mob_name,
                    'img_url_desk' => $desk,
                    'img_url_mob' => $mob,
                    'location' => $this->input->post('location')

                );
                $this->load->model('admin_model');
                $this->admin_model->submit_banner1($data);
                redirect(base_url() . 'admin/add_banner1');
            } else {
                $config3['upload_path'] = './uploads/banners';   // Directory 
                $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
                $config3['max_size'] = '30720';   //Max Size
                $this->load->library('upload', $config3);  //File Uploading library
                $this->upload->initialize($config3);
                if ($this->upload->do_upload('main_img_desktop')) {
                    $d = $this->upload->data();
                    $desk = base_url() . "uploads/banners/" . $d['raw_name'] . $d['file_ext'];
                    $desk_name = $d['raw_name'] . $d['file_ext'];
                }
                if ($this->upload->do_upload('main_img_mobile')) {
                    $d = $this->upload->data();
                    $mob = base_url() . "uploads/banners/" . $d['raw_name'] . $d['file_ext'];
                    $mob_name = $d['raw_name'] . $d['file_ext'];
                }
                $data = array(
                    'img_alt_desktop' => $this->input->post('img_alt_desktop'),
                    'img_alt_mobile' => $this->input->post('img_alt_mobile'),
                    'img_name_desktop' => $desk_name,
                    'img_name_mobile' => $mob_name,
                    'img_url_desk' => $desk,
                    'img_url_mob' => $mob,
                    'cat' => $this->input->post('cat'),
                    'location' => $this->input->post('location')

                );
                $this->load->model('admin_model');
                $this->admin_model->submit_banner1($data);
                redirect(base_url() . 'admin/add_banner1');
            }
        }
    }
    public function submit_banner2()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            if (empty($this->input->post('cat'))) {
                $config3['upload_path'] = './uploads/banners';   // Directory 
                $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
                $config3['max_size'] = '30720';   //Max Size
                $this->load->library('upload', $config3);  //File Uploading library
                $this->upload->initialize($config3);
                if ($this->upload->do_upload('main_img_desktop')) {
                    $d = $this->upload->data();
                    $desk = base_url() . "uploads/banners/" . $d['raw_name'] . $d['file_ext'];
                    $desk_name = $d['raw_name'] . $d['file_ext'];
                }
                if ($this->upload->do_upload('main_img_mobile')) {
                    $d = $this->upload->data();
                    $mob = base_url() . "uploads/banners/" . $d['raw_name'] . $d['file_ext'];
                    $mob_name = $d['raw_name'] . $d['file_ext'];
                }
                $data = array(
                    'img_alt_desktop' => $this->input->post('img_alt_desktop'),
                    'img_alt_mobile' => $this->input->post('img_alt_mobile'),
                    'img_name_desktop' => $desk_name,
                    'img_name_mobile' => $mob_name,
                    'img_url_desk' => $desk,
                    'img_url_mob' => $mob,
                    'location' => $this->input->post('location')

                );
                $this->load->model('admin_model');
                $this->admin_model->submit_banner2($data);
                redirect(base_url() . 'admin/add_banner2');
            } else {
                $config3['upload_path'] = './uploads/banners';   // Directory 
                $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
                $config3['max_size'] = '30720';   //Max Size
                $this->load->library('upload', $config3);  //File Uploading library
                $this->upload->initialize($config3);
                if ($this->upload->do_upload('main_img_desktop')) {
                    $d = $this->upload->data();
                    $desk = base_url() . "uploads/banners/" . $d['raw_name'] . $d['file_ext'];
                    $desk_name = $d['raw_name'] . $d['file_ext'];
                }
                if ($this->upload->do_upload('main_img_mobile')) {
                    $d = $this->upload->data();
                    $mob = base_url() . "uploads/banners/" . $d['raw_name'] . $d['file_ext'];
                    $mob_name = $d['raw_name'] . $d['file_ext'];
                }
                $data = array(
                    'img_alt_desktop' => $this->input->post('img_alt_desktop'),
                    'img_alt_mobile' => $this->input->post('img_alt_mobile'),
                    'img_name_desktop' => $desk_name,
                    'img_name_mobile' => $mob_name,
                    'img_url_desk' => $desk,
                    'img_url_mob' => $mob,
                    'cat' => $this->input->post('cat'),
                    'location' => $this->input->post('location')

                );
                $this->load->model('admin_model');
                $this->admin_model->submit_banner2($data);
                redirect(base_url() . 'admin/add_banner2');
            }
        }
    }
   public function get_banners_bycnloc()
   {
       $this->load->model('admin_model');
     
       $res = $this->admin_model->get_banner_bycloc($this->input->post('loc'),$this->input->post('table'),$this->input->post('cat'));
     
       foreach($res->result() as $row){
           echo '<div class="blog-list">
           <div class="bleft" style="display: flex;align-items:center;">
               <img src="'.$row->img_url_desk.'" alt="" style="width: 40px;height:40px">

               <p class="paragraph-5" style="padding-left: 20px;">'.$row->location.'</p>
               <p class="paragraph-5" style="padding-left: 20px;">'.$row->cat.'</p>
           </div>
           <div class="bright">
               
               <a href="'.base_url().'admin/del_'.$this->input->post('table').'/'.$row->id.'" class="actions w-inline-block"><img src="'.base_url().'assets/images/delete.png" loading="lazy" width="32" sizes="(max-width: 479px) 100vw, 32px" alt="" /></a>
           </div>
          </div>';
       }
       
   }
    public function add_banner_forlist()
    {
        $this->verify_session();
        $this->load->model('admin_model');
        $data['loc_list'] = $this->admin_model->get_location();
        $this->load->view('admin/header');
        $this->load->view('admin/add_banner_forlist', $data);
        $this->load->view('admin/footer');
    }
    public function submit_banner_forlist()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            if (empty($this->input->post('cat'))) {
                $config3['upload_path'] = './uploads/banners';   // Directory 
                $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
                $config3['max_size'] = '30720';   //Max Size
                $this->load->library('upload', $config3);  //File Uploading library
                $this->upload->initialize($config3);
                if ($this->upload->do_upload('main_img_desktop')) {
                    $d = $this->upload->data();
                    $desk = base_url() . "uploads/banners/" . $d['raw_name'] . $d['file_ext'];
                    $desk_name = $d['raw_name'] . $d['file_ext'];
                }
                if ($this->upload->do_upload('main_img_mobile')) {
                    $d = $this->upload->data();
                    $mob = base_url() . "uploads/banners/" . $d['raw_name'] . $d['file_ext'];
                    $mob_name = $d['raw_name'] . $d['file_ext'];
                }
                $data = array(
                    'img_alt_desktop' => $this->input->post('img_alt_desktop'),
                    'img_alt_mobile' => $this->input->post('img_alt_mobile'),
                    'img_name_desktop' => $desk_name,
                    'img_name_mobile' => $mob_name,
                    'img_url_desk' => $desk,
                    'img_url_mob' => $mob,
                    'location' => $this->input->post('location')

                );
                $this->load->model('admin_model');
                $this->admin_model->submit_bannerforlist($data);
                redirect(base_url() . 'admin/add_banner_forlist');
            } else {
                $config3['upload_path'] = './uploads/banners';   // Directory 
                $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
                $config3['max_size'] = '30720';   //Max Size
                $this->load->library('upload', $config3);  //File Uploading library
                $this->upload->initialize($config3);
                if ($this->upload->do_upload('main_img_desktop')) {
                    $d = $this->upload->data();
                    $desk = base_url() . "uploads/banners/" . $d['raw_name'] . $d['file_ext'];
                    $desk_name = $d['raw_name'] . $d['file_ext'];
                }
                if ($this->upload->do_upload('main_img_mobile')) {
                    $d = $this->upload->data();
                    $mob = base_url() . "uploads/banners/" . $d['raw_name'] . $d['file_ext'];
                    $mob_name = $d['raw_name'] . $d['file_ext'];
                }
                $data = array(
                    'img_alt_desktop' => $this->input->post('img_alt_desktop'),
                    'img_alt_mobile' => $this->input->post('img_alt_mobile'),
                    'img_name_desktop' => $desk_name,
                    'img_name_mobile' => $mob_name,
                    'img_url_desk' => $desk,
                    'img_url_mob' => $mob,
                    'cat' => $this->input->post('cat'),
                    'location' => $this->input->post('location')

                );
                $this->load->model('admin_model');
                $this->admin_model->submit_bannerforlist($data);
                redirect(base_url() . 'admin/add_banner_forlist');
            }
        }
    }
    public function add_feature_blog()
    {
        $this->verify_session();
        $this->load->view('admin/header');
        $this->load->model('admin_model');
        $data['loc'] = $this->admin_model->get_location();

        $this->load->view('admin/add_feature_blog', $data);
        $this->load->view('admin/footer');
    }
    public function submit_feature_blog()
    {
        $this->verify_session();
        if ($this->input->post('submit')) {
            $config3['upload_path'] = './uploads/blogs';   // Directory 
            $config3['allowed_types'] = 'jpg|png|jpeg'; //type of images allowed
            $config3['max_size'] = '30720';   //Max Size

            $this->load->library('upload', $config3);  //File Uploading library
            $this->upload->initialize($config3);
            if ($this->upload->do_upload('userfile')) {
                $data = $this->upload->data();
                $sign = base_url() . "uploads/blogs/" . $data['raw_name'] . $data['file_ext'];
                $d = array(
                    'slug' => $this->input->post('url_slug'),
                    'location' => $this->input->post('loc'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_desc' => $this->input->post('meta_desc'),
                    'blog_desc' => $this->input->post('blogdesc'),
                    'image_alt' => $this->input->post('imgalt'),
                    'blog_img' => $sign,
                    'blog_img_name' => $data['raw_name'] . $data['file_ext']
                );
                $this->load->model('admin_model');
                $this->admin_model->upload_feature_blog($d);
                redirect(base_url() . 'admin/add_feature_blog');
            } else {
                $d['err'] = "ERROR UPLOADING IMAGE";
                $this->load->view('admin/header');
                $this->load->view('admin/add_feature_blog', $d);
                $this->load->view('admin/footer');
            }
        } else {
            redirect(base_url() . 'admin/add_feature_blog');
        }
    }
    public function del_business_banner1()
    {
        $this->verify_session();
        $id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $icon_name = $this->admin_model->get_banner1_pcimage_name($id);
        $icon_name2 = $this->admin_model->get_banner1_mobimage_name($id);
        unlink("./uploads/banners/" . $icon_name);
        unlink("./uploads/banners/" . $icon_name2);
        $this->admin_model->delete_banner1($id);
        redirect(base_url() . 'admin/add_banner1');
    }
    public function del_business_banner2()
    {
        $this->verify_session();
        $id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $icon_name = $this->admin_model->get_banner2_pcimage_name($id);
        $icon_name2 = $this->admin_model->get_banner2_mobimage_name($id);
        unlink("./uploads/banners/" . $icon_name);
        unlink("./uploads/banners/" . $icon_name2);
        $this->admin_model->delete_banner2($id);
        redirect(base_url() . 'admin/add_banner2');
    }
    public function del_business_banner_forlist()
    {
        $this->verify_session();
        $id = $this->uri->segment(3);
      
        $this->load->model('admin_model');
        $icon_name = $this->admin_model->get_bannerforlist_pcimage_name($id);
        $icon_name2 = $this->admin_model->get_bannerforlist_mobimage_name($id);
        unlink("./uploads/banners/" . $icon_name);
        unlink("./uploads/banners/" . $icon_name2);
        $this->admin_model->delete_banner_forlist($id);
        redirect(base_url() . 'admin/add_banner_forlist');
    }
    //////////////////////////////////// SESSION END   //////////////////
    public function logout()
    {
        $this->session->unset_userdata('user');
        $this->session->sess_destroy();
        redirect(base_url() . 'admin');
    }
}
