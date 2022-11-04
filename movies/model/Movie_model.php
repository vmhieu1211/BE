<?php 
if (!defined('APP_PATH')){
    die('ban khong co quyen truy cap');
}
// noi minh se dung curl php call sang api
function searchMovieByName($nameMovie=''){
    $urlApi = "https://api.themoviedb.org/3/search/movie?query={$nameMovie}&api_key=cfe422613b250f702980a3bbf9e90716&page=1";
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