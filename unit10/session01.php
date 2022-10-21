<?php
//khoi dong session
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khoi tao session</title>
</head>
<body>
    <?php
    //tao session va gan gia tri
        $_SESSION['email']='test@example';
        $_SESSION['name'] ='TEO';
    ?>
    <h1>tao session va gan gia tri</h1>
    <a href="session02.php">lay gia tri cua session</a>
</body>
</html>