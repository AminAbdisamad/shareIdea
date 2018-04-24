<?php
class Pages extends Controller{
    public function __construct(){
        
    }
    public function index(){
        $data = ['title'=>'Welcome'];
        $this->view('pages/index',$data);

    }

    public function about(){
        $data = ['title'=>'About US',
                'body'=>'This is the about page of this website'];
        $this->view('pages/index',$data);
    }
}