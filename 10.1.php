<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $pass = $_POST['pass'];

    // Store the data in the database
    $conn = mysqli_connect("localhost", "root", "", "test");
    $query = "INSERT INTO employees (name, email, address, phone, department, position, salary, password) VALUES ('$name', '$email', '$address', '$phone', '$department', '$position', '$salary', '$pass')";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    $msg = $result ? "Success" : "Error";
}
?>

<!-- HTML form -->
<h1 style="color:gray;" align="start">Udit Vegad(216090307001)</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php if (isset($msg)) { ?>
        <h3><?php echo $msg == "Success" ? "Added Employee" : "Error"; ?></h3>
    <?php } ?>
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="address" placeholder="Address" required><br>
    <input type="text" name="phone" placeholder="Phone" required><br>
    <input type="text" name="department" placeholder="Department" required><br>
    <input type="text" name="position" placeholder="Position" required><br>
    <input type="password" name="pass" placeholder="Password" required><br>
    <input type="number" name="salary" placeholder="Salary" step="0.01" required><br>
    <button type="submit">Submit</button>
</form>