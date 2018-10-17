<?php


class DataarrivalguestModel extends CI_Model{

    public function find_item($id)
    {
        $this->db->select('*');
        $this->db->from('data_arrival a');
        $this->db->join('data_klinik b','b.id_klinik=a.id_klinik');
        $this->db->where('a.id_klinik', $id);
        $query = $this->db->get(); 
        return $query->result();
    }
    
}
?>