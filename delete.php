<?php
include "connection.php";
$book_id = mysqli_real_escape_string($connection, $_GET["id"]);

$book_deletion_query = "DELETE FROM books WHERE book_id = $book_id";
if (mysqli_query($connection, $book_deletion_query))
    header("Location: options.php");
?>