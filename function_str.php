<?php
require_once 'Forma.php';
define('COLOR', 'RED');
$str = false;
$str1 = false;
function count_str() {
    if(isset($_POST['t1'])){
$str = mb_strlen($_POST['t1']);
return $str;
    }
}
function User_str() {
    $result = false;
    if(isset($_POST['t1'])){
    $str1 = $_POST['t1'];
    }
    if((isset($_POST['i1']))&&(!empty($_POST['i1']))){
    $str_inp = $_POST['i1']??false;
    
    $count_str = mb_strlen($str_inp);
    
    $str_start = mb_strpos($str1, $str_inp);
    $str_found = mb_substr($str1, $str_start, $count_str);
    $result = str_replace($str_found, '<span style = "color: red;"><b>'.$str_found.'</b></span>', $str1);
    }
    
    return $result;
}
?>