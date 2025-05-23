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
        <?php include "navigation.html"; ?>
        <h1 class="mt-5 mb-3 text-center">Editar catálogo</h1>
        <div class="row mx-auto mb-5">
            <button class="col-9 mx-auto btn btn-lg btn-success"><i class="bi bi-plus mx-1"></i>Añadir audiolibro</button>
        </div>  
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
                        <th scope="col">Opciones</th>
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
                                print $row["audio_path"];
                            print "</td>";
                            print "<td>";
                                print "<button class=\"btn btn-lg btn-primary text-white mx-1\"><i class=\"bi bi-pencil-square\"></i></button>";
                                print '<a href="delete.php?id='.$row["book_id"].'">';
                                    print "<button class=\"btn btn-lg btn-danger\"><i class=\"bi bi-trash3-fill\"></i></button>";
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