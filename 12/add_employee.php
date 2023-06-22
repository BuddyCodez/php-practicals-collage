<!DOCTYPE html>
<html>

<head>
    <title>Add Employee</title>
</head>

<body>
    <h1>Add Employee</h1>
    <form action="add_employee.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>
        <label for="designation">Designation:</label>
        <input type="text" name="designation" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" required><br><br>
        <label for="address">Address:</label>
        <input type="text" name="address" required><br><br>
        <input type="submit" value="Add Employee">
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";

    // Create a new MySQLi instance
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO employees (name, designation, email, phone, address) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $designation, $email, $phone, $address);

    // Execute the statement
    $stmt->execute();

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>