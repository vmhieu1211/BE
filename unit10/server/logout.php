<?php
session_start();
if(isset($_POST['btnLogout'])){
    if(!empty($_SESSION['username'])){
        unset($_SESSION['username']);
    }
    header("Location:../login.php");
}