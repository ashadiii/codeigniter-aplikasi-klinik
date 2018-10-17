<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dataarrivalguest extends CI_Controller {

   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 

      $this->load->model('DataarrivalguestModel');

   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function show($id)
   {
      $data['data'] = $this->DataarrivalguestModel->find_item($id);
      $data['title'] = 'Data Arrival Estimated Klinik';

      $this->load->view('dashboard/header', $data); 
      $this->load->view('dashboard/aside');       
      $this->load->view('dashboard/dataarrivalguest/show');
      $this->load->view('dashboard/footer');
   }

}