<?php 
class persona {
    public $nombre;
    public $apellido;
    public $edad;

    function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    function mostrar()
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellido: " . $this->apellido . "<br>";
        echo "Edad: " . $this->edad . "<br>";
    }
}
$persona1 = new persona("Juan", "Perez", 30);
$persona1->mostrar();

?>