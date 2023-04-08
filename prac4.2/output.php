<?php
function calculate_marks($marks, $subject_number){
    switch ($marks) {
        case $marks >= 85:
            echo "Subject $subject_number got AA grade.";
            break;
        case $marks >= 75:
            echo "Subject $subject_number got AB grade.";
            break;
        case $marks >= 65:
            echo "Subject $subject_number got BB grade.";
            break;
        case $marks >= 55:
            echo "Subject $subject_number got Bc grade.";
            break;
        case $marks >= 45:
            echo "Subject $subject_number got CC grade.";
            break;
        case $marks >= 40:
            echo "Subject $subject_number got CD grade.";
            break;
        case $marks >= 35:
            echo "Subject $subject_number got DD grade.";
            break;
        case $marks < 35:
            echo "Subject $subject_number got FF grade.";
            break;
        default:
            echo "Please enter valid marks.";
    }
    echo "<br />";
}
$s1 = $_POST['s1'];
$s2 = $_POST['s2'];
$s3 = $_POST['s3'];
$s4 = $_POST['s4'];
calculate_marks($s1, '1');
calculate_marks($s2, '2');
calculate_marks($s3, '3');
calculate_marks($s4, '4');
