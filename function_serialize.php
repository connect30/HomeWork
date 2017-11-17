<?php
require_once 'class_Point1.php';
require_once 'Forms_HW3.7.php';
define('FILENAME', 'seriailxe.txt');
if (isset($_POST['save'])){
    if (isset($_POST['x']) && !empty($_POST['x']) && isset($_POST['y']) && !empty($_POST['y'])){
  $x = $_POST['x'];  
  $y = $_POST['y'];  
  $p = new Point1($x,$y);
  $str = serialize($p);
  $file = fopen(FILENAME, 'w+');
  fwrite($file, $str);
  fclose($file);
    }else{
        echo 'Error enter number!';
    }
}

if (isset($_POST['load'])){
    if (file_exists(FILENAME)){
  $file = file_get_contents(FILENAME);
  $str1 = unserialize($file);
  echo 'File load!'.'  '.$str1;
}else{
    echo 'Error load file!';
}
}