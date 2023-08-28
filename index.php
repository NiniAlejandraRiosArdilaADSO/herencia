<?php
// Definición de la clase base 'Animal'
class Animal {
    public $nombre; // Propiedad para almacenar el nombre del animal
    
    // Constructor de la clase 'Animal'
    public function __construct($nombre) {
        $this->nombre = $nombre; // Establecer el nombre del animal al crear un objeto
    }
    
    // Método para emitir un sonido genérico
    public function emitirSonido() {
        return "Haciendo un sonido genérico"; // Mensaje predeterminado
    }
}

// Definición de la clase 'Perro', que hereda de 'Animal'
class Perro extends Animal {
    // Sobrescribir el método 'emitirSonido' para perros
    public function emitirSonido() {
        return "Woof woof!"; // Sonido específico para perros
    }
}

// Definición de la clase 'Gato', que hereda de 'Animal'
class Gato extends Animal {
    // Sobrescribir el método 'emitirSonido' para gatos
    public function emitirSonido() {
        return "Miau!"; // Sonido específico para gatos
    }
}

// Crear un objeto de la clase 'Perro' con nombre 'Fido'
$perro = new Perro("Fido");

// Crear un objeto de la clase 'Gato' con nombre 'Whiskers'
$gato = new Gato("Whiskers");

// Mostrar el nombre y el sonido del perro
echo $perro->nombre . ": " . $perro->emitirSonido() . "<br>";

// Mostrar el nombre y el sonido del gato
echo $gato->nombre . ": " . $gato->emitirSonido();

?>

