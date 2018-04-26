<?php 
class Users extends Controller
{
    public function __construct()
    {

    }


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
            // valideate email
            if(empty($data['email'])){
                $data['email_err'] = 'Enter Your Email';
            }
            // is name empty
            if(empty($data['name'])){
                $data['name_err'] = 'Enter Your Name';
            }
            // Validate Password
            if(empty($data['password'])){
            $data['password_err'] = 'Pleae enter password';
            } elseif(strlen($data['password']) < 6){
            $data['password_err'] = 'Password must be at least 6 characters';
            }
            

            // is confirm-password empty
            if(empty($data['confirm_password'])){
                $data['confirm_password_err']= 'confirm your password';
            }else{
                if($data['password'] != $data['confirm_password']){
                    $data['confirm_password_err'] = 'passwords do not match';
                }
            }
            // make sure errors are empty
            if(empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
                // validated
                die('Successfully Submitted');
            }else{
                $this->view('users/register',$data);
            }
            
        }
        else {
            // Init data
            $data =[
              'name' => '',
              'email' => '',
              'password' => '',
              'confirm_password' => '',
              'name_err' => '',
              'email_err' => '',
              'password_err' => '',
              'confirm_password_err' => ''
            ];
    
            // Load view
            $this->view('users/register', $data);
          }    
}
public function login(){
    $data = ['name' => ''
];
    $this->view('users/login', $data);
}

}