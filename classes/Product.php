<?php 

class Product {
    public $name;
    public $image;
    public $price;
    public $category;
    public $article;

    function __construct ($name, $image, $price, $category, $article){
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
        $this->article = $article;
    }

}

?>