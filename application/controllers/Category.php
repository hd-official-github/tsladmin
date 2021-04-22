<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category extends CI_Controller
{
    public function index()
    {
        // if($this->uri->segment(1)=='admin'){
        //     redirect(base_url().'admin');
        // }
        $cat = $this->uri->segment(2);
        $this->load->model('catogery_model');
       $data['sub_cat'] = $this->catogery_model->get_all_subcat($cat);    
       $this->load->view('client/includes/header');   
       $this->load->view('client/catogery',$data);
       $this->load->view('client/includes/footer');   
        
    }
    public function subcategory()
    {
        $loc = $this->uri->segment(3);
        
    }
}
