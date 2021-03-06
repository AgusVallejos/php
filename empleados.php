<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados[] = array("dni" => 33300123, "nombre" => "David García", "bruto" => 85000.30);
$aEmpleados[] = array("dni" => 42745132, "nombre" => "Ana Valero", "bruto" => 90000);
$aEmpleados[] = array("dni" => 37587654, "nombre" => "Mauro Lombardo", "bruto" => 100000);
$aEmpleados[] = array("dni" => 32567489, "nombre" => "Micaela Mercado", "bruto" => 70000);

function calcularNeto($bruto) {
    return $bruto - $bruto * 0.17;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Empleados</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Listado de empleados</h1>
            </div>

            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Sueldo</th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php foreach($aEmpleados as $empleado){ ?>
                        <tr>
                            <td><?php echo $empleado["dni"]; ?></td>
                            <td><?php echo mb_strtoupper($empleado["nombre"]); ?></td>
                            <td><?php echo number_format (calcularNeto($empleado["bruto"]), 2, ",", ".") ?></td>  
                        </tr>
                      <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12 my-3">
                <p>La cantidad de usuarios activos es: <?php echo count($aEmpleados); ?></p>
            </div>
        </div>
    </main>
    
</body>
</html>