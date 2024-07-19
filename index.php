<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Library Management System</title>
</head>
<body>

    <h1>Library Management System</h1>
    <ul>
        <li><a href="add_member.php">Add Member</a></li>
        <li><a href="add_author.php">Add Author</a></li>
        <li><a href="add_book.php">Add Book</a></li>
        <li><a href="view_members.php">View Members</a></li>
        <li><a href="view_authors.php">View Authors</a></li>
        <li><a href="view_books.php">View Books</a></li>
        <li><a href="login.php">Login</a></li>
        <li>Don't have an account? <a href="register.php">Register</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

</body>
</html>

