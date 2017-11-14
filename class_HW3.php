<?php


class Point {
    public $x;
    public $y;
    private static $counter = 0;
    protected $id = 0;
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        for ($i = 0; $i < 100; $i++) {
        $this->id = uniqid($i);        
        }
        self::$counter++;
        
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
    public static function getCounter() {
        return self::$counter;
}
      
    
}

class Point1 extends Point{
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

$point = new Point(1,10);
$point1 = new Point(2,30);
$point2 = new Point(3,50);
echo Point::getCounter();
//echo $point->getID1();
        