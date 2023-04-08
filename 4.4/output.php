<?php 
$number = $_POST['va1'];
echo "The Multiplication Table for $number is: <br>";
for ($i = 1; $i <= 10; $i++) {
    echo $number . " * " . $i . " = " . $number * $i . "<br>";
}
?>