<?php

class Category extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->global_data['active_link'] = 'Category';
    }

    public function index(){
        $this->global_data['title'] = "New Category:"; 
        $this->load->view('admin/header_inc_view', $this->global_data);
        $this->load->view('admin/category_view.php');
        $this->load->view('admin/footer_inc_view');
    }
}