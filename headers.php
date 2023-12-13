<?php
//  This is how you return a 404 error

// header("HTTP/1.0 404 Not Found");
// exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headers</title>
</head>

<body>
    <?php
    //  This is how you return a 404 error
    header("Location: basic.html");
    exit;
    ?>
</body>

</html>