<?php
$reg = '#^\w...[c$]#';
$str = '57abd';
 echo preg_match($reg, $str, $m);
 print_r($m);
 
 preg_match('@^(?:http://)?([^/]+)@',
    "http://www.php.net/index.html", $matches);
// echo $matches[1];

