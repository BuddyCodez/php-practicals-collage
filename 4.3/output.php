<?php
$term = $_POST['va1'];
echo "The Fibonacci Series is: ";
echo "0 ";
// generate fibonacci series upto $term
$a = 0;
$b = 1;
for ($i = 1; $i <= $term; $i++) {
    $c = $a + $b;
    echo $c . " ";
    $a = $b;
    $b = $c;
}

?>