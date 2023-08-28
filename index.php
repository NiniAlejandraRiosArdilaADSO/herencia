<?php
// Declaración de la clase base 'Vehiculo'
class Vehiculo {
    // Propiedades públicas de la clase
    public $motor = false;  // Indica si el motor está encendido o apagado
    public $marca;          // Marca del vehículo
    public $color;          // Color del vehículo

    // Método para mostrar el estado del motor
    public function estado() {
        if ($this->motor) {
            echo "El motor está encendido<br>";
        } else {
            echo "El motor está apagado<br>";
        }
    }

    // Método para encender el motor
    public function encender() {
        if ($this->motor) {
            echo "Cuidado, el motor ya está encendido<br>";
        } else {
            $this->motor = true;  // Cambia el estado del motor a encendido
            echo "El motor ahora está encendido<br>";
            $this->motor = true;  // ¡Este duplicado parece ser un error y podría eliminarse!
        }
    }
}

// Declaración de la clase 'Moto' que hereda de la clase 'Vehiculo'
class Moto extends Vehiculo {
    // No contiene ningún método ni propiedad adicional, hereda las de 'Vehiculo'
}

// Creación de una instancia de la clase 'Moto'
$moto = new Moto();

// Llamada al método 'estado()' de la instancia de 'Moto'
$moto->estado();

?>
