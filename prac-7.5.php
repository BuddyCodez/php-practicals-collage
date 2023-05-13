<?php

interface Animal {
    public function makeSound();
}

interface Plant {
    public function grow();
}

class Tree implements Animal, Plant {
    public function makeSound() {
        echo "Trees do not make sounds.<br>";
    }

    public function grow() {
        echo "The tree is growing.<br>";
    }
}
echo "<h1> Udit Vegad(216090307001)</h1>";
$tree = new Tree();
$tree->makeSound();
$tree->grow();
