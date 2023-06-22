<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check login credentials
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = mysqli_connect("localhost", "root", "", "test");
    $query = "SELECT * FROM employees WHERE name='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $msg = mysqli_num_rows($result) > 0 ? "Success" : "Error";
    if ($msg == "Success") {
        $_SESSION['username'] = $username;
        header("Location: 10.4.php");
    }
    mysqli_close($conn);
}
?>

<!-- HTML form -->
<h1 style="color:gray;" align="start">Udit Vegad(216090307001)</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php if (isset($msg)) { ?>
        <h3><?php echo $msg == "Success" ? "Login Successful" : "Invalid Credentials"; ?></h3>
    <?php } ?>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>