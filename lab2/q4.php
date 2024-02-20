<!DOCTYPE html>
<html lang="en">
<head>
    <title>Odd or Even</title>
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
            if($num % 2 ==0) {
                echo "Even";
            }else{
                echo "Odd";
            }
        }
    ?>
</body>
</html>