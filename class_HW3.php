<?php


class class_Point {
    public $x;
    public $y;
    protected $id = 0;
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        for ($i = 0; $i < 100; $i++) {
        $this->id = uniqid($i);    
        }
        
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

class Point1 extends class_Point{
        public function getID() {
        return $this->id;        
    }
    public function getID1() {
        $i = 15;
        $res;
        while ($i<20) { 
            $res1 = mt_rand(0, 10);
            $res = $this->id = uniqid($res1);        
        $i++;            
        } return $res;
    }
}
//$point = new class_Point();
//$point->x = 5;
//$point->y = 3;
//echo $point->x.'<br />'; 
//echo $point->y.'<br />'; 

//$point = new class_Point(1,10);
//echo $point->x.'<br />'; 
//echo $point->y.'<br />'; 
//echo '<hr>';
//echo $point->getX().'<br />';
//echo $point->getY().'<br />';
//echo '<hr>';
//echo $point->setX(2).'<br />';
//echo $point->setY(20).'<br />';

$point = new Point1(1,10);
echo $point->getID1();
        