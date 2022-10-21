<?php


if (isset($_POST['btnLogin'])) {
    $username = trim(strip_tags(($_POST)['username']) ?? '');
    $password = trim(strip_tags(($_POST)['password']) ?? '');

    //kiểm tra tính hợp lệ của dữ liệu
    if(empty($username) || empty($password)){
        header('Location:../index2.php?state=error');
    exit(); }

   
    if(checkUserLogin($username,$password)){
        //đăng nhập thành công 
        //chuyển trang - về trang home.php
   
    header('Location:../home.php');
    exit();

}
        //không thành công
        // quay lại về đúng trang đăng nhập
        header('Location:../index2.php?state=failure');
}




function checkUserLogin($username,$password){
    $data = readData('../database/data.txt');
    //so sánh với dữ liệu người dùng gửi lên
    $match = "{$username}/{$password}";
    $arr = explode(';',$data);
    return in_array($match,$arr);
}
function readData($path)
{

    if (empty($path)) {

        return null;
    }
    $file = fopen($path, 'r');
    if ($file) {
        $data = fread($file, filesize($path));
        return $data;
    }
    return null;
}

