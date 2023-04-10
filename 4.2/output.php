<?php
function calculate_marks($marks)
{
    switch ($marks) {
        case $marks >= 85:
            return "AA";
            break;
        case $marks >= 75:
            return "AB";
            break;
        case $marks >= 65:
            return "BB";
            break;
        case $marks >= 55:
            return "BC";
            break;
        case $marks >= 45:
            return  "CC";
            break;
        case $marks >= 40:
            return "CD";
            break;
        case $marks >= 35:
            return "DD";
            break;
        case $marks < 35:
            return "FF(FAIL)";
            break;
        default:
            echo "Please enter valid marks.";
    }
    echo "<br />";
}
$s1_marks = $_POST['s1_marks'];
$s2_marks = $_POST['s2_marks'];
$s3_marks = $_POST['s3_marks'];
$s4_marks = $_POST['s4_marks'];
$s1_sub = $_POST['s1_sub'];
$s2_sub = $_POST['s2_sub'];
$s3_sub = $_POST['s3_sub'];
$s4_sub = $_POST['s4_sub'];
echo "<table border='1'>
<tr>
<th>Subject Name</th>
<th>Subject Grades</th>
</tr>
<tr>
<td>$s1_sub</td>
<td>" . calculate_marks($s1_marks) . "</td>
</tr>
<tr>
<td>$s2_sub</td>
<td>" . calculate_marks($s2_marks) . "</td>
</tr>
<tr>
<td>$s3_sub</td>
<td>" . calculate_marks($s3_marks) . "</td>
</tr>
<tr>
<td>$s4_sub</td>
<td>" . calculate_marks($s4_marks) . "</td>
</tr>
</table>";
?>