<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>
<form method="post">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    echo "<h3>Submitted Information:</h3>";
    echo "Email: $email<br>";
    echo "Password: $password";
}?>
</body>
</html>