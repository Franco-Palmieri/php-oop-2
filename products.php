<?php 
   class Product{

    public $price;
    public $type;
    
    public function getType() {
        return $this->type;
    }

}

class SportProduct extends Product{

    public function __construct(){
        $this->price = 10;
        $this->type = 'ball';
    }

}

class HouseProduct extends Product{
    public function __construct(){
        $this->price = 30;
        $this->type = 'window';
    }
}

class Teachproduct extends Product{
    public function __construct(){
        $this->price = 40;
        $this->type = 'pc';
    }
}