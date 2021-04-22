<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Errors extends CI_Controller
{
    public function index()
    {
        $this->load->view('404');
    }
    public function page_missing()
    {
    }
}
