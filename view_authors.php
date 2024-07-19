<?php
include 'db.php';

$sql = "SELECT * FROM authors";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>View Authors</title>
</head>
<body>
    <h1>View Authors</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['author_id']; ?></td>
                <td><?php echo $row['name']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>
