<?php

include __DIR__ . "/categories.php";

class Products {
    
  public $name;
  public $price;
  public $category;
  public $poster;

  function __construct($_name, $_price,$_poster, Categories $_category) {
    $this->name = $_name;
    $this->price = $_price;
    $this->poster = $_poster;
    $this->category = $_category;
}
 public function takeAll(){
    return  $this->name;
    $this->price;
    $this->poster;
    $this->category;

 }
}