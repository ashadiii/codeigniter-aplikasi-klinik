<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dataunit extends CI_Controller {

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
      $this->load->model('DataunitModel');

   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['data'] = $this->DataunitModel->get_item();
       $data['page'] = 'list';
       $data['title'] = 'Data Unit';


       $this->load->view('dashboard/header', $data); 
       $this->load->view('dashboard/aside');       
       $this->load->view('dashboard/dataunit/list');
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
      $data['title'] = 'Tambah Data Unit';


      $this->load->view('dashboard/header', $data); 
      $this->load->view('dashboard/aside');       
      $this->load->view('dashboard/dataunit/create');
      $this->load->view('dashboard/footer');   
   }

   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('unit', 'Data Unit', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('dataunit/create'));
        }else{
           $this->DataunitModel->insert_item();
           $this->session->set_flashdata('msg', 
            '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data Berhasil Di Input.
              </div>'); 
           helper_log("add", "Melakukan Input Data Lahan"); 
           redirect(base_url('dataunit'));
        }
    }

      /**
      * Edit Data from this method.
      *
      * @return Response
     */
     public function edit($id)
     {
       $where = array('id_unit' => $id);
       $data['data'] = $this->DataunitModel->find_item($where)->result();
       $data['page'] = 'edit';
       $data['title'] = 'Edit Data Unit';
       $this->load->view('dashboard/header', $data); 
       $this->load->view('dashboard/aside');   
       $this->load->view('dashboard/dataunit/edit');
       $this->load->view('dashboard/footer');  
     }

     /**
      * Update Data from this method.
      *
      * @return Response
     */
     public function update($id)
     {
          $this->form_validation->set_rules('unit', 'Data Unit', 'required');

          if ($this->form_validation->run() == FALSE){
              $this->session->set_flashdata('errors', validation_errors());
              redirect(base_url('dataunit/edit/'.$id));
          }else{ 
            $this->DataunitModel->update_item($id);
            $this->session->set_flashdata('msg', 
              '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  Data ID : '.$id.' Berhasil Di Edit.
                </div>'); 
            helper_log("edit", "Melakukan Edit Data Lahan ID : ".$id.""); 
            redirect(base_url('dataunit'));
          }
     }

     /**
      * Delete Data from this method.
      *
      * @return Response
     */
     public function delete($id)
     {
         $item = $this->DataunitModel->delete_item($id);
         $this->session->set_flashdata('msg', 
              '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  Data ID : '.$id.' Berhasil Di Hapus.
                </div>'); 
         helper_log("delete", "Melakukan Delete Data Lahan ID : ".$id.""); 
         redirect(base_url('dataunit'));
     }
}