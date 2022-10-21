<?php
// các mệnh đề điều kiện và vòng lặp cơ bản trong php
$a = 8;
if($a > 9){
    echo "ok";
}
else{
    echo "error";
}

//if....else lồng nhau
if($a >15){
    //do something
} elseif($a >14){
    //do something
} elseif($a>1){
    echo "done";
}elseif($a>5){
    echo "ok";
}
else {
    //do something
}



//switch...case so sánh =
//nếu chỉ so sánh bằng thì dùng switch...case tốt hơn


$month = 9;
switch($month){
    case 1:
        //do something
        break;
    case 2:
        //do something
        break;
    case 9:
        //do something
        break;
    case 12:
            //do something
            break;
        default:
        //do something
        break;
}


//các vòng lặp cơ bản
//1-for...
echo "</br>";
for ($i =1;$i <= 10;$i++){
    if($i % 2 ==0){  
    echo $i;
}
}

//2-while() kiểm trả đk trước
echo "</br>";
$j = 1;
while($j <=10){
    echo $j;
   $j++;
}

//3-do...while kiểm tra đk sau

echo "</br>";
$v =1;
do{
    if($v % 2 !== 0){
        echo $v; 
    }
    $v++;
    
} while ($v <= 10);


echo "</br>";
$n = 10;
$m = 20;
$n += $m;// $n = $n + $m
echo $n;

echo "</br>";
$t = 9;

$u = 10;

$s =(++$u)+ ($t++) - ($u++) + (++$t) - ($u--)+ (--$t);
//    11  +   9    -   11   +   11   -   12  +   10;

echo $s;


