<?php
class Master{
   function show(){
     echo "I am Master class<br>";
   }
   
}

class Student extends Master{
    function show(){
     echo "I am  Student class with same method of master class<br>";
    }
}
echo "<h1> Udit Vegad(216090307001)</h1>";
$obj = new Master;
$obj->show();

$obj = new Student;
$obj->show();
