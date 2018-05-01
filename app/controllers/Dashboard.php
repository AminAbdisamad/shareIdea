<?php
class Dashboard extends Controller
{

    public function __construct(){
        //check if user logged in 
        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->dashboardModel = $this->model('DashboardModel');
    }
    // Index page method
    public function index(){
        //get posts
        $posts = $this->dashboardModel->getPosts();
        $data = ['posts' =>$posts];

        $this->view('dashboard/index',$data);

    }
    //findpeople
    public function findPeople(){
        $users = $this->dashboardModel->findPeople();
        $data = ['users' =>$users];
        $this->view('dashboard/findpeople',$data);
    }

    // Add posts 
    public function addPost(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data = [
                     'userId' => $_SESSION['user_id'],
                     'post' => trim($_POST['post']),
                     'post_err' => ''
                    ];
                    //validate post
            if(empty($data['post'])){
                $data['post_err'] ='Write something first';
                // or disaple the btn
            }
            //Make sure post field is not empty
            if(empty($data['post_err'])){
                // Add post
                if($this->dashboardModel->AddpostToDB($data)){
                    //flash message
                    flash('post_message','Post Added Successfully');
                    //redirect 
                    redirect('dashboard');
                }else{
                    die('Oops! Something went wrong');
                }
                

            }else{
                //send error to index view
                $this->view('dashboard/index',$data);
            }
        

        }
        else {
            // Init data
            $data =[
              'userId' => '',
              'post' => '',
              'post_err' => ''
            ];
    
            // Load view
            $this->view('dashboard/index', $data);
          }    
    }

}