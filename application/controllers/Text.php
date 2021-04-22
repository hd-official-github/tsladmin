<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Text extends CI_Controller
{
     public function index()
     {
         $this->load->view("client/text/index");
     }
     public function banglore(){
         $this->load->view("client/text/banglore");
     }
   public function banglist(){
       $this->load->view('client/text/banglist');
   }
   public function bang_details(){
       $this->load->view('client/text/bang_details');
   }
}
