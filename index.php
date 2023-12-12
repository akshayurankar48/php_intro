<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Without escaping -->
    <?php
    if (1 == 1) {
        echo "<p>This works!</p>";
    }
    ?>

    <!-- With escaping -->
    <?php if (1 == 1) { ?>
        <p>This work!!</p>
    <?php }
    ?>
</body>

</html>