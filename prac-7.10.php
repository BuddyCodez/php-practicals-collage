<?php

abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "<b>bhav bhav!</b>" ;
    }
}



echo "<h1> Udit Vegad(216090307001)</h1>";
$dog = new Dog();
$dog->makeSound();
