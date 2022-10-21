<?php

function mySendMail(){
    if(isset($_POST['btnSendMail'])){
        $title = $_POST['title'] ?? null;
        $email = $_POST['email'] ?? null;
        $content = $_POST['content'] ?? null;
        if(
            !empty($title) && !empty($content) && filter_var($email,FILTER_VALIDATE_EMAIL)
        ){
            //tien hanh send mai
            $header = "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n"; 
            $send = mail($email,$title,$content,$header);
            if($send){
                header("Location:../sendmail.php?state=success");
                exit();
            
            }else{
                header("Location:../sendmail.php?state=error");
                exit();
            }
        } else{
            //bao loi-khong cho gui mail
            header("Location:../sendmail.php?state=fail");
        }

    }
}