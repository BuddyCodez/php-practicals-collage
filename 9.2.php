<h1>Udit Vegad(216090307001)</h1>
<?php

// Check if the cookie is set
if(isset($_COOKIE["u_name"])){
    // Retrieve the cookie value and display it
    $user_name = $_COOKIE["u_name"];
    echo "Welcome back, " . $user_name . "!";
} else {
    // If the cookie is not set, display a message
    echo "Hello! Please enter your name:";
    // Display a form to collect user's name
    echo "<form method='POST'>";
    echo "<input type='text' name='name' required>";
    echo "<input type='submit' value='Submit'>";
    echo "</form>";

    // Check if the form has been submitted
    if(isset($_POST["name"])){
        // Retrieve the name from the form
        $user_name = $_POST["name"];
        // Set a cookie with the name "user_name" and the value entered in the form
        setcookie("u_name", $user_name, time() + 180, "/"); // Expires in 1 hour
        echo "Welcome, " . $user_name . "!";
    }
}
