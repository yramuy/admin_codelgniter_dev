<?php
class User_Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function save_user($data) 
    {
        return $this->db->insert('tbl_users', $data);
    }

}

?>