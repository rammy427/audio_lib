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
            </table>
        </div>
        <?php include "base_scripts.html"; ?>
        <script src="./table.js"></script>
    </body>
</html>