<?php class Alumno {
    // Propiedades (atributos)
    private $nombre;
    private $edad;
    private $carrera;

    // Constructor
    public function __construct($nombre, $edad, $carrera) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->carrera = $carrera;
    }
    // Metodos (getters)
    public function getNombre() {
        return $this->nombre;
    }
    public function mostrar() {
        return "$this->nombre ($this->edad) - $this->carrera";
    }
}
?>
