<?php 

class Toy extends Product{
    public $type;

    function __construct ($name,  $image,  $price,  $category,  $article, $type){
        parent::__construct($name, $image, $price, $category, $article);
        $this->type = $type;
    }

}

?>