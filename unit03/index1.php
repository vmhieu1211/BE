<?php
declare(strict_types=1); // giúp phát hiện các lỗi cú pháp theo chuẩn phiên bản php 7 trở lên

//tiếp tục các kiến thức về hàm trong php
//truyền tham số theo kiểu thám chiếu - tham trị trong hàm php

//1- tham trị: tham số truyền vào hàm không bị thay đổi theo logic trong hàm
$n = 10;
function test($number){
    //truyền tham số theo kiểu tham trị
    $number += 10;
    return $number;
}
echo test($n);
echo "</br>";
echo $n; //kết quả vẫn như ban đầu so với trước khi truyền vào hàm 

//2- tham chiếu - tham biến: tham số truyền vào hàm sẽ  bị thay đổi theo logic trong hàm
$m = 10;
function demo(&$number){
        //truyền biến vào hàm theo kiểu tham chiếu 
        //có ký tự & đứng trước tên biến
        $number += 30;
        return $number;
}
echo "</br>";
echo demo($m);
echo "</br>";
echo $m;

// biến static trong function php
// sử dụng từ khóa static khai báo biến trong hàm


function testStatic(){
    static $count = 0;
    $count++;
    echo $count;

}
echo "</br>";
testStatic();
echo "</br>";
testStatic();
echo "</br>";
testStatic();
//** STATIC lưu lại giá trị của biến mỗi khi gọi hàm */

//Định nghĩa hàm theo chuẩn của PHP 7 trở lên
function tongHaiSo(int $a, int $b): float {
    // :int  : yêu cầu phải trả kết quả về là kiểu int
    // int $a: là tham số truyền vào hàm bắt buộc phải là kiểu int

    return $a + $b;
}
echo "</br>";
echo tongHaiSo(1,2);
//viết hàm theo chuẩn php 7: kiểm tra 1 số có phải là số chính phương không

function kiemTra(int $n) : bool {
    // tim dc gia can bac hai cua so can kiem tra
    $m = sqrt($n); //float
    //var_dump($m);die;
    // $m : co phai la so nguyen ko ?
    if(filter_var($m, FILTER_VALIDATE_INT)){
    return true;
    }
    return false;
}
echo "</br>";
$number = 80;
if(kiemTra($number)){
    echo "{$number} la so chinh phuong";
}
else{
    echo "{$number} khong la so chinh phuong";
}

// viết hàm cho biết từ 1 - 100 có bao nhiêu số chính phương??
function check(int $i, int $j): int {
    $count = 0;
    for($k = $i; $k <= $j; $k++){
        if(kiemTra($k)){
        $count += 1;
    }
}
return $count;
}
echo "</br>";
echo check(1,100);
echo"</br>";

    //***************************************************
    // lamda function
    // hàm khong có tên và đại diện thông qua 1 biến
    $kiemTraCL = function(int $n) : bool{
        return $n % 2 == 0;
    };
    
    if($kiemTraCL(2)){
        echo "so chan";
        
    }
    else{
        echo "so le";
    }

    echo "</br>";
     $d = 10;
     // lamda closures
     
    $sumNumber = function(int $a, int $b) use($d) : int {
        //global $d;
        return $a + $b + $d;
        
    };
    echo $sumNumber(1,2);