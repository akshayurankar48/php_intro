<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>

<body>
    <?php
    echo "Hello World<br/>";
    echo 'Hello World<br/>';
    $my_variable = "Hello World";
    echo $my_variable;
    echo "<br/>";
    echo $my_variable . " Again ";
    ?>
    <br />
    <?php
    echo "$my_variable Again.";
    echo "<br/>";
    echo "{$my_variable} Again.";
    ?>
</body>

</html>