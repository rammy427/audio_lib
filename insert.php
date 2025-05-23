<?php
include "connection.php";

// Get all submitted form values.
$title = mysqli_escape_string($connection, $_POST["title"]);
$first_name = mysqli_escape_string($connection, $_POST["firstName"]);
$last_name = mysqli_escape_string($connection, $_POST["lastName"]);
$published_year = mysqli_escape_string($connection, $_POST["publishedYear"]);
$isbn = mysqli_escape_string($connection, $_POST["isbn"]);
$audio_path = mysqli_escape_string($connection, $_POST["audioPath"]);

// Execute the book and author insertions.
$book_query = "INSERT INTO books (title, published_year, isbn, audio_path) VALUES ('$title', $published_year, '$isbn', '$audio_path')";
$author_query = "INSERT INTO authors (first_name, last_name) VALUES ('$first_name', '$last_name')";
if (mysqli_query($connection, $book_query) && mysqli_query($connection, $author_query))
{
    // Insert the relation between the new book and author. Check IDs first.
    $book_id = mysqli_fetch_array(mysqli_query($connection, "SELECT book_id FROM books WHERE title = '$title'"))[0];
    $author_id = mysqli_fetch_array(mysqli_query($connection, "SELECT author_id FROM authors WHERE first_name = '$first_name'"))[0];
    $relation_query = "INSERT INTO book_authors VALUES ($book_id, $author_id)";
    if (mysqli_query($connection, $relation_query))
        header("Location: options.php");
}
?>