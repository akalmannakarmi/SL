<?php
    if (isset($_GET['fname']) && isset($_GET['lname'])) {
        echo $_GET['fname'] . " " . $_GET['lname'];
    }
?>