<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Blogs extends CI_Controller
{
    // public function index()
    // {
    // }
    public function details()
    {
        $loc = $this->uri->segment(1);
        $slug = $this->uri->segment(3);
        
        $this->load->model('blog_model');
       $data['blogs'] = $this->blog_model->get_all_feature_blogs($loc,$slug);
      
       $this->load->view('client/includes/header');
       $this->load->view('client/blog_detail',$data);
    //    $this->load->view('client/includes/header');


        

        // $slug = str_replace('-', ' ', $this->uri->segment(3)); //blogslug
        // $this->load->model('client_model');
        // $d['blog_details'] = $this->client_model->get_blog_by_slug($slug);

        // foreach ($d['blog_details']->result() as $row) {
        //     $d['meta_title'] = $row->meta_title;
        //     $d['meta_desc'] = $row->meta_desc;
        // }
        // $d['recommend'] = $this->client_model->get_recommend_blog_by_slug($slug);
        // $d['loc_data'] = $this->client_model->get_loc_data($this->session->location);
        // $this->load->view('client/includes/header', $d);
        // $this->load->view('client/blog_details', $d);
        // $this->load->view('client/includes/footer');
    }
    public function list()
    {
       
        $this->load->model('blog_model');
       $data['allblogs'] = $this->blog_model->get_all_blogs();
       $data['details'] = $this->blog_model->get_all_blogs();
       $this->load->view('client/includes/header',$data);
        $this->load->view('client/blog_list',$data);
        
    }
    public function blog_list()
    {
        $loc = $this->uri->segment(1);
        $slug = $this->uri->segment(3);
        
        $this->load->model('blog_model');
       $data['blogs'] = $this->blog_model->get_blogs($loc,$slug);
       $data['details']= $this->blog_model->get_blogs($loc,$slug);
      
       $this->load->view('client/includes/header',$data);
       $this->load->view('client/blog_detail',$data);
    }  
}
