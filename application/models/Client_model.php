<?php

class Client_model extends CI_Model
{
    function get_location()
    {
        return $this->db->get('location');
    }
    function get_loc_data($name)
    {
        $this->db->where('location_name', $name);
        return $this->db->get('location');
    }
    function get_subloc_data($loc)
    {
        $this->db->where('location_name', $loc);
        return $this->db->get('sub_location');
    }
    function get_category_data()
    {
        return $this->db->get('category');
    }
    function get_blogs_by_location($name)
    {
        $this->db->where('loc', $name);
        return $this->db->get('blogs');
    }
    function get_blog_by_slug($slug)
    {
        $this->db->where('slug', $slug);
        return $this->db->get('blogs');
    }
    function get_recommend_blog_by_slug($slug)
    {
        $this->db->where('slug', $slug);
        $q = $this->db->get('blogs');
        foreach ($q->result() as $row) {
            $id = $row->id;
        }
        $query = "SELECT * FROM blogs WHERE id > $id;";
        return $this->db->query($query);
    }
    function get_featured_directory($name)
    {
        $this->db->where('location', $name);
        $this->db->limit(6);
        return $this->db->get('business_list');
    }
}
