<?php 

class Food extends Products {
    public $weight;
    public $taste;
    
    function __construct($_name, $_price,$_poster, Categories $_category,$_weight, $_taste)
    {
        parent::__construct($_name, $_price,$_poster,$_category);
        $this->weight = $_weight;
        $this->taste = $_taste;
    }

}