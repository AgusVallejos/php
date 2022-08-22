<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Cliente{
    private $dni;
    private $nombre;
    private $correo;
    private $telefono;
    private $descuento;

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

    public function __construct()
    {
      $this->descuento = 0.0;  
    }

    public function imprimir(){}

}

class Producto{
    private $cod;
    private $nombre;
    private $descripcion;
    private $precio;
    private $iva;

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }


    public function __construct()
    {
      $this->precio = 0.0;
      $this->iva = 0.0;
    }

    public function imprimir(){
        echo "Cod: ". $this->cod. "<br>";
        echo "Nombre: ". $this->nombre. "<br>";
        echo "Desc: ". $this->descripcion. "<br>";

    }
}

class Carrito{
    private $cliente;
    private $aProductos;
    private $subtotal;
    private $total;

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

    public function __construct()
    {
        $this->aProductos = array();
        $this->subtotal = 0.0;
        $this->total = 0.0;
    }

    public function imprimirTicket(){}

    public function cargarProducto(){}


}