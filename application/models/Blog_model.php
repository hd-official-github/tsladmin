<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Blog_model  extends CI_Model
{
    function get_all_feature_blogs($city,$slug){
            $this->db->where(array('location'=>$city,'slug'=>$slug));
            return $this->db->get('feature_blog');
    }
      
   function get_all_blogs()
   {
       return $this->db->get('blogs');
   }
   function get_blogs($city,$slug)
   {
       $this->db->where(array('loc'=>$city,'slug'=>$slug));
       return $this->db->get('blogs');
   }
}