<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $query = "SELECT * FROM employees";
    $con = mysqli_connect("localhost", "root", "", "test");
    $result = mysqli_query($con, $query);
    mysqli_close($con);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['employee'];
    $query = "DELETE FROM employeeS WHERE email = '$email'";
    $con = mysqli_connect("localhost", "root", "", "test");
    $result = mysqli_query($con, $query);
    mysqli_close($con);
    header("Location: 10.5.php");
}
?>
<h1 style="color:gray;" align="start">Udit Vegad(216090307001)</h1>
<h1>Delete Employees</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <select name="employee">
        <?php
        while ($row = $result->fetch_array()) {
            $email = $row['email'];
            $name = $row['name'];
            echo "<option value='$email'>$name</option>";
        }
        ?>

    </select>
    <button type="submit">Delete</button>
</form>