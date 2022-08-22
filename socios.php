<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//definición de clases

class Persona {
    protected $dni;
    protected $nombre;
    protected $correo;
    protected $celular;

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }
}

class Cliente extends Persona {
    private $aTarjetas;
    private $bActivo;
    private $fechaAlta;
    private $fechaBaja;

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

    public function __construct()
    {
        $this->aTarjetas = array();
        $this->bActivo = true;
        $this->fechaAlta = date("d/m/Y");
    }

    
    public function agregarTarjeta($tarjeta){
        $this->aTarjetas[] = $tarjeta;
    }

    public function darDeBaja($fecha){
        $this->fechaBaja = date_format(date_create($fecha), "d/m/Y");
        $this->bActivo = false; //Baja lógica
    }

    public function imprimir(){}

}

class Tarjeta {
    private $nombreTitular;
    private $numero;
    private $fechaEmision;
    private $fechaVto;
    private $tipo;
    private $cvv;

    const VISA ="VISA";
    const MASTERCARD ="Mastercard";
    const AMEX ="American Express";
    const CABAL ="Cabal";

    public function __construct($nombreTitular, $numero, $fechaEmision, $fechaVto, $tipo, $cvv)
    {
        $this->nombreTitular = $nombreTitular;
        $this->numero = $numero;
        $this->tipo = $tipo;
        $this->fechaEmision = $fechaEmision;
        $this->fechaVto = $fechaVto;
        $this->cvv = $cvv;
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }
}

//Desarrollo del programa
$cliente1 = new Cliente();
$cliente1->dni = "35123789";
$cliente1->nombre = "Ana Valle";
$cliente1->correo = "ana@correo.com";
$cliente1->celular = "1156781234";
$tarjeta1 = new Tarjeta("Ana Valle", "4223750778806383", "03/2021", "01/2023", Tarjeta::VISA, "275");
$tarjeta2 = new Tarjeta("Ana Valle", "347572886751981", "04/2021", "07/2027", Tarjeta::AMEX, "136");
$tarjeta3 = new Tarjeta("Ana Valle", "5415620495970009","07/2019", "12/2024", Tarjeta::MASTERCARD, "742");
$cliente1->agregarTarjeta($tarjeta1);
$cliente1->agregarTarjeta($tarjeta2);
$cliente1->agregarTarjeta($tarjeta3);
$cliente2 = new Cliente();
$cliente2->dni = "48456876";
$cliente2->nombre = "Bernabe Paz";
$cliente2->correo = "bernabe@correo.com";
$cliente2->celular = "1145326787";
$cliente2->agregarTarjeta(new Tarjeta("Bernabe Paez", "4969508071710316", "02/2021", "08/2025", Tarjeta::VISA, "865"));
$cliente2->agregarTarjeta(new Tarjeta("Bernabe Paez", "5149107669552238", "05/2020", "04/2025", Tarjeta::MASTERCARD, "554"));

print_r($cliente1);
print_r($cliente2);