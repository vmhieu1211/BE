<?php
// tiếp các kiến thức xử lý file
// các hàm có sẵn hỗ trợ xử lý file
// ktra xem 1 file có tồn tại
if(file_exists('data/user.txt')){
    echo 'File có tồn tại';
}
echo "</br>";

//kiểm tra xem file có được cấp quyền ghi dữ liệu
if(is_writable('data/user.txt')){
    // echo 'file được phép ghi dữ liệu';
    //ghi nội dung vào file - không cần dùng fwrite
    file_put_contents('data/user.txt','dang học php');
}

// đổi tên file
if(file_exists('data/log.txt')){
    // echo 'File có tồn tại';
    // rename('data/user.txt','data/log.txt');
    // echo 'đổi thành công';

    // copy file
    // copy('data/log.txt','data/test.txt');
    // echo 'Copy thành công';
if(file_exists('data/log.txt')){
    
//     unlink('data/test.txt');
//     echo 'Xóa file thành công';
 }
}
echo "</br>";


//kiểm tra folder có tồn tại không
if(!is_dir('data/sql')){
    mkdir('data/sql');
}



