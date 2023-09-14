<?php

class Car {
    private $model;
    public function setModel($model){
        $this -> model = $model;

    }
}






class SportsCars1 extends Car{

}
$sportsCar1 = new SportsCars1();
$sportsCar1 -> setModel('Mercedes Benz');
echo $sportsCar1->hello();


?>