<?php 
require_once __DIR__ . '/Product.php';

class Model extends Product {
    public function getTipo() {
        return 'cuccia';
    }
}