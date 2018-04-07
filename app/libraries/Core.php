<?php
/* 
App Core class
Creates URL & Loads Core Controllers 
URL FORMAT - /Controller/Method/Params

*/

class Core{
    protected $currentController = 'pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->getURL();
        print_r($url);
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