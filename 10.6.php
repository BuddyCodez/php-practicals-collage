<?php
session_start();
// Retrieve employee information from the database
if (!isset($_SESSION['username'])) {
    header("Location:10.2.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $query = "UPDATE employees SET password='$pass' where name='$name'";
    $con = mysqli_connect("localhost", "root", "", "test");
    $result = mysqli_query($con, $query);
    header("Location:10.4.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $name = $_SESSION['username'];
    $query = "SELECT password from employees where name='$name'";
    $con = mysqli_connect("localhost", "root", "", "test");
    $result = mysqli_query($con, $query);
    $pass = $result->fetch_assoc();
}
?>

<!-- Display employee information -->
<h1 style="color:gray;" align="start">Udit Vegad(216090307001)</h1>
<h1>Change Password</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name='name' value="<?php echo $name; ?>" readonly>
    <input type="text" name='pass' value="<?php echo $pass['password']; ?>">
    <button type="submit">Submit</button>
</form>