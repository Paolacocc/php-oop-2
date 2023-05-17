<?php 

include __DIR__ . "/products.php"; 

class Toys extends Products {
    public $material;
    public $use;


    function __construct($_material, $_use)
    {
        $this->material = $_material;
        $this->use - $_use;
    }
    
}