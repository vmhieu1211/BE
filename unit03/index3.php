<?php
declare(strict_types=1); // giúp phát hiện các lỗi cú pháp theo chuẩn phiên bản php 7 trở lên

function kiemTra(int $n) : bool{
    $m = sqrt($n);
    if(filter_var($m, FILTER_VALIDATE_INT)){
        return true;
    }
    return false;
}

echo "</br>";
$number = 9;
if(kiemTra($number)){
    echo "{$number} la so chinh phuong";
}
else{
    echo "{$number} khong phai la so chinh phuong";
}


function check(int $i,int $j) : int {
    $count = 0;
    for ($k = $i; $k <= $j; $k++){
        if(kiemTra($k)){
            $count += 1;
        }
    }
    return $count;
}
echo "</br>";
echo check(1,100);
echo"</br>";