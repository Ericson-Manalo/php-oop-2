<?php 
include_once __DIR__ . '/Product.php';

class Food extends Product{
    public $meat;
    public $kg;


    public function __construct ( $name,  $image,  $price,  $category,  $article, $meat,  $kg){
        parent::__construct( $name,  $image,  $price,  $category,  $article);
        $this->meat = $meat;
        $this->kg = $kg;
    }

}

?>