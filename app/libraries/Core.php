<?php
/* 
App Core class
Creates URL & Loads Core Controllers 
URL FORMAT - /Controller/Method/Params

*/

class Core{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->getURL();
        /* currentController */
        if(file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
            //if it exists, set as controller
            $this->currentController = ucwords($url[0]);
            //Unset 0 Index
            unset($url[0]);
        }
        //requre the controller
        require_once '../app/controllers/'.$this->currentController . '.php';
        // instantiate controller class
        $this->currentController = new $this->currentController;

        /* current Method */
        if(isset($url[1])){
            if(method_exists($this->currentController, $url[1])){
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }
        //get params
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

        
    }
    public function getURL(){
        /* 
        * isset - variable is set and not a null
        *  rtrim - strip white spaces from the end of string
        * filter_var - filters variable with specified filter
        * explode - split string by string 
        */
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
       

    }
}