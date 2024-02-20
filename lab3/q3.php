<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prime</title>
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
            $fag=0;
            for($i=2;$i<=$num/2;$i++){
                if($num%$i==0){
                    $flag=1;
                    break;
                }
            }
            if($flag==0){
                echo "Is Prime";
            }else{
                echo "Is not Prime";
            }
        }
    ?>
</body>
</html>