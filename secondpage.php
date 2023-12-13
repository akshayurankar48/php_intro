<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Page</title>
</head>

<body>
    <?php
    print_r($_GET);
    $id = $_GET['id'];
    $name = $_GET['name'];
    echo "<br/> <strong>" .  $id . ": {$name}  </strong>";
    ?>
    <br />
    <?php
    $string = "Akshay Urankar";
    echo urlencode($string);
    echo "<br/>";
    echo rawurlencode($string)
    ?>
</body>

</html>