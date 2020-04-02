<?php
class Login extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        
        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');
    }

    public function index($status_type = null, $status_message = null)
    {
        $data['title'] = "MIIT-Internship";
        if(!empty($status_type)){
            $data['status_type'] = $status_type;
        }
       
        if($status_message === "login_fail"){
            $data['status_message'] = "Login fail! Please try again.";
        }else if($status_message === "register_success"){
            $data['status_message'] = "User Registeration Successful!";
        }else if ($status_message === "register_fail"){
            $data['status_message'] = "User registeration fail!";
        }
        $this->load->view('login/login_view', $data);
    }

    public function CheckLogin(){
        $user_name = $this->input->post('user_name');
        $password = md5($this->input->post('user_password'));
        $result= $this->login_model->CheckLogin($user_name, $password);
        if(!empty($result)){
            $session_data = array(
                'user_name' => $result->user_name,
                'user_email' => $result->user_email,
            );
            // Add user data in session
            $this->session->set_userdata('logged_in', $session_data);

            // Redirect to Dashboard
            redirect('/dashboard', 'refresh');
        }else{
            redirect('/login/index/fail/login_fail', 'refresh');
        }
    }

    public function Register(){
        // Add form Validation rules
        $this->form_validation->set_rules('user_name','First Name','trim|required');
        $this->form_validation->set_rules('user_email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('user_password','Password','trim|required|min_length[3]');
        $this->form_validation->set_rules('user_confirm_password', 'Confirm Password', 'required|matches[user_password]');

        $data['title'] = "MIIT-Internship";
        if($this->form_validation->run() == FALSE){
            $this->load->view('login/login_view', $data);
        }else{
            // Fetch form post data
            $data = array(
                'user_name' => $this->input->post('user_name'),
                'user_email' => $this->input->post('user_email'),
                'user_password' => md5($this->input->post('user_password')),
                'user_creation_date' => date('Y-m-d')
            );

            // Set up table name and primary key to be able to GET | INSERT | UPDATE | DELETE
            $this->login_model->_table_name = 'user';
            $this->login_model->_primary_key = 'user_id';
            $user_id = $this->login_model->save($data);

            if(!empty($user_id)){
                redirect('/login/index/success/register_success', 'refresh');
            }else{
                redirect('/login/index/fail/register_fail', 'refresh');
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('/login', 'refresh');
    }
}