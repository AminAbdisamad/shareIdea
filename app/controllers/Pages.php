<?php
class Pages extends Controller{
    public function __construct(){
        $this -> postModel = $this ->model('post');
        
    }
    public function index(){
        $data = ['title'=>'Welcome',
                'body'=>'This is the home page of this website'];
        $this->view('pages/index',$data);

    }

    public function about(){
        $data = ['title'=>'About US',
                'body'=>'This is the about page of this website'];
        $this->view('pages/index',$data);
    }
}