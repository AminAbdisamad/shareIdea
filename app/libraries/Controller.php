<?php 
/**
 * Base Controller for Models and Views
 */
class Controller {
    //load model
    public function model($model){
        //require model file from models
        require_once '../app/models/' .$model . '.php';
        return new $model();
    }
     //load views
    public function view($view,$data = []){
         //require view file from views folder if it exists
         if(file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
         }else{
             die("View doesn't exist");
         }
    }
    
}