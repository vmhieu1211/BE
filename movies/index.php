<?php
define('APP_PATH', 'index.php');
if(file_exists('controller/Movie.php')){
    require 'controller/Movie.php';
}else{
    echo "He thong dang bao tri";
}