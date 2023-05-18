<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Store.php';
require_once __DIR__ . '/Model.php';
require_once __DIR__ . '/Food.php';
require_once __DIR__ . '/Toys.php';
require_once __DIR__ . '/Category.php';

$store = new Store();
$dog = new Category('Cane');
$cat = new Category('Gatto');
try {
    $store->addProduct(new Food('Croccantini gatto', 'https://www.cicalia.com/it/img/imgproducts/17563/l_17563.jpg', -12.50, $cat));
} catch(Exception $err) {
    echo $err->getMessage();
}
$store->addProduct(new Food('Croccantini', 'https://www.gardenbedettishop.com/14348-large_default/crocchette-per-cani-prolife-sensitive-grain-free-sensitive-manzo-e-patate-adult-mediumlarge-nutrigenomic-10-kg.jpg', 12.50, $dog));
$store->addProduct(new Food('Croccantini', 'https://www.cicalia.com/it/img/imgproducts/17563/l_17563.jpg', 12.50, $cat));
$store->addProduct(new Toys('Palla sonaglio', 'https://ss-pics.s3.eu-west-1.amazonaws.com/files/1795885/large-trixie-gatto-gioco-set-di-palline-in-juta-3-pezzi-5-cm.jpg?1613754410', 5.99, $cat));
$store->addProduct(new Model('Cuccia per cane', 'https://m.media-amazon.com/images/I/81mTYtNJ0dL._AC_SX425_.jpg', 125.99, $dog));

$dogsProduct = $store->getProductsByCategory($dog);


$catsProduct = $store->getProductsByCategory($cat);

?>