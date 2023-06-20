<?php
session_start();
// Retrieve employee information from the database
if (!isset($_SESSION['username'])) {
    header("Location:10.2.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
<h1>Change Password</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name='name' value="<?php echo $name; ?>">
    <input type="text" name='name' value="<?php echo $pass['password']; ?>">
    <button type="submit">Submit</button>
</form>