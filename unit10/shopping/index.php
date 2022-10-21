<?php
require 'data/productions.php';
$listProducts = getDataProductions();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" />
    <title>List productions</title>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-3" >Danh sach san pham</h1>
                <div class="row">
                    <?php foreach($listProducts as $key => $item):?>
                    <div class="col-md-3">
                        <div class="card" >
                            <img src="<?= $item['image']?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item['name']?></h5>
                                <p class="card-text">Gia: <?= $item['price']?></p>
                                <a href="cart.php?id=<?= $item['id'];?>&m=add" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</body>
</html>