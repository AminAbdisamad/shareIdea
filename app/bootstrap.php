<?php
//load config 
require_once 'config/config.php';
//load libraries


//auto load libraries
/* the file name and class name should match */
spl_autoload_register(function($className){
    require_once('libraries/'.$className.'.php');
}); 