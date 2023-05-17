<?php
require_once __DIR__ . '/Product.php';

class Toys extends Product {
    public function getTipo() {
        return 'gioco';
    }
}