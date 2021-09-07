<?php 
 
    require_once('animals.php');
    class Eshop{

        public $name;

        public $address;

        public $products = [];

        public function addProduct(Product $nameProduct) {
            $this->products[] = $nameProduct;
        }
    }

 
?>