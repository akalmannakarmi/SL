<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        try {
            $a=12/0;
        } catch (\Throwable $th) {
            echo $th;
        }
    ?>
</body>
</html>