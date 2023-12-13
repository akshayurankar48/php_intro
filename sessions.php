<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>

<body>
    <?php
    $_SESSION['first_name'] = "Akshay";
    $_SESSION['last_name'] = "Urankar";
    ?>
    <?php
    $name = $_SESSION['first_name'] . " " . $_SESSION['last_name'];
    echo $name;
    ?>
</body>

</html>