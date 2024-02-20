<!DOCTYPE html>
<html lang="en">
<head>
    <title>Factorial</title>
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
            $fac = 1;
            while($num>0){
                $fac = $fac*$num;
                $num--;
            }
            echo "Factorial:".$fac;
        }
    ?>
</body>
</html>