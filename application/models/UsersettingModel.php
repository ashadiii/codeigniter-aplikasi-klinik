<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class UsersettingModel extends CI_Model {
 
    
    public function get_item($id){
        
        return $this->db->get_where('user', $id);
    }
    public function update_item($id) 
    {
        $data=array(
            'nama' => $this->input->post('nama_lengkap'),
            'username'=> $this->input->post('username'),
            'alamat'=> $this->input->post('alamat'),
            'tgl_lahir'=> $this->input->post('tgl_lahir')
        );
        if($id==0){
            return $this->db->insert('user',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('user',$data);
        }        
    }

    // Fungsi untuk menyimpan data ke database
    public function gambar($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('user')->row();
    }

    public function save_img($id, $data){
        
        $this->db->where('id',$id);
        return $this->db->update('user',$data);
    }
}