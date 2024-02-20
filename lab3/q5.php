<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pattern</title>
</head>
<body>
    <?php
        $n=5;
        for($i=$n;$i>0;$i--){ 
            for($j=0;$j<$i;$j++) { 
                echo $n-$j." ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>