<?php 

class Kennel extends Product {
    public $material;

    function __construct (String $material){
        parent::__construct(String $name, String $image, String $price, String $category);
        $this->material = $material;
    }

}

?>