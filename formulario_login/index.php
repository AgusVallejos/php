<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_POST){
    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

    if ($usuario != "" && $clave != ""){
        header("Location: acceso-confirmado.php");
    } else {
        $mensaje = "Válido para usuarios registrados";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 my-2">
                <h1>Formulario </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <?php if(isset($mensaje)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje; ?>
                    </div>
                    <?php endif; ?>

                <form action="" method="POST">
                    <div class="my-3">
                        <label for="">Usuario:
                            <input type="text" id="txtUsuario" name="txtUsuario" class="form-control">
                        </label>
                    </div>

                    <div class="my-3">
                        <label for="">Clave:
                            <input type="password" id="txtUsuario" name="txtClave" class="form-control">
                        </label>
                    </div>

                    <div class="my-4">
                        <button class="btn btn-primary" type="submit">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>

</html>