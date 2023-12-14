<?php
// 1. Create a database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "widget_corp";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// 2. Perform database query
$sql = "SELECT * FROM subjects";
$result = $conn->query($sql);

// Check if the query was successful
if (!$result) {
    die("Database query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic</title>
</head>

<body>
    <?php
    // 3. Use returned data
    while ($row = $result->fetch_assoc()) {
        echo $row["menu_name"] . " " . $row["position"] . "<br />";
    }
    ?>
</body>

</html>

<?php
// 4. Close connection
$conn->close();
?>