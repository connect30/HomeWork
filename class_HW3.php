<?php


class class_Point {
    public $x;
    public $y;
    
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function getX() {
        return $this->x;      
    }
    public function getY() {
        return $this->y;      
    }
    public function setX($x) {
        return $this->x = $x;      
    }
    public function setY($y) {
        return $this->y = $y;      
    }
}


//$point = new class_Point();
//$point->x = 5;
//$point->y = 3;
//echo $point->x.'<br />'; 
//echo $point->y.'<br />'; 

$point = new class_Point(1,10);
echo $point->x.'<br />'; 
echo $point->y.'<br />'; 
echo '<hr>';
echo $point->getX().'<br />';
echo $point->getY().'<br />';
echo '<hr>';
echo $point->setX(2).'<br />';
echo $point->setY(20).'<br />';