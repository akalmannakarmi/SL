<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table</title>
</head>
<body>
    <form method="post">
        <label for="num">Enter a Number:</label>
        <input type="number" name="num" id="num"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num = $_POST["num"];
            for($i=1;$i<=10;$i++) { 
                echo $num." x ".$i." = ".$num*$i."<br>";
            }
        }
    ?>
</body>
</html>