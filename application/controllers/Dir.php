<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dir extends CI_Controller
{
    public function index()
    {
        redirect(base_url());
    }
    public function dir_details()
    {
        $loc = $this->uri->segment(1);
        $business_name = str_replace('-', ' ', $this->uri->segment(3));
        $this->load->model('directory_model');
        $loc_exst = $this->directory_model->chk_loc_exist($loc);

        $data = $this->directory_model->get_dir_details($business_name);
        if ($data->num_rows() > 0) {
        } else {
            redirect(base_url() . '404');
        }
    }
    public function dir_details_without_location()
    {
        $business_name = str_replace('-', ' ', $this->uri->segment(3));
        $this->load->model('directory_model');
        $data = $this->directory_model->get_dir_details($business_name);
        if ($data->num_rows() > 0) {
        } else {
            redirect(base_url() . '404');
        }
    }
}
