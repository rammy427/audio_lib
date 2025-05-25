<?php
include "connection.php";
$book_id = mysqli_escape_string($connection, $_GET["id"]);
$result = mysqli_query($connection, "SELECT * FROM user_books WHERE book_id = $book_id");
if (mysqli_num_rows($result) == 0)
    // Book is not being listened to, so add it to the table.
    mysqli_query($connection, "INSERT INTO user_books VALUES (1, $book_id)");
else
    // Book is being read. Remove from the table.
    mysqli_query($connection, "DELETE FROM user_books WHERE book_id = $book_id");

header("Location: search.php");
?>