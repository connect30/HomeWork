<?php


abstract  class Shape {
   
    abstract public function draw ();
}


 class Point extends Shape {
     public $x;
     public $y;
     
     public function __construct($x, $y) {
         $this->x=$x;
         $this->y=$y;
         
     }
     public function draw() {
         return 'Рисуем точку с координатами ('. $this->x.','. $this->y.')';
     }
}


$res = new Point(2,5);
$res1 = new Point(88,4);
//echo $res->draw();
$arr_res = [$res,$res1];
foreach ($arr_res as $value) {
    echo '<br/>'.$value->draw();
    
}