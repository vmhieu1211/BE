<?php
//khong duoc phep truy cap thang truc tiep va o day
//moi ung dung deu phai chay qua file root index.php

if (!defined('APP_PATH')){
    die('ban khong co quyen truy cap');
}

// load model vao controller
require 'model/Movie_model.php';


$method = strtolower($_GET['m'] ?? 'movie');
switch($method){
    case 'movie':
        Movie();
        break;
    case 'search':
        Search();
        break;
    }

function Search(){
    $nameMovie =strip_tags($_POST['name'] ?? '');
    $nameMovie =urldecode($nameMovie);
    $dataSearch =[];
    if(!empty($nameMovie)){
        $dataSearch = searchMovieByName($nameMovie);
    }
    require 'view/search_view.php';
}



function Movie(){
    //goi view
    require 'view/movie_view.php';

}