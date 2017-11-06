<?php
$reg = '#^\w...c$#i';
$str = '57abc';
 //echo preg_match($reg, $str, $m);
 //print_r($m);
 
 
 $str1 = date('Y.m.d H:i:s');
 
 $reg1 = '#^(\d{4})\.(\d{2})\.(\d{2})\s(\d{2})\W(\d{2})\W(\d{2,})$#';
 
 preg_match($reg1, $str1, $m);
 foreach ($m as $value) {
     echo '<br />'.$value;
    
}
     
// preg_match('@^(?:http://)?([^/]+)@',
//    "http://www.php.net/index.html", $matches);
//// echo $matches[1];
$reg = '#^\w...[c$]#';
$str = '57abd';
 echo preg_match($reg, $str, $m);
 print_r($m);
 
 preg_match('@^(?:http://)?([^/]+)@',
    "http://www.php.net/index.html", $matches);
// echo $matches[1];
