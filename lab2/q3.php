<!DOCTYPE html>
<html lang="en">
<head>
    <title>Associative array</title>
</head>
<body>
    <?php
        $ages = array(
            "Peter" => 32,
            "John" => 45,
            "Doe" => 25
        );
        foreach ($ages as $name => $age) {
            echo "Name: $name, Age: $age <br>";
        }
    ?>
</body>
</html>