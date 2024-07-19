<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    $sql = "INSERT INTO authors (name) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "New author added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Add Author</title>
</head>
<body>
    <h1>Add Author</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <input type="submit" value="Add Author">
    </form>
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>
