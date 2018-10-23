<?php


class DataarrivalguestModel extends CI_Model{

    public function find_item($id)
    {
        $this->db->select('*');
        $this->db->from('data_arrival a');
        $this->db->join('data_klinik b','b.id_klinik=a.id_klinik', 'left');
        $this->db->join('data_delivery c','c.id_delivery=a.id_delivery', 'left');
        $this->db->where('a.id_klinik', $id);
        $this->db->order_by('a.id_arrival', 'DESC');
        $query = $this->db->get(); 
        return $query->result();
    }
    public function find_itemdetails($id)
    {
        $this->db->select('*');
        $this->db->from('data_arrival_detail a');
        $this->db->join('data_unit b','b.id_unit=a.id_unit', 'left');
        $this->db->where('a.id_arrival', $id);
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