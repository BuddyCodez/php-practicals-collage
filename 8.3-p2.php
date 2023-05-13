<h1>Page 2</h1>
<?php
// Get the information passed from page1.php
$name = $_GET["name"];
$email = $_GET["email"];
$phone = $_GET["phone"];

// Display the information on this page
echo "<p>Name: " . $name . "</p>";
echo "<p>Email: " . $email . "</p>";
echo "<p>Phone: " . $phone . "</p>";
?>