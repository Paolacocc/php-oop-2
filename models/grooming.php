<?php 


class Grooming extends Products {
    public $type;
    public $hairType;
    public $color;
    public $shape;

    function __construct($_name, $_price,$_poster, Categories $_category, $_type, $_hairType)
    {
        parent::__construct($_name, $_price,$_poster,$_category);
        $this->type = $_type;
        $this->hairType = $_hairType;
    }
}