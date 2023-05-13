<?php
class MyClass {
    public function __construct() {
        echo "The constructor has been called.<br>";
    }

    public function __destruct() {
        echo "The destructor has been called.<br>";
    }

    public function display() {
        echo "code has been executed<br>";
    }
}
echo "<h1> Udit Vegad(216090307001)</h1>";
$obj = new MyClass();
$obj->display();
unset($obj);
