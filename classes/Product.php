<?php 

class Product {
    public $name;
    public $image;
    public $price;
    public $category;

    function __construct (String $name, String $image, String $price, String $category){
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
    }

}

?>