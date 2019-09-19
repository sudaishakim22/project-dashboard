<?php 

class LoginController extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }


    public function index(){

        $this->load->view('pages/login');
    }


    function loginProcess(){
        // login proses untuk role admin
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $admin = "admin";
        $where = array(
            'username' => $username,
            'password' => md5($password),
            'role' => $admin
        );

        $check = $this->LoginModel->checkLogin('user', $where)->num_rows();

        if($check > 0){ 
            $data_session = array(
                'name' => $username,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);

            redirect(base_url("dashboard"));
        }else {
            echo "username dan password salah";
        
        }
    }

    function logout(){
        $this->session->sess_destroy();
        return $this->load->view('pages/login');
    }
}


?>


