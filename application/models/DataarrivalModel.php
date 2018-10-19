<?php


class DataarrivalModel extends CI_Model{


    public function get_item(){
        $this->db->select('*');
        $this->db->from('data_arrival a');
        $this->db->join('data_klinik b','b.id_klinik=a.id_klinik', 'left');
        $this->db->join('data_delivery c','c.id_delivery=a.id_delivery', 'left');
        $this->db->order_by('id_arrival', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_item()
    {   
        $item = $this->input->post('item');
        if(!empty($item))
        {
            foreach($item as $id => $value)
            {
                $returnItem .= ''.$this->input->post('item['.$id.']').',';
                $returnUnit .= ''.$this->input->post('unit['.$id.']').',';
                $returnQty .= ''.$this->input->post('qty['.$id.']').',';
            }
            
        }

        $data = array(
            'id_klinik' => $this->input->post('id_klinik'),
            'id_delivery' => $this->input->post('delivery_from'),
            'unit' => $returnUnit,
            'item' => $returnItem,
            'qty' => $returnQty,
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
            'id_delivery' => $this->input->post('delivery_from'),
            'id_unit' => $this->input->post('unit'),
            'item' => $this->input->post('item'),
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