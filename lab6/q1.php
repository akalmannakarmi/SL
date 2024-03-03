<!-- 1. WAP to display and delete the student record stored in the database of Lab 4 with confirmation from user. -->
<!DOCTYPE html>
<html>
<head>
    <title>Delete Records</title>
</head>
<body>
<h2>Delete Records</h2>

<?php
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'sl');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    // Check if delete request is sent
    if(isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];
        // Fetch record details before deletion
        $sql = "SELECT * FROM registration WHERE id = $delete_id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
?>
    <!-- Confirmation message -->
    <script>
        var confirmDelete = confirm("Are you sure you want to delete the record:\nName: <?php echo $row['name']; ?>\nAddress: <?php echo $row['address']; ?>\nContact: <?php echo $row['contact']; ?>\nGender: <?php echo $row['gender']; ?>\nDistrict: <?php echo $row['district']; ?>");
        if (confirmDelete == true) {
            window.location = "delete.php?id=<?php echo $delete_id; ?>"; // Redirect to delete script
        } else {
            window.location = "q1.php"; // Redirect back to display page
        }
    </script>
<?php
    }

    // Fetch and display records
    $sql = "SELECT * FROM registration";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Gender</th>
                    <th>District</th>
                    <th>Action</th>
                </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["address"]."</td>
                    <td>".$row["contact"]."</td>
                    <td>".$row["gender"]."</td>
                    <td>".$row["district"]."</td>
                    <td><a href='q1.php?delete_id=".$row["id"]."'>Delete</a></td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
?>
</body>
</html>
