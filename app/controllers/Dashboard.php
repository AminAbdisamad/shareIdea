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
    public function index(){
        //get posts
        $posts = $this->dashboardModel->getPosts();
        $data = ['posts' =>$posts];
        $this->view('/dashboard/index',$data);
    }
}