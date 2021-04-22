<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Subcategory extends CI_Controller
{
    public function index()
    {
        $loc = $this->uri->segment(1);
        $category = str_replace('-', ' ', $this->uri->segment(3));;
        $subcategory = str_replace('-', ' ', $this->uri->segment(4));;

        echo $loc . $category . $subcategory;
    }
}
