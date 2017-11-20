<?php


interface СanMove {
    public function move();
}
interface СanFly {
    public function fly();
}



class Aercraft implements СanFly, СanMove {

    public function fly() {
        echo 'Полёт самолёта';        
    }
    public function move() {
        echo 'Движение автомобиля';        
    }
}

$car = new Aercraft();
$car->fly();
$car->move();