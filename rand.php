<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$valor = rand(1, 5);

echo $valor == 1 || $valor == 3 || $valor == 5? "El número es impar" : "El número es par";

?>