<?php
// echo '<pre>';
// print_r($_GET);
// nếu nhận dữ liệu từ form hoặc input nhận thuộc tính name


if(isset($_GET['btnSend'])){
    $username = $_GET['username'] ?? '';
    echo $username;
}