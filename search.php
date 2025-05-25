<?php
include "connection.php";

function isFiltered(): bool
{
    return array_key_exists("read", $_GET);
}

if (isFiltered())
    $query = "SELECT * FROM user_books NATURAL JOIN books NATURAL JOIN book_authors NATURAL JOIN authors WHERE user_id = 1";
else
    $query = "SELECT * FROM books NATURAL JOIN book_authors NATURAL JOIN authors";
$result = mysqli_query($connection, $query);
?>

<!-- Begin front end. -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include "header.html"; ?>
    </head>
    <body>
        <?php include "navigation.html"; ?>
        <h1 class="mt-5 mb-3 text-center">Buscar audiolibros</h1>
        <div class="row mx-auto mb-5">
            <a class="col-9 mx-auto btn btn-lg btn-success"
            <?php (isFiltered()) ? print 'href="search.php"' : print 'href="search.php?read"' ?>>
                <i class="bi bi-book-fill mx-2"></i>Filtrar libros que estoy escuchando
            </a>
        </div>
        <div class="table-responsive w-75 mx-auto fs-5">
            <table id="datatable" class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Nombre de Autor</th>
                        <th scope="col">Apellido de Autor</th>
                        <th scope="col">Año de Publicación</th>
                        <th scope="col">ISBN</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result))
                    {
                        print "<tr>";
                            print "<td>";
                                print $row["title"];
                            print "</td>";
                            print "<td>";
                                print $row["first_name"];
                            print "</td>";
                            print "<td>";
                                print $row["last_name"];
                            print "</td>";
                            print "<td>";
                                print $row["published_year"];
                            print "</td>";
                            print "<td>";
                                print $row["isbn"];
                            print "</td>";
                            print "<td>";
                                print '<a class="btn btn-lg btn-primary" href='.$row["audio_path"].' download>';
                                    print '<i class="bi bi-download mx-2"></i>Descargar';
                                print '</a>';
                            print "</td>";
                            print "<td>";
                                print '<a class="btn btn-lg btn-success" href="read.php?id='.$row["book_id"].'">';
                                    print '<i class="bi bi-book-fill"></i>';
                                print "</a>";
                            print "</td>";
                        print "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <?php include "base_scripts.html"; ?>
        <script src="table.js"></script>
    </body>
</html>