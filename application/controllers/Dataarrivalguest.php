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
      $dataarrival_array = array();      
      $data['title'] = 'Estimated Compounding Plan';
      $data['klinik'] = $this->DataarrivalguestModel->find_klinik($id);

      $dataarrival = $this->DataarrivalguestModel->find_item($id);
      foreach($dataarrival as $row){
        $dataarrival_array[] = array(
        'parent_array' => $row,
        'child_array' =>$this->DataarrivalguestModel->find_itemdetails($row->id_arrival)
        );
      }
      $data['dataarrival_array'] = $dataarrival_array;


      $this->load->view('dashboard/header', $data); 
      $this->load->view('dashboard/aside');       
      $this->load->view('dashboard/dataarrivalguest/show');
      $this->load->view('dashboard/footer');
   }

}