<?php


class DataarrivalModel extends CI_Model{


    public function get_item(){
        $this->db->select('*');
        $this->db->from('data_arrival a');
        $this->db->join('data_klinik b','b.id_klinik=a.id_klinik', 'left');
        $this->db->join('data_delivery c','c.id_delivery=a.id_delivery', 'left');
        $this->db->order_by('a.id_arrival', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_itemdetail($id){
        $this->db->select('*');
        $this->db->from('data_arrival_detail a');
        $this->db->join('data_unit b','b.id_unit=a.id_unit', 'left');
        $this->db->where('a.id_arrival', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_item($table,$data)
    {   
        $query = $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    
    public function find_item($id)
    {
        return $this->db->get_where('data_arrival', $id);
    }
    
    public function update_item($id,$data) 
    {
        $this->db->where('id_arrival',$id);
        return $this->db->update('data_arrival',$data);
    }
    public function delete_item($id)
    {
        return $this->db->delete('data_arrival', array('id_arrival' => $id));
    }
    public function delete_item_arrival_detail($id)
    {
        return $this->db->delete('data_arrival_detail', array('id_arrival' => $id));
    }
    public function get_dataklinik(){
        $this->db->order_by('id_klinik', 'ASC');
        $query = $this->db->get("data_klinik");
        return $query->result();
    }
    public function get_datadelivery(){
        $this->db->order_by('id_delivery', 'ASC');
        $query = $this->db->get("data_delivery");
        return $query->result();
    }
    public function get_dataunit(){
        $this->db->order_by('id_unit', 'ASC');
        $query = $this->db->get("data_unit");
        return $query->result();
    }
}
?>