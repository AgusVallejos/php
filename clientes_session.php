<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();


if(isset($_SESSION["listadoClientes"])){
    //si existe la variable de session listadoClientes asigno su contenido a aClientes
    $aClientes = $_SESSION["listadoClientes"];
} else {
    $aClientes = array();
}



if ($_POST) {
    //asignamos en variables los datos que vengan del formulario 
    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $telefono = $_POST["txtTelefono"];
    $edad = $_POST["txtEdad"];

    //se crea array asociativo que contendrá el listado de clientes
    $aClientes[] = array("nombre" => $nombre, "dni" => $dni, "telefono" => $telefono, "edad" => $edad);

    //actualiza el contenido de variable de session
    $_SESSION["listadoClientes"] = $aClientes;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-3">
                <h1>Listado de clientes</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-3 offset-1 me-5">
                <form action="" method="POST">

                    <label for="">Nombre:</label>
                    <input type="text" name="txtNombre" placeholder="Ingrese el nombre y apellido" class="form-control">


                    <label for="">DNI:</label>
                    <input type="text" name="txtDni" class="form-control">



                    <label for="">Teléfono:</label>
                    <input type="text" name="txtTelefono" class="form-control">


                    <label for="">Edad:</label>
                    <input type="text" name="txtEdad" class="form-control">


                    <div class="my-3">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>
                </form>
            </div>

            <div class="col-6 my-3 ms-5">
                <table class="table table-hover border">

                    <thead>
                        <tr>
                            <th>Nombre: </th>
                            <th>DNI: </th>
                            <th>Teléfono: </th>
                            <th>Edad: </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($aClientes as $cliente) : ?>
                            <tr>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["dni"]; ?></td>
                                <td><?php echo $cliente["telefono"]; ?></td>
                                <td><?php echo $cliente["edad"]; ?></td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>
            </div>
        </div>
    </main>

</body>

</html>