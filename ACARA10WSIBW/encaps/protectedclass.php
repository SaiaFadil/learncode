<?php

class Car {
    protected $model;
    public function setModel($model){
        $this -> model = $model;

    }
}






class SportsCars2 extends Car{

}
$sportsCar1 = new SportsCars2();
$sportsCar1 -> setModel('Mercedes Benz');
echo $sportsCar1->hello();


?>