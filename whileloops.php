<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops: while</title>
</head>

<body>
    <?php
    $count = 0;
    while ($count <= 10) {
        echo $count . ", ";
        $count++;
    }
    echo "<br/> Count: {$count}";
    ?>
    <br />
    <?php
    $count = 0;
    while ($count <= 10) {
        if ($count == 5) {
            echo "FIVE";
        } else {
            echo $count . ", ";
        }
        $count++;
    }
    echo "<br/> Count: {$count}";
    ?>
</body>

</html>