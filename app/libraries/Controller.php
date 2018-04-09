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
    
}