<?php


class DataarrivalModel extends CI_Model{


    public function get_item(){
        $this->db->select('*');
        $this->db->from('data_arrival');
        $this->db->join('data_klinik','data_klinik.id_klinik=data_arrival.id_klinik');
        $this->db->order_by('id_arrival', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_item()
    {    
        $data = array(
            'id_klinik' => $this->input->post('id_klinik'),
            'delivery_from' => $this->input->post('delivery_from'),
            'item' => $this->input->post('item'),
            'weight' => $this->input->post('weight'),
            'qty' => $this->input->post('qty'),
            'tgl_arrival' => $this->input->post('date_arrival')
        );
        return $this->db->insert('data_arrival', $data);
    }
    
    public function find_item($id)
    {
        return $this->db->get_where('data_arrival', $id);
    }
    
    public function update_item($id) 
    {
        $data=array(
            'id_klinik' => $this->input->post('id_klinik'),
            'delivery_from' => $this->input->post('delivery_from'),
            'item' => $this->input->post('item'),
            'weight' => $this->input->post('weight'),
            'qty' => $this->input->post('qty'),
            'tgl_arrival' => $this->input->post('date_arrival')
        );
        if($id==0){
            return $this->db->insert('data_arrival',$data);
        }else{
            $this->db->where('id_arrival',$id);
            return $this->db->update('data_arrival',$data);
        }        
    }
    public function delete_item($id)
    {
        return $this->db->delete('data_arrival', array('id_arrival' => $id));
    }
    public function get_dataklinik(){
        $this->db->order_by('id_klinik', 'ASC');
        $query = $this->db->get("data_klinik");
        return $query->result();
    }
}
?>