<?php

class Login_model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function CheckLogin($user_name = null, $password = null)
    {
        if(!empty($user_name) && !empty($password))
        {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('user_name', $user_name);
            $this->db->where('user_password', $password);
            $query = $this->db->get();
            $result = $query->first_row();
            return $result;
        }else{
            return null;
        }
    }
}