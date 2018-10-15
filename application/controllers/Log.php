<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Log extends CI_Controller {

   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 
      if($this->session->userdata('status') != "login"){
        redirect(base_url("login"));
      }
      $this->load->model('LogModel');

   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['page'] = 'log';
       $data['title'] = 'User Log';
       
       $data['data'] = $this->LogModel->get_item();
       $this->load->view('dashboard/header', $data); 
       $this->load->view('dashboard/aside');    
       $this->load->view('dashboard/log/index');       
       $this->load->view('dashboard/footer');
   }

}