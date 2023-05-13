<?php
$string = "hello my name is udit vegad";
echo "String is: " . $string . "<br>";
echo ctype_lower($string) ? "String is in lower case" : "String is not in lower case". "<br>";
echo "Reversed string is: " . strrev($string) . "<br>";
echo "String without white spaces: " . str_replace(' ', '', $string) . "<br>";
echo "Replacing udit with Hello:". str_replace('udit', 'Hello', $string) . "<br>";


?>