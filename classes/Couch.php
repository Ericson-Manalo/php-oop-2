<?php 

class Couch extends Product {
    public $material;

    function __construct ($name,  $image,  $price,  $category,  $article, $material){
        parent::__construct( $name,  $image,  $price,  $category,  $article);
        $this->material = $material;
    }

}

?>