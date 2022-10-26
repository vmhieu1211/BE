<?php
//khong duoc phep truy cap thang truc tiep va o day
//moi ung dung deu phai chay qua file root index.php

if (!defined('APP_PATH')){
    die('ban khong co quyen truy cap');
}
// load model vao controller
require 'model/Movie_model.php';

function Movie(){
    //gọi dữ liệu từ model ra
    $data = searchMovieByName();
    //goi view
    require 'view/movie_view.php';


}
Movie();