<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example</title>
</head>
<body>
    <?php
        function func1($name){
            if($name=="admin"){
                echo "hello Admin <br>";
            }
            echo $name." the today is".date("Y-m-d");
        }
        $myname="admin";
        func1($myname);
    ?>
</body>
</html>