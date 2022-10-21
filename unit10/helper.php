<?php
// kiem tra xem session da start chua

if(session_status() === PHP_SESSION_NONE){
    //PHP_SESSION_NONE: hang so kiem tra xem session da start chua
    session_start();
}


function ifRedirectLogin(){
    $sessionUser  = $_SESSION['username'] ?? null;
    if($sessionUser === null){
        //chua login
        return false;
    }
    return true;

}
function ifRedirectDefaultPage(){
    return $_SESSION['username'] ?? null;
}
