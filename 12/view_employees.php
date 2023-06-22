<!DOCTYPE html>
<html>

<head>
    <title>View Employees</title>
</head>

<body>
    <h1>View Employees</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
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

        // Fetch all employees from the database
        $sql = "SELECT * FROM employees";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["designation"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo '<td><a href="edit_employee.php?id=' . $row["id"] . '">Edit</a></td>';
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No employees found.</td></tr>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </table>
</body>

</html>