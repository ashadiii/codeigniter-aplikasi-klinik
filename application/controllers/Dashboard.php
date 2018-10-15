<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

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
      //$this->load->model('DashboardModel');

   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['page'] = 'dashboard';
       $data['title'] = 'Dashboard';
       
       //$data['data'] = $this->ItemModel->get_item();
       $this->load->view('dashboard/header', $data); 
       $this->load->view('dashboard/aside');    
       $this->load->view('dashboard/index');       
       //$this->load->view('item/list',$data);
       $this->load->view('dashboard/footer');
   }
}