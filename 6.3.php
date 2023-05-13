<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $svalue = $_POST['svalue'];
    $evalue = $_POST['evalue'];
    $random = rand($svalue, $evalue);
    echo "Random number between " . $svalue . " and " . $evalue . " is: " . $random;
    $number = $_POST['number'];
    $angle = $_POST['angle'];
    //b. to display the binary, octal and hexadecimal of
    // a given decimal number.
    echo "<br>Binary of " . $number . " is: " . decbin($number);
    echo "<br>Octal of " . $number . " is: " . decoct($number);
    echo "<br>Hexadecimal of " . $number . " is: " . dechex($number);
    //c. to display the sin, cos and tan of the given
    // angle.
    echo "<br>Sin of " . $angle . " is: " . sin($angle);
    echo "<br>Cos of " . $angle . " is: " . cos($angle);
    echo "<br>Tan of " . $angle . " is: " . tan($angle);
}
?>
<h1>Udit Vegad (216090307001)</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="number" name="svalue" placeholder="Enter start value"><br>
    <input type="number" name="evalue" placeholder="Enter end value"><br>
    <input type="number" name="number" placeholder="Enter a number"><br>
    <input type="number" name="angle" placeholder="Enter a angle"><br>
    <input type="submit" name="submit" value="Submit">
</form>