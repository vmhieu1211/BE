<?php
define('APP_PATH', 'index.php');
if(file_exists('controller/Corona.php')){
    require 'controller/Corona.php';
}else{
    echo "He thong dang bao tri";
}