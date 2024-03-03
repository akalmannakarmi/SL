<!-- 1. WAP to display the data stored in database in Lab 4. -->

<!DOCTYPE html>
<head>
    <title>Database Insert</title>
</head>
<body>
    <h2>Registered Users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Gender</th>
            <th>District</th>
        </tr>
        <?php
            $conn = new mysqli('localhost','root','','sl');
            if($conn->connect_error){
                die("Connection Failed : ". $conn->connect_error);
            } else {
                $sql = "SELECT * FROM registration";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["contact"]."</td><td>".$row["gender"]."</td><td>".$row["district"]."</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                $conn->close();
            }
        ?>
    </table>
</body>
</html>