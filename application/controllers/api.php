<?php
//http://stackoverflow.com/questions/18382740/cors-not-working-php
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400'); // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
}

class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function __destruct()
    {
        $this->db->close();
    }

    private function responseErrorJson($message)
    {
        return json_encode(array(
            'code' => -1,
            'message' => $message,
            'content' => array()
        ));
    }

    public function index(){
        echo "test";
    }

    private function responseSuccessJson($content)
    {
        return json_encode(array(
            'code' => 1,
            'message' => "Request successfully",
            'content' => $content
        ));
    }

    private function formatUserResponse($user)
    {
        return array(
            'user_name' => $user->user_name,
            'user_password' => $user->user_password,
            'user_email' => $user->user_email,
        );
    }

    public function Login()
    {
        $user_name = $this->input->post('user_name');
        $user_password = md5($this->input->post('user_password'));
        if(!empty($user_name) && !empty($user_password)){
            if(!empty($result = $this->login_model->CheckLogin($user_name, $user_password))){
                echo $this->responseSuccessJson($this->formatUserResponse($result));
            }else{
                echo $this->responseErrorJson('User is not activate or Username/ Password is wrong.');
            }
        }
        else{
            echo $this->responseErrorJson('UserName or Password is blank.');
        }
    }

    public function get_locations()
    {
        
    }
}