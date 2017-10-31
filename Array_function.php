<?php

require_once 'Arrays.php';

function Arr_sum($arr_obj1) {
    if (!is_array($arr_obj1) || (count($arr_obj1) <= 0))
        return false;

    $sum = 0;
    foreach ($arr_obj1 as $value) {
        if (!is_numeric($value))
            return false;
        $sum += $value;
    }
    return $sum;
}

$res = Arr_sum($arr_obj1);


if (!$res) {
    echo 'Некорректный массив';
} else {
    echo 'Сумма элементов массива равна …' . $res;
}


function mt($arr_obj2) {
    $n = mt_rand(0, count($arr_obj2) - 1);
    return $arr_obj2[$n];
}

function sh ($arr_obj2) {
   shuffle($arr_obj2);
       
 return $arr_obj2[1];    
    }

    function usort_array($a, $b) {
        if($a['Age']== $b['Age']){
        return 0;
        }
    return ($a['Age'] > $b['Age']) ? 1 : -1;
}

    
    echo '<pre>';
    print_r($arr_obj);
    echo '<pre>';
    uasort($arr_obj, 'usort_array');
    print_r($arr_obj);