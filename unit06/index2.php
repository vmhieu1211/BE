<?php
//các kiên thức về file trong php
//1-mở file
$file = fopen('data/user.txt','a+');
if($file){
    // echo "ban mo file thanh cong";
    $data = fread($file,filesize('data/user.txt'));
    $content = 'Dang hoc php co ban';
    fwrite($file,$content);
    $file2 = fopen('data/user.txt','r');
    $data2 = fread($file2,filesize('data/user.txt'));
    fclose($file);
    fclose($file2);
    echo $data2;

}
else{
    echo "khong mo duoc file";
}