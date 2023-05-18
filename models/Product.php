<?php

class Product {
    private $name;
    private $img;
    private $price;
    private $category;

    public function __construct($_name, $_img, $_price, $_category) {
        $this->name = $_name;
        $this->img = $_img;
        $this->price = $_price;
        $this->category = $_category;

        if (!is_numeric($_price) || $_price <= 0) {
            throw new Exception("Il prezzo del prodotto non è valido, deve essere un numero e maggiore di 0.");
        }
    }


    public function getName() {
        return $this->name;
    }

    public function getImg() {
        return $this->img;
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