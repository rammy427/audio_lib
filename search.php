<?php
include "connection.php";
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
        <h1 class="my-5 text-center">Buscar audiolibros</h1>
        <div class="table-responsive w-75 mx-auto">
            <table id="datatable" class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Nombre de Autor</th>
                        <th scope="col">Apellido de Autor</th>
                        <th scope="col">Año de Publicación</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Archivo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result))
                    {
                        // print "hola";
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
                                print $row["audio_path"];
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