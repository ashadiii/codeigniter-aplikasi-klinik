<?php


class DataunitModel extends CI_Model{


    public function get_item(){
        $this->db->order_by('id_unit', 'DESC');
        $query = $this->db->get("data_unit");
        return $query->result();
    }

    public function insert_item()
    {    
        $data = array(
            'nama_unit' => $this->input->post('unit')
        );
        return $this->db->insert('data_unit', $data);
    }
    
    public function find_item($id)
    {
        return $this->db->get_where('data_unit', $id);
    }
    
    public function update_item($id) 
    {
        $data=array(
            'nama_unit' => $this->input->post('unit')
        );
        if($id==0){
            return $this->db->insert('data_unit',$data);
        }else{
            $this->db->where('id_unit',$id);
            return $this->db->update('data_unit',$data);
        }        
    }
    public function delete_item($id)
    {
        return $this->db->delete('data_unit', array('id_unit' => $id));
    }
}
?>