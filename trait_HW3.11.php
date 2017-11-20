<?php


trait СanMove {
    public function fly() {
        echo 'Полёт самолёта';  
}
}
trait СanFly {
     public function move() {
        echo 'Движение автомобиля';        
    }
}



class Aercraft  {
    use СanFly;    
   
}
class Car  {
    use СanMove;    
   
}

$car = new Aercraft();

$car1 = new Car();
$car1->fly();
