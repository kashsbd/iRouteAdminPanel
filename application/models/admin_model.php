<?php

class Admin_model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function GetHydrantCount()
    {
        $this->db->select('*');
        $this->db->from('locations');
        $this->db->where('category_id', '1'); 
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function GetHospitalCount(){
        $this->db->select('*');
        $this->db->from('locations');
        $this->db->where('category_id', '2'); 
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function GetCharityCount(){
        $this->db->select('*');
        $this->db->from('locations');
        $this->db->where('category_id', '3'); 
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function GetPoliceStationCount(){
        $this->db->select('*');
        $this->db->from('locations');
        $this->db->where('category_id', '4'); 
        $query = $this->db->get();
        return $query->num_rows();
    }
}