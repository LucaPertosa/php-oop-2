<?php

class Product {
    private $name;
    private $price;
    private $category;

    public function __construct($_name, $_price, $_category) {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getTipo() {
        return 'prodotto';
    }
}