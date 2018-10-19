<?php


class DataarrivalguestModel extends CI_Model{

    public function find_item($id)
    {
        $this->db->select('*');
        $this->db->from('data_arrival a');
        $this->db->join('data_klinik b','b.id_klinik=a.id_klinik', 'left');
        $this->db->join('data_delivery c','c.id_delivery=a.id_delivery', 'left');
        $this->db->where('a.id_klinik', $id);
        $query = $this->db->get(); 
        return $query->result();
    }

    public function find_klinik($id)
    {
        $this->db->select('*');
        $this->db->from('data_klinik');
        $this->db->where('id_klinik', $id);
        $query = $this->db->get(); 
        return $query->result();
    }
    
}
?>