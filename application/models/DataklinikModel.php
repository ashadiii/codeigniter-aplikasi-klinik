<?php


class DataklinikModel extends CI_Model{


    public function get_item(){
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get("data_klinik");
        return $query->result();
    }

    public function insert_item()
    {    
        $data = array(
            'nama_klinik' => $this->input->post('nama_klinik')
        );
        return $this->db->insert('data_klinik', $data);
    }
    
    public function find_item($id)
    {
        return $this->db->get_where('data_klinik', $id);
    }
    
    public function update_item($id) 
    {
        $data=array(
            'nama_klinik' => $this->input->post('nama_klinik')
        );
        if($id==0){
            return $this->db->insert('data_klinik',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('data_klinik',$data);
        }        
    }
}
?>