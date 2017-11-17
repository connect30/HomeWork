<?php

class Point1 {
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
    
    public function __get($n) {
        return 'Класс Point работает только в двумерном пространстве';
    }
    public function __toString() {
        return 'Точка с координатами ('.$this->x.','.$this->y.')';
    }    
    public function __set ($n, $value){
         $this->n =$value;
         //return 
         //echo 'Класс Point работает только в двумерном пространстве';
    }
    //public function __clone() {
     //   $this->x=10;
    //}
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
    public function __call($metod,$arg) {
        return 'Error call metod'.$metod;
    }
    public static function getCounter() {
        return self::$counter;
}
      
    
}
?>