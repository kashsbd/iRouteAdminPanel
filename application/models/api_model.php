<?php

class Api_model extends MY_Model{
    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function GetLocations()
    {
        if(!empty($user_name) && !empty($password))
        {
            $this->db->select('*');
            $this->db->from('locations');
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }else{
            return null;
        }
    }

    public function GetLocationsByCategory($category_id = null)
    {
        if(!empty($category_id))
        {
            $this->db->select('*');
            $this->db->from('locations');
            $this->db->where('category_id', $category_id);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }else{
            return null;
        }
    }

    public function GetLocationsByLocationID($location_id = null)
    {
        if(!empty($location_id))
        {
            $this->db->select('*');
            $this->db->from('locations');
            $this->db->where('l_id', $location_id);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }else{
            return null;
        }
    }
}