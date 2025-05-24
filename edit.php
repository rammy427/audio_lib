<?php
include "connection.php";

function isEditing(): bool
{
    return array_key_exists("id", $_GET);
}

if (isEditing())
{
    $book_id = mysqli_escape_string($connection, $_GET["id"]);
    $query = "SELECT * FROM books NATURAL JOIN book_authors NATURAL JOIN authors WHERE book_id = $book_id";
    $result = mysqli_query($connection, $query);
    $data = mysqli_fetch_array($result);

    $title = $data["title"];
    $first_name = $data["first_name"];
    $last_name = $data["last_name"];
    $published_year = $data["published_year"];
    $isbn = $data["isbn"];
    $audio_path = $data["audio_path"];
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include "header.html"; ?>
    </head>
    <body>
        <?php include "navigation.html"; ?>
        <h1 class="my-5 text-center">Añadir o editar audiolibro</h1>
        <form class="col-sm-6 mx-auto" method="post"
        <?php isEditing() ? print "action=\"insert.php?id=$book_id\"" : print "action=\"insert.php\"" ?>>
            <div class="row">
                <div class="col">
                    <label for="title">Título del libro</label>
                    <br>
                    <input id="title" name="title" type="text" class="form-control bg-white"
                    <?php if (isEditing()) print "value=\"$title\"" ?>>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="firstName">Nombre del autor</label>
                    <br>
                    <input id="firstName" name="firstName" type="text" class="form-control bg-white"
                    <?php if (isEditing()) print "value=\"$first_name\"" ?>>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="lastName">Apellido del autor</label>
                    <br>
                    <input id="lastName" name="lastName" type="text" class="form-control bg-white"
                    <?php if (isEditing()) print "value=\"$last_name\"" ?>>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="publishedYear">Año de publicación</label>
                    <br>
                    <input id="publishedYear" name="publishedYear" type="number" class="form-control bg-white"
                    <?php if (isEditing()) print "value=\"$published_year\"" ?>>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="isbn">ISBN</label>
                    <br>
                    <input id="isbn" name="isbn" type="text" class="form-control bg-white"
                    <?php if (isEditing()) print "value=\"$isbn\"" ?>>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="audioPath">Nombre del archivo</label>
                    <br>
                    <input id="audioPath" name="audioPath" type="text" class="form-control bg-white"
                    <?php if (isEditing()) print "value=\"$audio_path\"" ?>>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn btn-primary text-white rounded w-100">Someter</button>
                </div>
            </div>
        </form>
        <?php include "base_scripts.html"; ?>
    </body>
</html>