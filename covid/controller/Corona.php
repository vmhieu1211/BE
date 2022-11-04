<?php
if(!defined('APP_PATH')){
    die('can not access');
}
require 'model/Corona_model.php';
$method=strtolower($_GET['m'] ?? 'index');
switch($method){
    case 'index':
        Index();
        break;
}
function Index(){
    $virus=getDataVirusCorona();
    $global = $virus['Global'] ?? [];
    $countries = $virus['Countries'] ?? [];
    //su dung global va $countries hien thi du lieu ngoai view
    
    
    require 'view/index_view.php';
}