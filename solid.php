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

// Interfaz para los métodos de pago
interface PaymentMethod {
    public function pay($amount);
}

// Clase para pago con tarjeta de crédito
class CreditCardPayment implements PaymentMethod {
    public function pay($amount) {
        // Lógica de pago con tarjeta de crédito
        echo "Paid $amount using Credit Card.";
    }
}

// Clase para pago con PayPal
class PayPalPayment implements PaymentMethod {
    public function pay($amount) {
        // Lógica de pago con PayPal
        echo "Paid $amount using PayPal.";
    }
}

// Clase PaymentProcessor que usa PaymentMethod
class PaymentProcessor {
    private $paymentMethod;

    // Método para establecer el método de pago
    public function setPaymentMethod(PaymentMethod $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    // Método para realizar el pago
    public function pay($amount) {
        $this->paymentMethod->pay($amount);
    }
}

// Uso del sistema de pago
$processor = new PaymentProcessor();

$processor->setPaymentMethod(new CreditCardPayment());
$processor->pay(100); // Paid 100 using Credit Card.

$processor->setPaymentMethod(new PayPalPayment());
$processor->pay(200); // Paid 200 using PayPal.

