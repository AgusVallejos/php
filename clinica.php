<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50,

);

$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79,

);

$aPacientes[] = array(
    "dni" => "23.781.383",
    "nombre" => "Juan Irraola",
    "edad" => 63,
    "peso" => 85,

);

$aPacientes[] = array(
    "dni" => "43.468.583",
    "nombre" => "Adam Sandler",
    "edad" => 21,
    "peso" => 80,

);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Clinica</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Listado de pacientes</h1>
            </div>

            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre y apellido</th>
                            <th>Edad</th>
                            <th>Peso</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($aPacientes as $paciente){ ?>
                            <tr>
                                <td><?php echo $paciente["dni"]; ?></td>
                                <td><?php echo $paciente["nombre"]; ?></td>
                                <td><?php echo $paciente["edad"]; ?></td>
                                <td><?php echo $paciente["peso"]; ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>

                </table>
            </div>
        </div>
    </main>

</body>

</html>