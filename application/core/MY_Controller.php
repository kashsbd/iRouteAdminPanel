<?php

/**
 * To load common libraries in controllers
 *
 * @author Ye Yint
 */

class MY_Controller extends CI_Controller
{
    public $global_data = null;
    function __construct()
    {
        parent::__construct();
       
        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Check session data to redirect to login page if session data doesn't exist
        if (!isset($this->session->userdata['logged_in'])) {
            redirect('/login', 'refresh');
        }else{
            $this->db->select('*');
            $this->db->from('menus');
            $this->db->order_by('menu_order', 'ASC');
            $query = $this->db->get();
            $result = $query->result();
            $this->global_data['menu'] = $result;
        }
    }
}
