<?php 
class Users extends Controller
{
    public function __construct()
    {

    }
    public function register(){
        $data = ['title'=>'Register',
                 'body'=>'This is the about page of this website'];
        $this->view('users/register',$data);
    }
    public function login(){
        $data = ['title'=>'Login',
                 'body'=>'This is the about page of this website'];
        $this->view('users/login',$data);
    }
/*
    // Register user Method
    public function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // filter POST Data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data =[
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
        }
        $this->view('users/register');
    }*/
}