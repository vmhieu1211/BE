<?php
define('PATH_UPLOAD_FILE','../uploads/');
function uploadFile(){
    if(isset($_POST['btnUpload'])){
        $size = getimagesize($_FILES['upload']['name']);//
        if(!empty($_FILES['upload'])){
            foreach($_FILES['upload']['name'] as $key => $val){
                $tmp = $_FILES['upload']['tmp_name'][$key];
                $name = $_FILES['upload']['name'][$key];
                $check = move_uploaded_file($tmp,'../uploads/'.$name);
                if(!$check){
                    break;
                }
            }
            if($check){
                header("Location:../multi-upload.php?state=ok");
            }
            else{
                header("Location:../multi-upload.php?state=error&img");
            }

        }
        echo $size;
        
    }
}
uploadFile();