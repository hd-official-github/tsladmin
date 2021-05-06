<?php

class Admin_model extends CI_Model
{
    function upload_blog($data)
    {
        $this->db->insert('blogs', $data);
        return true;
    }
    function get_blogs()
    {
        return $this->db->get('blogs');
    }
    function get_blog_byid($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('blogs');
    }
    function get_blog_image_name($i)
    {
        $this->db->where('id', $i);
        $q = $this->db->get('blogs');
        foreach ($q->result() as $row) {
            return $row->blog_img_name;
        }
    }
    function update_blog($id, $arr)
    {
        $this->db->where('id', $id);
        $this->db->update('blogs', $arr);
    }
    function delete_blog($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('blogs');
    }
    function delete_feature($id)
    {
        $this->db->where('business_id', $id);
        return $this->db->delete('business_feature');
    }
    function verify_username($data)
    {
        $this->db->where('user_id', $data);
        $q = $this->db->get('admin_auth');
        return $q->num_rows() > 0 ? true : false;
    }
    function verify_password($data)
    {
        $this->db->where('pass', $data);
        $q = $this->db->get('admin_auth');
        return $q->num_rows() > 0 ? true : false;
    }
    function upload_location($arr)
    {
        $this->db->insert('location', $arr);
        return true;
    }
    function get_location()
    {

        return $this->db->get('location');
    }
    function get_location_byname($name)
    {
        $this->db->where('location_name', $name);
        return $this->db->get('location');
    }
    function update_location($id, $arr)
    {
        $this->db->where('id', $id);
        return $this->db->update('location', $arr);
    }
    function upload_sub_location($arr)
    {
        $this->db->insert('sub_location', $arr);
        return true;
    }
    function get_sub_location($city)
    {
        $this->db->where('location_name', $city);
        $this->db->order_by("sub_loc_name", "asc");
        return $this->db->get('sub_location');
    }
    function delete_location($loc)
    {
        $this->db->where('location_name', $loc);
        return $this->db->delete('location');
    }
    function delete_sub_location($loc)
    {
        $this->db->where('location_name', $loc);
        return $this->db->delete('sub_location');
    }
    function del_sub_loc_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('sub_location');
    }
    function upload_category($arr)
    {
        $this->db->insert('category', $arr);
    }
    function get_category()
    {
        return $this->db->get('category');
    }
    function get_cat_name_by_id($catid)
    {
        $this->db->where('id', $catid);
        $q = $this->db->get('category');
        foreach ($q->result() as $row) {
            return $row->category_name;
        }
    }
    function get_category_details($name)
    {
        $this->db->where('category_name', $name);
        return $this->db->get('category');
    }
    function upload_sub_category($arr)
    {
        $this->db->insert('subcategory', $arr);
    }
    function get_sub_category($cat)
    {
        $this->db->where('category_name', $cat);
        return $this->db->get('subcategory');
    }
    function get_cat_image_name($id)
    {
        $this->db->where('category_name', $id);
        $q = $this->db->get('category');
        foreach ($q->result() as $row) {
            return $row->icon_name;
        }
    }
    function get_subcat_image_name($id)
    {
        $this->db->where('id', $id);
        $q = $this->db->get('subcategory');
        foreach ($q->result() as $row) {
            return $row->icon_name;
        }
    }
    function delete_cat($id)
    {
        $this->db->where('category_name', $id);
        $this->db->delete('category');
    }
    function delete_subcat($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('subcategory');
    }
    function upload_business($data)
    {
        $this->db->insert('business_list', $data);
    }
    function delete_business_images($bid)
    {
        // print_r($bid);
        // die;
        $this->db->where('business_id', $bid);
        $q = $this->db->get('business_images');
        // print_r($q);
        // die;
        foreach ($q->result() as $row) {
            $path = "./uploads/business/" . $row->image_name;
            unlink($path);
            $path = "";
        }
        $this->db->where('business_id', $bid);
        $this->db->delete('business_images');
    }
    function get_main_img_name($bid)
    {
        $this->db->where('business_id', $bid);
        $q = $this->db->get('business_list');
        foreach ($q->result() as $row) {
            return $row->main_img_name;
        }
    }
    function delete_business_reviews($bid)
    {
        $this->db->where('business_id', $bid);
        $this->db->delete('business_reviews');
    }
    function delete_business($bid)
    {
        $this->db->where('business_id', $bid);
        $this->db->delete('business_list');
    }
    function get_business()
    {
        return $this->db->get('business_list');
    }
    function get_business_byid($bid)
    {
        $this->db->where('business_id', $bid);
        return $this->db->get('business_list');
    }
    function upload_review($data)
    {
        $this->db->insert('business_reviews', $data);
    }
    function upload_business_img($arr)
    {
        $this->db->insert('business_images', $arr);
    }
    function update_business($id, $arr)
    {
        $this->db->where('business_id', $id);
        $this->db->update('business_list', $arr);
    }
    function update_category($id, $arr)
    {
        $this->db->where('id', $id);
        $this->db->update('category', $arr);
    }
    function get_all_loc()
    {
        return $this->db->get('location');
    }
    function get_subloc()
    {
        return $this->db->get('sub_location');
    }
    function upload_faq($arr)
    {
        $this->db->insert('business_faq', $arr);
    }
    function upload_features($arr)
    {
        $this->db->insert('business_feature', $arr);
    }
    function get_business_id()
    {
        return $this->db->get('business_feature');
    }
    function get_features($data)
    {

        $this->db->where_in('business_id', $data);
        return $this->db->get('business_list');
    }
    function upload_features2($arr)
    {
        $this->db->insert('business_feature2', $arr);
    }
    function getfeature_first($loc, $table)
    {
        $this->db->select('*');
        $this->db->from('business_list');
        $this->db->join($table, "$table.business_id = business_list.business_id");
        $this->db->where('business_list.location', $loc);
        return $this->db->get();
    }
    function submit_banner1($arr)
    {
        $this->db->insert('business_banner1', $arr);
    }
    function submit_banner2($arr)
    {
        $this->db->insert('business_banner2', $arr);
    }
    function upload_feature_blog($arr)
    {
        $this->db->insert('feature_blog', $arr);
    }
    function edit_sub_loc($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('sub_location');
    }
    function get_all_locs()
    {
        return $this->db->get('location');
    }
    function update_sublocation($id, $arr)
    {
        $this->db->where('id', $id);
        $this->db->update('sub_location', $arr);
    }
}
