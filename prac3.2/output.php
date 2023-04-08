<?php
$basic_pay = $_POST['bp'];
$da = $_POST['da'];
$hra = $_POST['hra']; // hra is in the form of percentage how to conver it to percentage
$medical = $_POST['md'];
$insurance = $_POST['ins'];
$pf = $_POST['pf'];
$gross_salary = $basic_pay + $da + ($hra / 100)+ $medical;
$net_salary = $gross_salary - $insurance - $pf;
echo "The gross salary is $gross_salary <br>";
echo "The net salary is $net_salary";
