<?php
require 'helper.php';
if(ifRedirectDefaultPage()){
    header('Location:home.php');
    exit();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="server/handle-login.php" method="post">
            <div>
                <label for="username">username</label>
                <input type="text" name="username" id="username"/>
            </div>
            <div>
                <label for="password">password</label>
                <input type="password" name="password" id="password"/>
            </div>
            <button type="submit" name="btnLogin">Login</button>
        </form>
    </div>
</body>
</html>