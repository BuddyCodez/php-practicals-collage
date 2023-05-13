<?php

class Person {
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
}
echo "<h1> Udit Vegad(216090307001)</h1>";
// Create a new instance of Person class
$person1 = new Person("John");

// Clone the object and store it in a new variable
$person2 = clone $person1;

// Update the name of the cloned object
$person2->name = "Sarah";

// Print the original object
echo "Original object:" . PHP_EOL;
var_dump($person1);

// Print the cloned object
echo "Cloned object:" . PHP_EOL;
var_dump($person2);
