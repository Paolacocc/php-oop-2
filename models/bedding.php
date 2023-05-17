<?php 

class Bedding extends Products{
    public $size;
    public $type;

    function __construct($_name, $_price,$_poster, Categories $_category,$_size,$_type)
    {
        parent::__construct($_name, $_price,$_poster,$_category);
        $this->size =$_size;
        $this->type =$_type;
    }

    
}