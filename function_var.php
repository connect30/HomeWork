<?php
$arr = [1,2,4,2,8,5,];

$sum = function ($a, $b) {
   return $a + $b;
   };
    
   function anonim($arr) {
       //$arr=[];
    $n = array_rand($arr, 2);
    print_r($n);
    }
              

 anonim($arr);