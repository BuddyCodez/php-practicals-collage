<!DOCTYPE html>
<html>

<head>
    <title>Edit Employee</title>
</head>

<body>
    <h1>Edit Employee</h1>
    <?php
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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $designation = $_POST['designation'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("UPDATE employees SET name=?, designation=?, email=?, phone=?, address=? WHERE id=?");
        $stmt->bind_param("sssssi", $name, $designation, $email, $phone, $address, $id);

        // Execute the statement
        $stmt->execute();

        // Close the statement
        $stmt->close();
    }

    // Fetch the employee details from the database
    $employeeId = $_GET['id'];
    $sql = "SELECT * FROM employees WHERE id = $employeeId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the employee details
        $row = $result->fetch_assoc();
        $employeeName = $row["name"];
        $employeeDesignation = $row["designation"];

        // Display the employee details in an HTML form for editing
        echo '<form action="edit_employee.php" method="POST">';
        echo '    <input type="hidden" name="id" value="' . $employeeId . '">';
        echo '    <label for="name">Name:</label>';
        echo '    <input type="text" name="name" value="' . $employeeName . '" required><br><br>';
        echo '    <label for="designation">Designation:</label>';
        echo '    <input type="text" name="designation" value="' . $employeeDesignation . '" required><br><br>';
        echo '    <label for="email">Email:</label>';
        echo '    <input type="email" name="email" value="' . $row["email"] . '" required><br><br>';
        echo '    <label for="phone">Phone:</label>';
        echo '    <input type="text" name="phone" value="' . $row["phone"] . '" required><br><br>';
        echo '    <label for="address">Address:</label>';
        echo '    <input type="text" name="address" value="' . $row["address"] . '" required><br><br>';
        echo '    <input type="submit" value="Update Employee">';
        echo '</form>';
    } else {
        echo "Employee not found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>

</html>