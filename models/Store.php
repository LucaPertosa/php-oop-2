<?php
require_once __DIR__ . '/Product.php';

class Store {
    private $products = [];

    public function addProduct(Product $_product) {
        $this->products[] = $_product;
    }

    public function getProductsByCategory($_category) {
        $filteredProducts = [];
        foreach ($this->products as $_product) {
            if ($_product->getCategory() == $_category) {
                $filteredProducts[] = $_product;
            }
        }
        return $filteredProducts;
    }

    public function getCardProduct(Product $_product) {
        echo '<div class="card">';
        echo '<img class="card-img-top" src="' . $_product->getImg() . '" alt="' . $_product->getName() . '">';
        echo '<h2 class="card-title">' . $_product->getName() . '</h2>';
        echo '<p>Prezzo: ' . $_product->getPrice() . ' €</p>';
        echo '<p> Categoria: ' . $_product->getCategory()->getName() . '</p>';
        echo '<p>Tipo: ' . $_product->getTipo() . '</p>';
        echo '</div>';
    }
}