<?php


class DatadeliveryfromModel extends CI_Model{


    public function get_item(){
        $this->db->order_by('id_delivery', 'DESC');
        $query = $this->db->get("data_delivery");
        return $query->result();
    }

    public function insert_item()
    {    
        $data = array(
            'nama_delivery' => $this->input->post('delivery_from')
        );
        return $this->db->insert('data_delivery', $data);
    }
    
    public function find_item($id)
    {
        return $this->db->get_where('data_delivery', $id);
    }
    
    public function update_item($id) 
    {
        $data=array(
            'nama_delivery' => $this->input->post('delivery_from')
        );
        if($id==0){
            return $this->db->insert('data_delivery',$data);
        }else{
            $this->db->where('id_delivery',$id);
            return $this->db->update('data_delivery',$data);
        }        
    }
    public function delete_item($id)
    {
        return $this->db->delete('data_delivery', array('id_delivery' => $id));
    }
}
?>