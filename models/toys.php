<?php 

class Toys extends Products {
    public $material;
    public $use;


    function __construct($_name, $_price, $_poster, Categories $_category,$_material, $_use)
    {
        parent::__construct($_name, $_price,$_poster, $_category);
        $this->material = $_material;
        $this->use = $_use;
    }
    
}
