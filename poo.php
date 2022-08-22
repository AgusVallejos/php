<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definiciones de las clases.

class Persona{
    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;

    public function __construct($dni="", $nombre="", $edad="", $nacionalidad=""){
        $this->dni = $dni;
    }

    public function setDni($dni){ $this->dni = $dni; }
    public function getDni(){ return $this->dni; }

    public function setNombre($nombre){ $this->nombre = $nombre;}
    public function getNombre(){ return $this->nombre; }
    
    public function setNacionalidad($nacionalidad){ $this->nacionalidad = $nacionalidad; }
    public function getNacionalidad(){ return $this->nacionalidad; }
    
    public function setEdad($edad){ $this->edad = $edad; }
    public function getEdad(){ return $this->edad; }

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

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
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
    const ESPECIALIDAD_WP = "Wordpress";
    const ESPECIALIDAD_ECO = "Economía aplicada";
    const ESPECIALIDAD_BBDD = "Base de datos";

    
    public function imprimir(){}
    public function imprimirEspecialidadesHabilitadas(){
        echo "Un docente puede tener las siguientes especialidades:<br>";
        echo "Especialidad 1:";
        echo "Especialidad 2:";
        echo "Especialidad 3:";
    }
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