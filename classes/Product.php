<?php 

class Product {
    public $food;
    public $toy;
    public $kennel;
    public $category;

    function __construct (String $food, String $toy, String $kennel, String $category){
        $this->food = $food;
        $this->toy = $toy;
        $this->kennel = $kennel;
        $this->category = $category;
    }

}

?>