<?php
//khong duoc phep truy cap thang truc tiep va o day
//moi ung dung deu phai chay qua file root index.php

if (!defined('APP_PATH')){
    die('ban khong co quyen truy cap vao controller');
}

function Movie(){

    //goi view
    require 'view/movie_view.php';


}
Movie();