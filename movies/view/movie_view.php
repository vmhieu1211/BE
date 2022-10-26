<?php
if (!defined('APP_PATH')){
    die('ban khong co quyen truy cap');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim kiem phim</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-md-6 offset-3">
                <h1 class="text-center mb-2">Tim kiem phim</h1>
                <p>name: <?=$data['name'];?> </p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="nhap ten bo phim">
                        <button class="input-group-text btn btn-primary" id="js-search">Tim kiem</button>
            </div>
        </div>
    </div>
</body>
</html>
