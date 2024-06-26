<?php
// Archivo: solid_s.php

// Clase que maneja la lógica de generación de la letra S
class GeneradorLetraS {
    public function generar() {
        return "######\n" .
               "#\n" .
               "#\n" .
               "######\n" .
               "      #\n" .
               "######\n";
    }
}

// Clase que se encarga de imprimir cualquier letra
class Impresora {
    public function imprimir($contenido) {
        echo $contenido;
    }
}

// Clase que orquesta la generación y la impresión de la letra S
class Cliente {
    private $generador;
    private $impresora;

    public function __construct() {
        $this->generador = new GeneradorLetraS();
        $this->impresora = new Impresora();
    }

    public function imprimirLetraS() {
        $letraS = $this->generador->generar();
        $this->impresora->imprimir($letraS);
    }
}

// Uso del cliente para imprimir la letra S
$cliente = new Cliente();
$cliente->imprimirLetraS();
?>
