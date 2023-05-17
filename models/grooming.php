<?php 

include __DIR__ . "/products.php"; 

class Grooming extends Products {
    public $type;
    public $hairType;
    public $color;
    public $shape;

    function __construct($_type, $_hairType)
    {
        $this->type = $_type;
        $this->hairType = $_hairType;
    }
}