<?php


class LoginModel extends CI_Model{


    function cek($nama_user, $password) {
        $this->db->where("username", $nama_user);
        $this->db->where("password", $password);
        return $this->db->get("user");
    }
}
?>