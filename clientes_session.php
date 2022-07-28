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


//pregunta si es POSTBACK. Sea para enviar o eliminar todos
if ($_POST) {
    //asignamos en variables los datos que vengan del formulario 

    if(isset($_POST["btnEnviar"])){
    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $telefono = $_POST["txtTelefono"];
    $edad = $_POST["txtEdad"];

    //se crea array asociativo que contendrá el listado de clientes
    $aClientes[] = array("nombre" => $nombre, "dni" => $dni, "telefono" => $telefono, "edad" => $edad);

    //actualiza el contenido de variable de session
    $_SESSION["listadoClientes"] = $aClientes;
    }

    if(isset($_POST["btnEliminar"])){
        session_destroy();
        $aClientes = array();
    }
}

//pregunta si viene algo en la query string 
if(isset($_GET["pos"])){
    // recupero el dato que viene desde la query string via get
    $pos = $_GET["pos"];
    //Elimina la posicion del array indicada
    unset($aClientes[$pos]);
    //Actualiza la variable de session con el array actualizado
    $_SESSION["listadoClientes"] = $aClientes;
    header("Location: clientes_session.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
                        <button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>
                        <button type="submit" name="btnEliminar" class="btn btn-danger">Eliminar</button>
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
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($aClientes as $pos => $cliente) : ?>
                            <tr>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["dni"]; ?></td>
                                <td><?php echo $cliente["telefono"]; ?></td>
                                <td><?php echo $cliente["edad"]; ?></td>
                                <td><a href="clientes_session.php?pos=<?php echo $pos; ?>"><i class="bi bi-trash"></i></td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>
            </div>
        </div>
    </main>

</body>

</html>