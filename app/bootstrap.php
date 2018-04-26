<?php
//load config 
require_once 'config/config.php';
//load url helper
require_once 'helpers/url_helper.php';


//auto load libraries
/* the file name and class name should match */
spl_autoload_register(function($className){
    require_once('libraries/'.$className.'.php');
}); 

