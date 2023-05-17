<?php
require_once __DIR__ . '/Product.php';

class Food extends Product {
    public function getTipo() {
        return 'cibo';
    }
}