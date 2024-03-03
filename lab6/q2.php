<!-- 2. WAP in PHP to upload file in php & store it into the database. -->
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h2>Upload File</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <button type="submit" name="submit">Upload</button>
    </form>

    <?php
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'sl');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    // Check if form is submitted
    if(isset($_POST["submit"])) {
        // Check if file is uploaded without errors
        if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
            $fileName = $_FILES["fileToUpload"]["name"];
            $fileType = $_FILES["fileToUpload"]["type"];
            $fileSize = $_FILES["fileToUpload"]["size"];
            $fileTmpName = $_FILES["fileToUpload"]["tmp_name"];

            // Read file data
            $fileData = file_get_contents($fileTmpName);

            // Prepare insert query
            $stmt = $conn->prepare("INSERT INTO files (name, type, size, data) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssis", $fileName, $fileType, $fileSize, $fileData);

            // Execute insert query
            if ($stmt->execute() === TRUE) {
                echo "File uploaded successfully";
            } else {
                echo "Error uploading file: " . $conn->error;
            }

            // Close statement
            $stmt->close();
        } else {
            echo "Error uploading file: " . $_FILES["fileToUpload"]["error"];
        }
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
