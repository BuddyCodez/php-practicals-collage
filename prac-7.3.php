<?php

class MyClass
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
echo "<h1> Udit Vegad(216090307001)</h1>";
$obj = new MyClass();
$obj->setName("Udit");
echo "The name of the object is: " . $obj->getName() . "<br>";
