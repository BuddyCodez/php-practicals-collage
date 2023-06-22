<?php
session_start();
// Retrieve employee information from the database
if (!isset($_SESSION['username'])) {
    header("Location:10.2.php");
}
$username = $_SESSION['username'];
$conn = mysqli_connect("localhost", "root", "", "test");
$query = "SELECT name, email, address, phone, department, position, salary FROM employees WHERE name = '$username'";
$result = mysqli_query($conn, $query);
$employee = mysqli_fetch_assoc($result);
mysqli_close($conn);
?>

<!-- Display employee information -->
<h1 style="color:gray;" align="start">Udit Vegad(216090307001)</h1>

<h1>Welcome, <?php echo $employee['name']; ?></h1>
<p>Email: <?php echo $employee['email']; ?></p>
<p>Address: <?php echo $employee['address']; ?></p>
<p>Phone: <?php echo $employee['phone']; ?></p>
<p>Department: <?php echo $employee['department']; ?></p>
<p>Position: <?php echo $employee['position']; ?></p>
<p>Salary: <?php echo $employee['salary']; ?></p>