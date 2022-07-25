<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-2">
                <h1>Formulario de datos personales</h1>
            </div>
        </div>

        <div class="row">
            <div class="offset-sm-3 col-sm-6 col-12">
                <form action="resultado.php" method="POST">

                    <div class="my-3">
                        <label for="">Nombre: </label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
                    </div>

                    <div class="my-3">
                        <label for="">DNI:</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control" required>
                    </div>

                    <div class="my-3">
                        <label for="">Teléfono:</label>
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control" required>
                    </div>

                    <div class="my-3">
                        <label for="">Edad:</label>
                        <input type="text" name="txtEdad" id="txtEdad" class="form-control" required>
                    </div>

                    <div class="my-3 float-end">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>


                </form>
            </div>
        </div>
    </main>

</body>

</html>