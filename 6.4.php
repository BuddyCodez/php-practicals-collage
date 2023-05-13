<?php
echo "<h1>Udit Vegad (216090307001)</h1>";
date_default_timezone_set('Asia/Kolkata');
$now = time();

// Date formats
$date_format1 = 'd/m/Y'; // Example: 12/05/2023
$date_format2 = 'jS F Y'; // Example: 12th May 2023
$date_format3 = 'Y-m-d'; // Example: 2023-05-12
$date_format4 = 'l, j F Y'; // Example: Thursday, 12 May 2023
$date_format5 = 'M jS, \'y'; // Example: May 12th, '23
$date_format6 = 'F j, Y'; // Example: May 12, 2023
// Time formats
$time_format1 = 'H:i:s'; // Example: 15:30:00
$time_format2 = 'g:i A'; // Example: 3:30 PM
$time_format3 = 'H:i'; // Example: 15:30
$time_format4 = 'h:i:s a'; // Example: 03:30:00 pm

// Display the formatted date and time
echo 'Current date and time:<br>';
echo 'Date format 1: ' . date($date_format1, $now) . '<br>';
echo 'Date format 2: ' . date($date_format2, $now) . '<br>';
echo 'Date format 3: ' . date($date_format3, $now) . '<br>';
echo 'Date format 4: ' . date($date_format4, $now) . '<br>';
echo 'Date format 5: ' . date($date_format5, $now) . '<br>';
echo 'Date format 6: ' . date($date_format6, $now) . '<br>';
echo 'Time format 1: ' . date($time_format1, $now) . '<br>';
echo 'Time format 2: ' . date($time_format2, $now) . '<br>';
echo 'Time format 3: ' . date($time_format3, $now) . '<br>';
echo 'Time format 4: ' . date($time_format4, $now) . '<br>';

?>