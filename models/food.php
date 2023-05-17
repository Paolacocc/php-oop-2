<?php 

include __DIR__ . "/products.php"; 

class Food extends Products {
    public $weight;
    public $taste;
    
    function __construct($_weight, $_taste)
    {
        $this->weight = $_weight;
        $this->taste = $_taste;
    }

}