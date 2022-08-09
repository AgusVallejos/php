<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//si existe el archivo invitados lo abrimos y cargamos una variable del tipo array
if(file_exists("invitados.txt")){
    $archivo = fopen("invitados.txt", "r");
    $aDocumentos = fgetcsv($archivo, 0, ",");
} else {
    //sino el array queda como un array vacío
    $aDocumentos = array();
}

if($_POST){
    if(isset($_POST["btnVerificar"])){
        $documento = $_REQUEST["txtDocumento"];
        //Si el DNI ingresado se encuentra en la lista se mostrará el mensaje de bienvenido
        if(in_array($documento, $aDocumentos)){
            $aMensaje = array(
                        "texto" => "Bienvenid@. ",
                        "estado" => "success");
        } else {
            $aMensaje = array(
                        "texto" => "No se encuentra el documento en la lista de invitados. ",
                        "estado" => "danger");
        } 
    }

    if(isset ($_POST["btnVip"])){
        $codigo = $_REQUEST["txtCodigo"];

        //Si el código es verde entonces mostrará "Su código de acceso es.."
        if($codigo == "verde"){
            $aMensaje = array(
                        "texto" => "Su código de acceso es ". rand(1000, 9999),
                        "estado" => "success");
        } else {
            $aMensaje = array (
                       "texto" => "Ud. no tiene pase vip. ",
                       "estado" => "danger");
        }
    }
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de invitados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row mt-3">
            <div classs="col-12">
                <h1>Lista de invitados</h1>
            </div>
        </div>

        <?php if(isset($aMensaje)) : ?>
            <div class="col-12">
                <div class="alert alert-<?php echo $aMensaje["estado"]; ?>" role="alert">
                <?php echo $aMensaje["texto"] ; ?>
                </div>
            </div>
            <?php endif; ?>

        

        <div class="row mt-4">
            <div class="col-12">
                <p>Complete el siguiente formulario:</p>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <form action="" method="POST">

                <div>
                    <label for=""> Ingrese el DNI: </label>
                    <input type="text" name="txtDocumento" id="txtDocumento" class="form-control">
                    <button type="submit" class="btn btn-primary" name="btnVerificar">Verificar invitado</button>
                </div>

                <div class="mt-5">
                    <label for="">Ingresa el código secreto Para el pase VIP: </label>
                    <input type="text" name="txtCodigo" id="txtCodigo" class="form-control">
                    <button type="submit" class="btn btn-primary" name="btnVip">Verificar código</button>
        
                </div>
                </form>
            </div>
        </div>
    </main>
    
</body>
</html>