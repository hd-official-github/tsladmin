<?php

class Directory_model extends CI_Model
{
    function get_dir_details($business_name)
    {
        $this->db->where('business_name', $business_name);
        return $this->db->get('business_list');
    }
    function chk_loc_exist($location)
    {
        $this->db->where('location_name', $location);
        return $this->db->get('location');
    }
}
