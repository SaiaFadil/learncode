<?php

class Car{
    private $model;
    public function setModel($model){
        $this->model = $model;
    }
    public function hello(){
        return "beep ! I am a <i> ". $this -> model . "</i><br/>";

    }}

class SportsCars extends Car{

}
$sportsCar1 = new SportsCars();
$sportsCar1 -> setModel('Mercedes Benz');
echo $sportsCar1->hello();

?>