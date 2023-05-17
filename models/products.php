<?php

include __DIR__ . "/categories.php";

class Products {
    
  public $name;
  public $price;
  public $category;

  function __construct($_name, $_price, Categories $_category) {
    $this->name = $_name;
    $this->price = $_price;
    $this->category = $_category;
}

}