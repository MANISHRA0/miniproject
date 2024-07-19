<?php
include 'db.php';

$sql = "SELECT books.book_id, books.title, authors.name AS author_name
        FROM books
        JOIN authors ON books.author_id = authors.author_id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>View Books</title>
</head>
<body>
    <h1>View Books</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['book_id']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['author_name']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>
