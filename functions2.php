<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions 2</title>
</head>

<body>
    <?php
    // using globals
    $bar = "outside";
    function foo()
    {
        global $bar;
        $bar = "inside";
    }
    foo();
    echo $bar . "<br/>";
    ?>
    <br />

    <?php
    // using local variables, arguments & return values
    $bar = "outside";
    function foo2($var)
    {
        $var = "inside";
        return $var;
    }
    $bar = foo2($bar);
    echo $bar . "<br/>";
    ?>
    <br />
    <?php
    function paint($room = "office", $color = "red")
    {
        echo "The color of the {$room} is {$color}.";
    }
    paint("blue");
    echo "<br/>";
    paint();
    echo "<br/>";
    paint("bedroom", "yellow");
    ?>
</body>

</html>