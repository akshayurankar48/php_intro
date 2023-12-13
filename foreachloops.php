<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops: foreach</title>
</head>

<body>
    <?php
    $ages = array(4, 8, 15, 16, 23, 42);
    // using eavh value
    foreach ($ages as $age) {
        echo $age . ", ";
    }
    ?>
    <?php
    // using each key => value pair
    foreach ($ages as $position => $age) {
        echo $position . ": " . $age . "<br/>";
    }
    ?>
    <br />
    <?php
    $prices = array("Brand New Computer" => 2000, "1 month in Lynda.com Training Library" => 25, "Learning PHP" => "priceless");
    foreach ($prices as $key => $value) {
        if (is_int($value)) {
            echo $key . ": $" . $value . "<br/>";
        } else {
            echo $key . ": " . $value . "<br/>";
        }
    }
    ?>
</body>

</html>