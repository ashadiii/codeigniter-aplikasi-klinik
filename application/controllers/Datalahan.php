<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Datalahan extends CI_Controller {

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
      $this->load->model('DatalahanModel');

   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['data'] = $this->DatalahanModel->get_item();
       $data['page'] = 'list';
       $data['title'] = 'Data Lahan';


       $this->load->view('dashboard/header', $data); 
       $this->load->view('dashboard/aside');       
       $this->load->view('dashboard/datalahan/list');
       $this->load->view('dashboard/footer');
   }


   /**
    * Show Details this method.
    *
    * @return Response
   */
   public function show($id)
   {
     
     helper_log("view", "Melakukan View Detail Data Lahan ID : ".$id.""); 
     $where = array('id' => $id);
     $data['data'] = $this->DatalahanModel->find_item($where)->result();
     $data['page'] = 'show';
     $data['title'] = 'Detail Data Lahan';
     $this->load->view('dashboard/header', $data); 
     $this->load->view('dashboard/aside');   
     $this->load->view('dashboard/datalahan/show');
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
      $data['title'] = 'Tambah Data Lahan';


      $this->load->view('dashboard/header', $data); 
      $this->load->view('dashboard/aside');       
      $this->load->view('dashboard/datalahan/create');
      $this->load->view('dashboard/footer');   
   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('no_ktp', 'No KTP', 'required');
        $this->form_validation->set_rules('nama_pemilik', 'Nama Pemilik', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('datalahan/create'));
        }else{
           $this->DatalahanModel->insert_item();
           $this->session->set_flashdata('msg', 
            '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data Berhasil Di Input.
              </div>'); 
           helper_log("add", "Melakukan Input Data Lahan"); 
           redirect(base_url('datalahan'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
     $where = array('id' => $id);
     $data['data'] = $this->DatalahanModel->find_item($where)->result();
     $data['page'] = 'edit';
     $data['title'] = 'Edit Data Lahan';
     $this->load->view('dashboard/header', $data); 
     $this->load->view('dashboard/aside');   
     $this->load->view('dashboard/datalahan/edit');
     $this->load->view('dashboard/footer');  
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
        $this->form_validation->set_rules('no_ktp', 'No KTP', 'required');
        $this->form_validation->set_rules('nama_pemilik', 'Nama Pemilik', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('datalahan/edit/'.$id));
        }else{ 
          $this->DatalahanModel->update_item($id);
          $this->session->set_flashdata('msg', 
            '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data Lahan ID : '.$id.' Berhasil Di Edit.
              </div>'); 
          helper_log("edit", "Melakukan Edit Data Lahan ID : ".$id.""); 
          redirect(base_url('datalahan'));
        }
   }

   /**
    * filter auto sum from this method.
    *
    * @return Response
   */
   public function filter()
   {
       $data['data'] = $this->DatalahanModel->get_item();
       $data['title'] = 'Filter Autosum';


       $this->load->view('dashboard/header', $data); 
       $this->load->view('dashboard/aside');       
       $this->load->view('dashboard/datalahan/filter-autosum');
       $this->load->view('dashboard/footer');
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->DatalahanModel->delete_item($id);
       $this->session->set_flashdata('msg', 
            '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data Lahan ID : '.$id.' Berhasil Di Hapus.
              </div>'); 
       helper_log("delete", "Melakukan Delete Data Lahan ID : ".$id.""); 
       redirect(base_url('datalahan'));
   }
}