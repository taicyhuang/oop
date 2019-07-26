<?php

class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price = 0;

    public function __contruct(
        $title,
        $firstName,
        $mainName,
        $price
    ) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }
}

$product1 = new ShopProduct();
$product1->title = 'My Antonia';
$product1->producerMainName = 'Cather';
$product1->producerFirstName = 'Willa';
$product1->price = '5.99';

var_dump($product1);
