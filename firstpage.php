<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
</head>

<body>
    <?php
    $linktest = "<Click> & you'll see";
    ?>
    <a href="secondpage.php?name=<?php echo urlencode("akshay urankar"); ?>&id=42">
        <?php echo htmlspecialchars($linktest); ?>
    </a>
</body>

</html>