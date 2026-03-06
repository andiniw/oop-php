<?php

class Person {

    public $firstName;
    public $lastName;

    function sayHello($name){
        echo "Hello $name, my name is $this->firstName $this->lastName <br>";
    }

    function sayGoodBye($name){
        echo "Good Bye $name, see you later! <br>";
    }
}

// membuat object

$andien = new Person();
$andien->firstName = "Andien";
$andien->lastName = "Wulandari";

$wulan = new Person();
$wulan->firstName = "Wulan";
$wulan->lastName = "Putri";

// menjalankan method

$andien->sayHello("Wulan");
$wulan->sayHello("Andien");
$wulan->sayGoodBye("Andien");

?>