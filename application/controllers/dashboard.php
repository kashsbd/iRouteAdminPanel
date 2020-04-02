<?php

class Dashboard extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->global_data['active_link'] = 'Dashboard';
    }

    public function index(){
        $this->global_data['title'] = "Dashboard"; 
        $this->global_data['hydrant_count'] = $this->admin_model->GetHydrantCount();
        $this->global_data['hospital_count'] = $this->admin_model->GetHospitalCount();
        $this->global_data['charity_count'] = $this->admin_model->GetCharityCount();
        $this->global_data['police_station_count'] = $this->admin_model->GetPoliceStationCount();
        $this->load->view('admin/header_inc_view', $this->global_data);
        $this->load->view('admin/dashboard_view');
        $this->load->view('admin/footer_inc_view');
    }
}