<?php
//get data cookie
// sử dụng biến super global $_COOKIE
// $_COOKIE: biến kiểu mảng 
$myCookie = $_COOKIE['t3h'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data Cookie</title>
</head>
<body>
    <h1>Data Cookie: <?=$myCookie;?></h1>
    <a href="index3.php">remove cookie</a>

</body>
</html>