<?php 

class Food extends Product{
    public $meat;
    public $kg;

    function __construct (String $meat, Float $kg){
        parent::__construct(String $name, String $image, String $price, String $category);
        $this->meat = $meat;
        $this->kg = $kg;
    }

}

?>