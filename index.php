<?php

include_once __DIR__ . "/models/products.php";
include_once __DIR__ . "/models/food.php";
include_once __DIR__ . "/models/categories.php";
include_once __DIR__ . "/models/toys.php";
include_once __DIR__ . "/models/bedding.php";
include_once __DIR__ . "/models/grooming.php";
include_once __DIR__ . "/models/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center m-4">Animal products</h1>

    <div class="container d-flex flex-wrap gap-4 mb-4" >
    <?php foreach ($animals_products as $product) {?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $product->poster ?>" class="card-img" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $product->name ?></h5>
                <p class="card-text"></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $product->price ?></li>
                <li class="list-group-item"><?php echo $product->category->category ?></li>
                
            </ul>
    
        </div>
        <?php }; ?>
    </div>

</body>

</html>