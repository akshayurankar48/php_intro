<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops: break</title>
</head>

<body>
    <?php
    for ($count = 0; $count <= 10; $count++) {
        echo $count;
        if ($count == 10) {
            break;
        }
        echo ", ";
    }
    ?>
</body>

</html>