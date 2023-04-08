<?php
$string = $_POST['va1'];
$length = 0;
$i = 0;
while (@$string[$i] != null) {
    $length++;
    $i++;
}
$words = 1;
for ($i = 0; $i < $length; $i++) {
    if ($string[$i] == ' ') {
        $words++;
    }
}
echo "The number of words in the string is: $words <br>";
echo "The number of characters in the string is: $length";
?>