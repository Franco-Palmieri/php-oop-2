<?php 
   class Product{

    public $price;

}

class SportProduct extends Product{

    public function __construct(){
        $this->price = 10;
    }

}

class HouseProduct extends Product{
    public function __construct(){
        $this->price = 30;
    }
}

class Teachproduct extends Product{
    public function __construct(){
        $this->price = 40;
    }
}