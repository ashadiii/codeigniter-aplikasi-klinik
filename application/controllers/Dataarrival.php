<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dataarrival extends CI_Controller {

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
      $this->load->model('DataarrivalModel');

   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
      // $data['data'] = $this->DataarrivalModel->get_item();
      $data['page'] = 'list';
      $data['title'] = 'Estimated Compounding Plan';

      $dataarrival_array = array();
      $dataarrival = $this->DataarrivalModel->get_item();
      foreach($dataarrival as $row){
        $dataarrival_array[] = array(
        'parent_array' => $row,
        'child_array' =>$this->DataarrivalModel->get_itemdetail($row->id_arrival)
        );
      }
      $data['dataarrival_array'] = $dataarrival_array;


       $this->load->view('dashboard/header', $data); 
       $this->load->view('dashboard/aside');       
       $this->load->view('dashboard/dataarrival/list');
       $this->load->view('dashboard/footer');
   }

   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create()
   {
      $data['dataklinik'] = $this->DataarrivalModel->get_dataklinik();
      $data['datadelivery'] = $this->DataarrivalModel->get_datadelivery();
      $data['dataunit'] = $this->DataarrivalModel->get_dataunit();
      $data['page'] = 'create';
      $data['title'] = 'Tambah Estimated Compounding Plan';


      $this->load->view('dashboard/header', $data); 
      $this->load->view('dashboard/aside');       
      $this->load->view('dashboard/dataarrival/create');
      $this->load->view('dashboard/footer');   
   }

   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $item = $this->input->post('item');
        if(!empty($item))
        {
          foreach($item as $id => $value)
          {
            $this->form_validation->set_rules('item['.$id.']', 'Item', 'required');
            $this->form_validation->set_rules('unit['.$id.']', 'Unit', 'required');
            $this->form_validation->set_rules('qty['.$id.']', 'Qty', 'required');
          }
        }
        $this->form_validation->set_rules('id_klinik', 'Nama Klinik', 'required');
        $this->form_validation->set_rules('delivery_from', 'Delivery From', 'required');
        $this->form_validation->set_rules('date_arrival', 'Arrival Estimated', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('dataarrival/create'));
        }else{
          $data = array(
            'id_klinik' => $this->input->post('id_klinik'),
            'id_delivery' => $this->input->post('delivery_from'),
            'tgl_arrival' => $this->input->post('date_arrival')
          );
          $id_arrival = $this->DataarrivalModel->insert_item('data_arrival',$data);

          if(!empty($item))
          {
            foreach($item as $id => $value)
            {
              $dataDetail[$id] = array(
                'id_arrival' => $id_arrival,
                'item' => $this->input->post('item['.$id.']'),
                'id_unit' => $this->input->post('unit['.$id.']'),
                'qty' => $this->input->post('qty['.$id.']')
              );
              $arrivalDetail[$id] = $this->DataarrivalModel->insert_item('data_arrival_detail',$dataDetail[$id]);
            }
          }
          

           $this->session->set_flashdata('msg', 
            '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data Berhasil Di Input.
              </div>'); 
           // helper_log("add", "Melakukan Input Data Lahan"); 
           redirect(base_url('dataarrival'));
        }
    }

      /**
      * Edit Data from this method.
      *
      * @return Response
     */
    public function edit($id)
    {
      $where = array('id_arrival' => $id);
      $dataarrival = $this->DataarrivalModel->find_item($where)->result();
      $dataarrival_array = array();
      foreach($dataarrival as $row){
        $dataarrival_array[] = array(
          'parent_array' => $row,
          'child_array' =>$this->DataarrivalModel->get_itemdetail($row->id_arrival)
        );
      }
      $data['dataarrival_array'] = $dataarrival_array;

      $data['dataklinik'] = $this->DataarrivalModel->get_dataklinik();
      $data['datadelivery'] = $this->DataarrivalModel->get_datadelivery();
      $data['dataunit'] = $this->DataarrivalModel->get_dataunit();
      $data['page'] = 'edit';
      $data['title'] = 'Edit Data Arrival Estimated';
      $this->load->view('dashboard/header', $data); 
      $this->load->view('dashboard/aside');   
      $this->load->view('dashboard/dataarrival/edit');
      $this->load->view('dashboard/footer');  
    }

     /**
      * Update Data from this method.
      *
      * @return Response
     */
     public function update($idarrival)
     {
        $item = $this->input->post('item');
        if(!empty($item))
        {
          foreach($item as $id => $value)
          {
            $this->form_validation->set_rules('item['.$id.']', 'Item', 'required');
            $this->form_validation->set_rules('unit['.$id.']', 'Unit', 'required');
            $this->form_validation->set_rules('qty['.$id.']', 'Qty', 'required');
          }
        }
        $this->form_validation->set_rules('id_klinik', 'Nama Klinik', 'required');
        $this->form_validation->set_rules('delivery_from', 'Delivery From', 'required');
        $this->form_validation->set_rules('date_arrival', 'Arrival Estimated', 'required');

          if ($this->form_validation->run() == FALSE){
              $this->session->set_flashdata('errors', validation_errors());
              redirect(base_url('dataarrival/edit/'.$idarrival));
          }else{ 
            $data = array(
              'id_klinik' => $this->input->post('id_klinik'),
              'id_delivery' => $this->input->post('delivery_from'),
              'tgl_arrival' => $this->input->post('date_arrival')
            );
            $id_arrival = $this->DataarrivalModel->update_item($idarrival,$data);
            $delete_arrival_detail = $this->DataarrivalModel->delete_item_arrival_detail($idarrival);

            if(!empty($item))
            {
              foreach($item as $id => $value)
              {
                $dataDetail[$id] = array(
                  'id_arrival' => $idarrival,
                  'item' => $this->input->post('item['.$id.']'),
                  'id_unit' => $this->input->post('unit['.$id.']'),
                  'qty' => $this->input->post('qty['.$id.']')
                );
                $arrivalDetail[$id] = $this->DataarrivalModel->insert_item('data_arrival_detail',$dataDetail[$id]);
              }
            }

            // $this->DataarrivalModel->update_item($id);
            $this->session->set_flashdata('msg', 
              '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  Data ID : '.$idarrival.' Berhasil Di Edit.
                </div>'); 
            // helper_log("edit", "Melakukan Edit Data Lahan ID : ".$id.""); 
            redirect(base_url('dataarrival'));
          }
     }

     /**
      * Delete Data from this method.
      *
      * @return Response
     */
     public function delete($id)
     {
         $item = $this->DataarrivalModel->delete_item($id);
         $delete_arrival_detail = $this->DataarrivalModel->delete_item_arrival_detail($id);
         $this->session->set_flashdata('msg', 
              '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  Data ID : '.$id.' Berhasil Di Hapus.
                </div>'); 
         // helper_log("delete", "Melakukan Delete Data Lahan ID : ".$id.""); 
         redirect(base_url('dataarrival'));
     }

     /**
      * Edit Data from this method.
      *
      * @return Response
     */
     public function getunit()
     {
       $data['dataunit'] = $this->DataarrivalModel->get_dataunit();
       $this->load->view('dashboard/dataunit/getunit', $data);
     }
}