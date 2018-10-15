<?php


class DatalahanModel extends CI_Model{


    public function get_item(){
        // if(!empty($this->input->get("search"))){
        //   $this->db->like('title', $this->input->get("search"));
        //   $this->db->or_like('description', $this->input->get("search")); 
        // }
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get("data_lahan");
        // $query = $this->db->order_by('id', 'DESC');
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'no_ktp' => $this->input->post('no_ktp'),
            'nama_pemilik' => $this->input->post('nama_pemilik')
        );
        return $this->db->insert('data_lahan', $data);
    }


    public function update_item($id) 
    {
        $data=array(
            'no_ktp' => $this->input->post('no_ktp'),
            'nama_pemilik'=> $this->input->post('nama_pemilik')
        );
        if($id==0){
            return $this->db->insert('data_lahan',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('data_lahan',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('data_lahan', $id);
    }


    public function delete_item($id)
    {
        return $this->db->delete('data_lahan', array('id' => $id));
    }
}
?>