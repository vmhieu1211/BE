<?php
if(!defined('APP_PATH')){
    die('can not access');
}
$method=strtolower($_GET['m'] ?? 'index');
switch($method){
    case 'index':
        Index();
        break;
}
function Index(){
    require 'view/index_view.php';
}