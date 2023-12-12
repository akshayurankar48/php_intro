<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>

<body>
    <?php
    $firstString = "The quick brown fox";
    $secondString = " jumped over the lazy dog";
    ?>
    <?php
    $thirdString =  $firstString;
    $thirdString .= $secondString;
    echo $thirdString;
    ?>
    <br />
    Lowercase: <?php echo strtolower($thirdString); ?><br />
    UpperCase: <?php echo strtoupper($thirdString); ?><br />
    Uppercase first-letter: <?php echo ucfirst($thirdString); ?><br />
    Uppercase words: <?php echo ucwords($thirdString); ?><br />
    <br />
    Length: <?php echo strlen($thirdString); ?><br />
    Trim: <?php echo $fourthString = $firstString . " " . trim($secondString); ?><br />
    Find: <?php echo strstr($thirdString, "brown"); ?><br />
    Replace by string: <?php echo str_replace("quick", "super-fast", $thirdString)  ?>
</body>

</html>