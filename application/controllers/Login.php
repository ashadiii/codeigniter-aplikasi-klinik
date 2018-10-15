<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

  /**
    * Get All Data from this method.
    *
    * @return Response
  */
  public function __construct() {
      parent::__construct(); 
      
      $this->load->library('form_validation');
      $this->load->model('LoginModel');

  }


  /**
    * Display Data this method.
    *
    * @return Response
  */
  public function index()
  {
	   	if($this->session->userdata('status') == "login")
	   	{
	    	redirect(base_url("dashboard"));
	    }
	    else
	    {
	    	$this->load->view('dashboard/login/index');  
	    }
            
  }
  function proses() 
  {
      $this->form_validation->set_rules('username', 'username', 'required');
      $this->form_validation->set_rules('password', 'password', 'required');
		
      if ($this->form_validation->run() == FALSE) 
      {
          $this->session->set_flashdata('result_login', '<br>Nama atau Password belum diisi.');
			    redirect(base_url('login'));
      } 
      else 
      {
          $tgl_login=date("Y-m-d"); 
			    $jam_login=date("H:i:s");
          $usr = $this->input->post('username');
          $psw = $this->input->post('password');
          $u = $usr;
          $p = md5($psw);
          $cek = $this->LoginModel->cek($u, $p);
          if ($cek->num_rows() > 0) 
          {
              //login berhasil, buat session
              foreach ($cek->result() as $qad) 
              {
                $sess_data['id'] = $qad->id;
                $sess_data['nama'] = $qad->nama;
                $sess_data['u_name'] = $qad->username;
					      $sess_data['pwd'] = $qad->password;
                $sess_data['image'] = $qad->image;
                $sess_data['tgl_login'] = $tgl_login;
					      $sess_data['jam_login'] = $jam_login;
					      $sess_data['status'] = 'login';
                $this->session->set_userdata($sess_data);
              }
              $this->session->set_flashdata('msg', 
              '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  Login Berhasil.
                </div>');
              helper_log("login", "Melakukan Login"); 
              redirect(base_url('dashboard'));
          } 
          else 
          {
              $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
	            redirect(base_url('login'));
          }
      }
  }

  function logout() 
  {
    helper_log("logout", "Melakukan Logout"); 
    $this->session->sess_destroy(); 
    
    redirect(base_url('login'),'refresh');
  }

}