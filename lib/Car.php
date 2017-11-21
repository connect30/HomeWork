<?php
     
     
    //require_once 'lib/CanMove.php';
    /*function __autoload ($classname){
         require_once "c:/apache/WWW/HomeWork/lib/{$classname}";
     }*/
     echo set_include_path('C:\APACHE\WWW\HomeWork'.PATH_SEPARATOR.'/lib');
     spl_autoload_extensions('*.php');
     spl_autoload_register();
     use avolovodovskii\HW\СanMove1;

class Car {
//use СanMove1;
  
}


