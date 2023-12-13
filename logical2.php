<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Expressions: Switch</title>
</head>

<body>
    <?php $a = 2; ?>
    <?php
    switch ($a) {
        case 0:
            echo "a equals 0";
            break;
        case 1:
            echo "a equals 1";
            break;
        case 2:
            echo "a equals 2";
            break;
        case 3:
            echo "a equals 3";
            break;
        case 4:
            echo "a equals 4";
            break;
        default:
            echo "a is not 0, 1, or 2";
            break;
    }
    ?>
</body>

</html>