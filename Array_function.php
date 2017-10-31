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
