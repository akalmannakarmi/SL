<!-- 3. WAP in PHP to retrieve the file stored in the database of Qno 2. -->
<!DOCTYPE html>
<html>
<head>
    <title>Display Files</title>
</head>
<body>
    <h2>Files Stored in Database</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Size</th>
        </tr>

        <?php
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'sl');
        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }

        // Retrieve files from database
        $sql = "SELECT id, name, type, size FROM files";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["type"] . "</td>";
                echo "<td>" . $row["size"] . " bytes</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No files found</td></tr>";
        }

        // Close connection
        $conn->close();
        ?>

    </table>
</body>
</html>
