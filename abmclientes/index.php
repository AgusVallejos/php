<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

//Preguntar si existe el archivo
if (file_exists("archivo.txt")){
    //Vamos a leerlo y almacenamos contenido en jsonClientes
  $jsonClientes = file_get_contents("archivo.txt");
    //convertir jsonClientes en un array llamado aClientes
  $aClientes = json_decode($jsonClientes, true);

} else {
//Si no existe el archivo
    //Creamos un aClientes inicializado como un array vacío
    $aClientes = array();
}


if($_POST){
    $documento = trim($_POST["txtDocumento"]);
    $nombre = trim($_POST["txtNombre"]);
    $telefono = trim($_POST["txtTelefono"]);
    $correo = trim($_POST["txtCorreo"]);

    $aClientes[] = array("documento" => $documento,
                         "nombre" => $nombre,
                         "telefono" => $telefono,
                         "correo" => $correo);
    
    //Convertir el array de clientes a jsonClientes
    $jsonClientes = json_encode($aClientes);

    //almacenar el string jsonClientes en el "archivo.txt"
    file_put_contents("archivo.txt", $jsonClientes);  
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>ABM clientes</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center my-3">
                <h1>Registro de clientes</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-6 my-3">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="my-3">
                        <label for="">DNI: *</label>
                        <input type="text" id="txtDocumento" name="txtDocumento" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Nombre: *</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                    </div>

                    <div class="my-3">
                        <label for="">Teléfono: </label>
                        <input type="tel" id="txtTelefono" name="txtTelefono" class="form-control">
                    </div>

                    <div class="my-3">
                        <label for="">Correo: *</label>
                        <input type="email" id="txtCorreo" name="txtCorreo" class="form-control">
                    </div>

                    <div>
                        <label for="">Archivo adjunto</label>
                        <input type="file" name="archivo1" id="archivo1" accept=".jpg, .jpeg, .png">
                        <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png .</small>
                    </div>

                    <div class="my-3">
                        <button type="submit" name="btnGuardar" class="btn btn-primary">Guardar</button>
                        <button type="submit" name="btnNuevo" class="btn btn-danger">Nuevo</button>
                    </div>
                </form>
            </div>

            <div class="col-6 my-3">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($aClientes as $pos => $cliente): ?>
                        <tr>
                            <td><?php ?></td>
                            <td><? echo $cliente["documento"]; ?></td>
                            <td><?php echo $cliente["nombre"]; ?></td>
                            <td><?php echo $cliente["correo"]; ?></td>
                            <td>
                                <a href=""><i class="fa-solid fa-pencil"></i></a>
                                <a href=""><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>


                </table>
            </div>
        </div>
    </main>

</body>

</html>