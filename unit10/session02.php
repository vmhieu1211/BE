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
    <title>lay gia tri cua session</title>
</head>
<body>
    <?php
        $name = $_SESSION['name'] ?? null;
        $email = $_SESSION['email'] ?? null;
    ?>
    <h1>name: <?= $name;?> - email: <?=$email?></h1>
    <a href="session03.php">xoa session</a>
</body>
</html>