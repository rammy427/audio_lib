<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include "header.html"; ?>
    </head>
    <body>
        <?php include "navigation.html"; ?>
        <h1 class="my-5 text-center">Añadir o editar audiolibro</h1>
        <form class="col-sm-6 mx-auto" action="insert.php" method="post">
            <div class="row">
                <div class="col">
                    <label for="title">Título del libro</label>
                    <br>
                    <input id="title" name="title" type="text" class="form-control bg-white">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="firstName">Nombre del autor</label>
                    <br>
                    <input id="firstName" name="firstName" type="text" class="form-control bg-white">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="lastName">Apellido del autor</label>
                    <br>
                    <input id="lastName" name="lastName" type="text" class="form-control bg-white">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="publishedYear">Año de publicación</label>
                    <br>
                    <input id="publishedYear" name="publishedYear" type="number" class="form-control bg-white">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="isbn">ISBN</label>
                    <br>
                    <input id="isbn" name="isbn" type="text" class="form-control bg-white">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="audioPath">Nombre del archivo</label>
                    <br>
                    <input id="audioPath" name="audioPath" type="text" class="form-control bg-white">
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