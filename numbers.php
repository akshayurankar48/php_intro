<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>

<body>
    <?php
    $var1 = 3;
    $var2 = 4;
    ?>
    Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?>
    <br />
    +=: <?php $var2 += 4;
        echo $var2; ?><br />
    -=: <?php $var2 -= 4;
        echo $var2; ?><br />
    *=: <?php $var2 *= 3;
        echo $var2; ?><br />
    /=: <?php $var2 /= 4;
        echo $var2; ?><br />
    <br />
    Increment: <?php $var2++;
                echo $var2; ?><br />
    Decrement: <?php $var2--;
                echo $var2; ?><br />
</body>

</html>