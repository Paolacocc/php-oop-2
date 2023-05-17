<?php

include_once __DIR__ . "/models/products.php";
include_once __DIR__ . "/models/food.php";
include_once __DIR__ . "/models/categories.php";

$dog_biscuits = new Food("12kg", "chicken", new Categories("dog"));

echo $dog_biscuits;