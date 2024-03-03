<!DOCTYPE html>
<head>
    <title>Database Insert</title>
</head>
<body>
<h2>Registration Form</h2>
<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"><br>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address"><br>
    <label for="contact">Contact:</label>
    <input type="text" name="contact" id="contact"><br>
    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female<br>
    <label for="district">District:</label>
    <select name="district" id="district">
        <option value="kathmandu">Kathmandu</option>
        <option value="lalitpur">Lalitpur</option>
        <option value="bhaktapur">Bhaktapur</option>
    </select><br>
    <button type="reset">Reset</button>
    <button type="submit">Submit</button>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $district = $_POST['district'];
        $conn = new mysqli('localhost','root','','sl');
        if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection Failed : ". $conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO registration(name, address, contact, gender, district) VALUES(?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $name, $address, $contact, $gender, $district);
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