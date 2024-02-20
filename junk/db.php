<!DOCTYPE html>
<head>
    <title>Database Insert</title>
</head>
<body>
<h2>Registration Form</h2>
<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" id="confirm_password" required><br>
    <input type="submit" value="Register">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $conn = new mysqli('localhost','root','','mydb');
        if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection Failed : ". $conn->connect_error);
        } else {
            $stmt = $conn->prepare("insert into registration(name, email, password) values(?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $password);
            $execval = $stmt->execute();
            echo $execval;
            echo "Registration successfully...";
            $stmt->close();
            $conn->close();
        }
    }
?>
</body>
</html>