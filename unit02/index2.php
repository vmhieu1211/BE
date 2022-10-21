<?php
// Hàm trong PHP
// 1- Định nghĩa hàm theo tiêu chuẩn cho mọi phiên bản PHP
$c = 10; //  là biến toàn cục khi không nằm trong Hàm

function tognHaiSo($n,$m = 5){

    global $c;
    $d = 6; // là biến cục bộ chỉ sử dụng nội bộ trong hàm;
    return $n + $m + $d + $c;
    //function: từ khóa phải viết đúng 100%

    //tongHaiSo: tên hàm ( do LTV tự định nghĩa - không trung với các tên hàm mà php đã định nghĩa sẵn)

    //$n,$m: tham số hình thức truyền vào hàm( không bắt buộc lúc nào cũng phải có tham sô)

    //return: từ khóa - trả kết quả về cho tham số và thoát khỏi hàm ( những câu lệnh bên dưới từ khóa return sẽ không được thực thi nữa)
}

//sử dụng Hàm

$kq = tognHaiSo(2,3); // 2,3 là tham số thực(thật);

echo $kq;
echo "</br>";


//function declaration;
function b(){
    $a = a(); // gọi hàm trong hàm
    return $a;
}  
echo b();
function a(){
    return 1;
}


// viết hàm kiểm tra số nguyên tố

function checkPrime($n){
    if ($n <= 1){
        return false;
    }
    //$flag = true;
    for($i =2;$i <= sqrt($n);$i++){
        if($n % $i ===0){
            return false;
            //$flag = false;
            break;  
        }
    }
    //return $flag;
    return true;

}
