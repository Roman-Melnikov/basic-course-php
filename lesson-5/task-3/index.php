<?php

require_once 'Product.php';
require_once 'Cart.php';

$tv = new Product('Телевизор', 20000, null);
$computer = new Product('Компьютер', null, ['Системный блок' => 35000, 'Монитор' => 15000]);

$cart = new Cart();

$cart->addProduct($tv);
$cart->addProduct($computer, 2);

print_r($cart);

$cart->removeProduct($computer);

print_r($cart);