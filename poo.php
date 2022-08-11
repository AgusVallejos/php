<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definiciones de las clases.

class Persona{
    public $dni;
    public $nombre;
    public $edad;
    public $nacionalidad;
    public function imprimir(){}
}

class Alumno extends Persona{
    public $legajo;
    public $notaPortfolio;
    public $notaPhp;
    public $notaProyecto;

    public function __construct()
    
    {
        $this ->notaPortfolio = 0.0;
        $this ->notaPhp = 0.0;
        $this ->NotaProyecto = 0.0;
    }

    public function imprimir(){
        echo "DNI: ". $this->dni . "<br>";
        echo "Nombre: ". $this->nombre. "<br>";
        echo "Edad: ". $this->edad. "<br>";
        echo "Nacionalidad: ". $this->nacionalidad. "<br>";
        echo "Nota Portfolio: ". $this->notaPortfolio. "<br>";
        echo "Nota PHP: ". $this->notaPhp. "<br>";
        echo "Nota Proyecto: ". $this->notaProyecto. "<br>";
        echo "Promedio: ".  number_format($this->calcularPromedio(), 2, ",", ".") . "<br><br>";
    }
    public function calcularPromedio(){
   return($this->notaPhp + $this->notaPortfolio + $this->NotaProyecto)/3;
    }
}

class Docente extends Persona{
    public $especialidad;
    public function imprimir(){}
    public function imprimirEspecialidadesHabilitadas(){}
}

//Programa
$alumno1 = new Alumno();
$alumno1->dni = "42567132";
$alumno1->nombre = "Bautista";
$alumno1->edad = 22;
$alumno1->nacionalidad = "Argentina";
$alumno1->notaPortfolio = 8;
$alumno1->notaPhp = 5;
$alumno1->notaProyecto = 9;
$alumno1 ->calcularPromedio();
$alumno1->imprimir();


?> 