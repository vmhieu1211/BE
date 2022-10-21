<?php
 session_start();
 //xoa session
 if(!empty($_SESSION['name'])){
    unset($_SESSION['name']);
 }
 header("Location:session02.php");
?>