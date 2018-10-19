<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Datadeliveryfrom extends CI_Controller {

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
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('DatadeliveryfromModel');

   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['data'] = $this->DatadeliveryfromModel->get_item();
       $data['page'] = 'list';
       $data['title'] = 'Data Delivery From';


       $this->load->view('dashboard/header', $data); 
       $this->load->view('dashboard/aside');       
       $this->load->view('dashboard/datadeliveryfrom/list');
       $this->load->view('dashboard/footer');
   }

   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create()
   {
      $data['page'] = 'create';
      $data['title'] = 'Tambah Data Delivery From';


      $this->load->view('dashboard/header', $data); 
      $this->load->view('dashboard/aside');       
      $this->load->view('dashboard/datadeliveryfrom/create');
      $this->load->view('dashboard/footer');   
   }

   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('delivery_from', 'Data Delivery From', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('datadeliveryfrom/create'));
        }else{
           $this->DatadeliveryfromModel->insert_item();
           $this->session->set_flashdata('msg', 
            '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data Berhasil Di Input.
              </div>'); 
           helper_log("add", "Melakukan Input Data Lahan"); 
           redirect(base_url('datadeliveryfrom'));
        }
    }

      /**
      * Edit Data from this method.
      *
      * @return Response
     */
     public function edit($id)
     {
       $where = array('id_delivery' => $id);
       $data['data'] = $this->DatadeliveryfromModel->find_item($where)->result();
       $data['page'] = 'edit';
       $data['title'] = 'Edit Data Delivery From';
       $this->load->view('dashboard/header', $data); 
       $this->load->view('dashboard/aside');   
       $this->load->view('dashboard/datadeliveryfrom/edit');
       $this->load->view('dashboard/footer');  
     }

     /**
      * Update Data from this method.
      *
      * @return Response
     */
     public function update($id)
     {
          $this->form_validation->set_rules('delivery_from', 'Data Delivery From', 'required');

          if ($this->form_validation->run() == FALSE){
              $this->session->set_flashdata('errors', validation_errors());
              redirect(base_url('datadeliveryfrom/edit/'.$id));
          }else{ 
            $this->DatadeliveryfromModel->update_item($id);
            $this->session->set_flashdata('msg', 
              '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  Data ID : '.$id.' Berhasil Di Edit.
                </div>'); 
            helper_log("edit", "Melakukan Edit Data Lahan ID : ".$id.""); 
            redirect(base_url('datadeliveryfrom'));
          }
     }

     /**
      * Delete Data from this method.
      *
      * @return Response
     */
     public function delete($id)
     {
         $item = $this->DatadeliveryfromModel->delete_item($id);
         $this->session->set_flashdata('msg', 
              '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  Data ID : '.$id.' Berhasil Di Hapus.
                </div>'); 
         helper_log("delete", "Melakukan Delete Data Lahan ID : ".$id.""); 
         redirect(base_url('datadeliveryfrom'));
     }
}