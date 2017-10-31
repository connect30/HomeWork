<?php
 $arr = [];
function fact($name) {
    if ($name == 1) {
        return 1;
    } else {
        return $name * fact($name - 1);
    }
}

function fact1($name) {
    if ($name == 1) {
        return 1;
    } else {
     $f = 1;
        for ($i = 2; $i <= $name; $i++)
        {
                      
        $f = $f * $i;}
          return $f;
                    
    }
}


function fact2($name) {
    if ($name == 1) {
        return 1;
    } else {
    $f = 1;
    $i = 2;
    while ($i<=$name){
        $f = $f * $i;
        $i++;
    }
    return $f;
}
}
function Sum_div() {
  
    $i = 10;
    $sum = 0;
    while ($i<=40){
        $sum +=$i;
        //$i+=2;
        $i++;
        
    }
    return $sum;
    //return $i;
}
function Arr() {
    global $arr;
   
    for ($i = 0; $i <=10; $i++) {
        $arr[] = $i;
       
     
        }
        echo '<br>';
        print_r($arr); 
        $sum1 = 0;
        for ($j = 0; $j <count($arr); $j++) {
            $sum1 += $j; 
        }
        return $sum1;
    
}




