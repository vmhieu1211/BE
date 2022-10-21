<?php
//nhận các dữ liệu từ index1 gửi lên bằng method GET
//sử dụng 1 biến super global
// $_GET: là một biến kiểu mảng chứa tất cả dữ liệu method GET gửi lên
echo '<pre>';
print_r($_GET);
$id = $_GET['id'] ?? null;
$age = $_GET['age'] ?? null;
echo $id;
echo $age;

