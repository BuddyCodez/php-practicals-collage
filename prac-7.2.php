<?php

class MyClass
{
    public $name;
    public $age;

    public function sayHello()
    {
        echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.<br>";
    }
}
$obj = new MyClass();
$obj->name = "Udit";
$obj->age = 17;
echo "<h1> Udit Vegad(216090307001)</h1>";
$obj->sayHello();
