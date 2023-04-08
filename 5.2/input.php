<?php
echo "<h1>Udit Vegad (216090307001)</h1>";
//arr = 1 to 15 digits in random order
$arr = array(4, 8, 2, 10, 12, 7, 14, 6, 5, 11, 1, 15, 13, 9, 3);
$len = count($arr);
echo "Unsorted array: ";
for($i=0;$i<$len;$i++)
{
    echo $arr[$i]." ";
}
echo "<br />";
sort($arr);
echo "Sorted array: ";
for($i=0;$i<$len;$i++)
{
	echo $arr[$i]." ";
}
