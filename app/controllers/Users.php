<?php 
class Users extends Controller
{
    public function __construct()
    {
        $this-> usermodel = $this->model('User');
    }


    // Register user Method
    public function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // filter POST Data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // Init data
            $data = [
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
            }elseif($this->usermodel->findUserByEmail($data['email'])){
                $data['email_err'] = 'This email is already taken';
            }
            // is name empty
            if(empty($data['name'])){
                $data['name_err'] = 'Enter Your Name';
            }
            // Validate Password
            if(empty($data['password'])){
            $data['password_err'] = 'Please enter a password';
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
                // Hash password
                $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
                if($this->usermodel->register($data)){
                    //Successfully submited - redirect to login page
                    redirect('users/login');
                    
                }else{
                    die('Oops! Something went wrong');
                }
            }else{
                // load view with errors 
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

//User Login Method
    public function login(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        //get data
        $data = [
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'email_err' => '',
            'password_err' => ''
        ];
        // validate Email
        if(empty($data['email'])){
            $data['email_err'] = 'Please enter your email';
        }
        
        // validate password
        if(empty($data['password'])){
            $data['password_err'] = 'Please enter your password';
        }
        // validate if not empty
        if(empty($data['email_err']) && empty($data['password_err'])){
            die('Success!');
        }else{
            // load login view with errors 
            $this -> view('/users/login', $data);
        }

    }
    else {
        // Init data
        $data =[
          'email' => '',
          'password' => '',
          'email_err' => '',
          'password_err' => ''
        ];

        // Load view
        $this->view('users/login', $data);
      }    

    }

}