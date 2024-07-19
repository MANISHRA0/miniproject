<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author_id = $_POST['author_id'];

    $sql = "INSERT INTO books (title, author_id) VALUES ('$title', '$author_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch authors for the dropdown
$authors = $conn->query("SELECT * FROM authors");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Add Book</title>
</head>
<body>
    <h1>Add Book</h1>
    <form method="post" action="">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title"><br><br>
        <label for="author_id">Author:</label>
        <select id="author_id" name="author_id">
            <?php while ($row = $authors->fetch_assoc()): ?>
                <option value="<?php echo $row['author_id']; ?>"><?php echo $row['name']; ?></option>
            <?php endwhile; ?>
        </select><br><br>
        <input type="submit" value="Add Book">
    </form>
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>
