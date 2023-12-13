<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing</title>
</head>

<body>
    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "{$username}: {$password}"
    ?>
</body>

</html>