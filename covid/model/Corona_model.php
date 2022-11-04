<?php 
if (!defined('APP_PATH')){
    die('ban khong co quyen truy cap');
}
// noi minh se dung curl php call sang api
function getDataVirusCorona(){
    $urlApi = "https://api.covid19api.com/summary";
    //sử dụng CURL call api


    // create curl resource
    $ch = curl_init();
     // set url (truy cap vao url)
    curl_setopt($ch, CURLOPT_URL, $urlApi);
    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // $output contains the output string
    $output = curl_exec($ch);
    // close curl resource to free up system resources
    curl_close($ch);
    $data =[];
    if(!empty($output)){
        $data = json_decode($output,true);//convert chuoi json ve mang
    }
    return $data;
}   