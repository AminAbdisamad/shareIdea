<?php
//load config 
require_once 'config/config.php';
//load libraries


//auto load libraries
spl_autoload_register(function($className){
    require_once('libraries/'.$className.'.php');
});