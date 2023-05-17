<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Store.php';
require_once __DIR__ . '/models/Model.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Toys.php';
require_once __DIR__ . '/models/Category.php';

$store = new Store();
$dog = new Category('Cane');
$cat = new Category('Gatto');
$store->addProduct(new Food('Croccantini', 12.50, $dog));
$store->addProduct(new Food('Croccantini', 12.50, $cat));
$store->addProduct(new Toys('Palla sonaglio', 5.99, $cat));
$store->addProduct(new Model('Cuccia per cane', 25.99, $dog));


$dogsProduct = $store->getProductsByCategory($dog);


$catsProduct = $store->getProductsByCategory($cat);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <?php foreach ($catsProduct as $product) {
        $store->getCardProduct($product);
    }?>
    <?php foreach ($dogsProduct as $product) {
        $store->getCardProduct($product);
    }?>
</body>
</html>
