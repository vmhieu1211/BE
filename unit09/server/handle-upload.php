<?php
define('PATH_UPLOAD_FILE','../uploads/');
function changeNameFile($nameFile = null){
    if($nameFile == null){
        return false;
    }
    $arrNameFile = explode('.', $nameFile);
    $extension =is_array($arrNameFile) ? end($arrNameFile) : null;
    if($extension === null){
        return false;
    }
    $file = rand(5, 15).time();
    return $file.".".$extension;
    //tao ngau nhien ten khong trung lap
}

function checkFileSize($sizeFile = null){
    if($_FILES['upload']['size'] > 1000){
        echo "File qua lon khong the tai len";
    }

    return true;
}




function checkTypeFile($typeFile = null){
    if($typeFile === null){
        return false;
    }
    $allowTypeFiles = ['image/jpeg','image/jpg','image/png'];
    return in_array($typeFile,$allowTypeFiles);
}


function uploadFile(){
    if(isset($_POST['btnUpload'])){
        // muốn nhận được thông tin file từ client gửi lên
        //dùng biến super global $_FILES
        //$_FILES: là biến kiểu mảng chứa thông tin file gửi lên   
        //kiểm tra xem người dùng có upload file lên không    
        if(!empty($_FILES['upload'])){
            $tmpName = $_FILES['upload']['tmp_name'];
            $nameFile= $_FILES['upload']['name'];
            $nameFile = changeNameFile($nameFile);
            //var_dump($nameFile);die;
            $typeFile = $_FILES['upload']['type'];
            if(checkTypeFile($typeFile)){

                $up = move_uploaded_file($tmpName,PATH_UPLOAD_FILE.$nameFile);
                if($up){
                    header("Location:../upload.php?state=ok&img={$nameFile}");
                }
                else{
                    header("Location:../upload.php?state=error");
                }
            }
            else{
                //nguoi dung up file khong dung dinh dang
                header("Location:../upload.php?state=error_type");
            }
            
        }
    }

}
uploadFile();
