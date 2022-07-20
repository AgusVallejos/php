<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$aNotas = array(9, 8, 9.50, 4, 7, 8);

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

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000,
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000,
);

function contar($aArray){
    $contador = 0;
    foreach ($aArray as $item){
        $contador++;
    }
    return $contador;
}

echo "Cantiad de notas: " . contar($aNotas). "<br>";
echo "Cantidad de pacientes: " . contar($aPacientes) . "<br>";
echo "Cantidad de productos: " . contar ($aProductos);

?>