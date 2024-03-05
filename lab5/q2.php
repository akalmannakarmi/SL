<!-- 2. Edit & Update the student record based on the unique id. -->
<html>
<head><title>Edit & Update</title></head>
<body>
<h2>Edit & Update Student Record</h2>
<?php if(!isset($_GET['id'])){ ?>
<form method="get">
    <label for="id">Enter ID of the Record to Edit:</label>
    <input type="text" name="id" id="id">
    <button type="submit">Edit Record</button>
</form>
<?php }
    $conn = new mysqli('localhost', 'root', '', 'sl');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $district = $_POST['district'];

        $sql = "UPDATE registration SET name='$name', address='$address', contact='$contact', gender='$gender', district='$district' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM registration WHERE id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
?>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>"><br>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address" value="<?php echo $row['address']; ?>"><br>
    <label for="contact">Contact:</label>
    <input type="text" name="contact" id="contact" value="<?php echo $row['contact']; ?>"><br>
    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="Male" <?php if($row['gender'] == 'Male') echo 'checked'; ?>>Male
    <input type="radio" name="gender" value="Female" <?php if($row['gender'] == 'Female') echo 'checked'; ?>>Female<br>
    <label for="district">District:</label>
    <select name="district" id="district">
        <option value="kathmandu" <?php if($row['district'] == 'kathmandu') echo 'selected'; ?>>Kathmandu</option>
        <option value="lalitpur" <?php if($row['district'] == 'lalitpur') echo 'selected'; ?>>Lalitpur</option>
        <option value="bhaktapur" <?php if($row['district'] == 'bhaktapur') echo 'selected'; ?>>Bhaktapur</option>
    </select><br>
    <button type="submit" name="update">Update</button>
</form>
<?php
        } else {
            echo "No record found.";
        }
    }
    $conn->close();
?>
</body>
</html>
