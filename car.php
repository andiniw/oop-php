<?php

class Car {

    public $name;
    public $brand;

    function startEngine(){
        echo "Mobil $this->name dari $this->brand menyalakan mesin <br>";
    }

    function stopEngine(){
        echo "Mobil $this->name dari $this->brand mematikan mesin <br>";
    }
}

// membuat object

$brio = new Car();
$brio->name = "Brio";
$brio->brand = "Honda";

$pajero = new Car();
$pajero->name = "Pajero";
$pajero->brand = "Mitsubishi";

$civic = new Car();
$civic->name = "Civic";
$civic->brand = "Honda";

// menjalankan method

$brio->startEngine();
$pajero->startEngine();
$civic->stopEngine();

?>