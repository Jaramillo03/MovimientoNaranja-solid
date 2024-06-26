<?php
// Archivo: letra_d.php

// Definición de la interfaz para cualquier tipo de impresión
interface Impresor {
    public function imprimir();
}

// Implementación específica para imprimir la letra D
class LetraD implements Impresor {
    public function imprimir() {
        echo "######\n";
        echo "#     #\n";
        echo "#      #\n";
        echo "#      #\n";
        echo "#     #\n";
        echo "######\n";
    }
}

// Clase de alto nivel que depende de una abstracción (Interfaz Impresor)
class Impresion {
    private $impresor;

    public function __construct(Impresor $impresor) {
        $this->impresor = $impresor;
    }

    public function imprimirLetra() {
        $this->impresor->imprimir();
    }
}

// Creación de una instancia de la clase Impresion utilizando la clase LetraD
$impresorLetraD = new LetraD();
$impresion = new Impresion($impresorLetraD);
$impresion->imprimirLetra();
?>

