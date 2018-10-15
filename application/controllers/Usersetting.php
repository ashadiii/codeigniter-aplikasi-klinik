<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usersetting extends CI_Controller {

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
      $this->load->model('UsersettingModel');

   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index($id)
   {
       $data['page'] = 'usersetting';
       $data['title'] = 'User Setting';
       
       $where = array('id' => $id);
       $data['data'] = $this->UsersettingModel->get_item($where)->result();
       $this->load->view('dashboard/header', $data); 
       $this->load->view('dashboard/aside');    
       $this->load->view('dashboard/usersetting/index');       
       $this->load->view('dashboard/footer');
   }
   public function edit($id)
   {
     $data['title'] = 'Edit User Setting';
       
     $where = array('id' => $id);
     $data['data'] = $this->UsersettingModel->get_item($where)->result();
     $this->load->view('dashboard/header', $data); 
     $this->load->view('dashboard/aside');    
     $this->load->view('dashboard/usersetting/edit');       
     $this->load->view('dashboard/footer');
   }

   public function update($id)
   {
      $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('username', 'Username', 'required');

      if ($this->form_validation->run() == FALSE){
          $this->session->set_flashdata('errors', validation_errors());
          redirect(base_url('usersetting/edit/'.$id));
      }else{ 
        $cekusername = $this->db->query("SELECT * FROM user where username='".$this->input->post('username')."' and id='".$id."'")->num_rows();
        if ($cekusername>0) { 
          $this->UsersettingModel->update_item($id);

          $this->session->set_flashdata('msg', 
            '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                Data User Berhasil Di Edit.
              </div>'); 
          helper_log("edituser", "Melakukan Edit Data User ID : ".$id.""); 
          redirect(base_url('usersetting/index/'.$id.''));
        }
        else
        {
          $this->UsersettingModel->update_item($id);

          helper_log("edituser", "Melakukan Edit Data User ID : ".$id.""); 
          $this->session->sess_destroy(); 
          redirect(base_url('usersetting/authlogout'));
        }
        
      }
   }
   public function authlogout()
   {
      $this->session->set_flashdata('logoutadmin', 
        '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            Data User Berhasil Di Edit.
          </div>'); 
      redirect(base_url('login'));
   }
    public function updateimage($id) {
      
        $row = $this->UsersettingModel->gambar($id);
        $config['upload_path']   = 'assets/img/';  // foler upload 
        $config['allowed_types'] = 'gif|jpg|png'; // jenis file
        $config['max_size']      = 2048;
        $config['max_width']     = 1024;
        $config['max_height']    = 768;
        $config['remove_spaces'] = TRUE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('imgtes')) //sesuai dengan name pada form 
        {
               echo 'anda belum upload';
        }
        else
        {
            unlink('assets/img/'.$row->image);
            $file = $this->upload->data();
            $gambar = $file['file_name'];

            $this->UsersettingModel->save_img($id, array(
                'image' => $gambar
                )
            );
            $this->session->set_flashdata('msg','data berhasil di update');
            redirect(base_url('usersetting/index/'.$id.''));
        }
      
  }

}