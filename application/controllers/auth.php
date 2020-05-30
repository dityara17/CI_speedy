<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('userModel');
    }

    public function index(){
        $this->load->view('backend/login');
    }

    public function login()
    {
        if ($this->userModel->is_LoggedIn()) {
//            redirect('admin');
        }
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );

        $cek = $this->userModel->checkLog("users",$where)->num_rows();


        if($cek > 0){
            $user = $this->userModel->checkLog("users",$where)->row_array();

//			set session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['logged_in'] = true;

            $data_s = array(
                'user_id' => $user['id'],
                'logged_in' => true,
            );

            $this->session->set_userdata($data_s);


            redirect(base_url("admin"));
            echo $cek;

        }else{
            redirect('login');

        }

    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('admin');
    }

}