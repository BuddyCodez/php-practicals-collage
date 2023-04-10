<?php
$basic_pay = $_POST['bp'];
$da = $_POST['da']; 
$hra = $_POST['hra'];
$medical = $_POST['md'];
$insurance = $_POST['ins'];
$pf = $_POST['pf'];
$gross_salary = $basic_pay + ($basic_pay *( $da / 100)) + $hra + $medical;
$net_salary = $gross_salary - $insurance - $pf;
echo "The gross salary is $gross_salary <br>";
echo "The net salary is $net_salary";
?>