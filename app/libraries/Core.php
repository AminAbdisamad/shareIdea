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
        $this->getURL();
    }
    public function getURL(){
        echo $_GET['url'];
    }
}