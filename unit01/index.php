<?php
//echo "<h1> hi you </h1>";
$myName = "hieu";
//$ : ky tu cu phap buoc phai co
// mot bien duoc goi la hop le:
// khong co khoang trang giua ky tu $ va ten bien
//$ myAge = 10;//sai
//ten bien khong duoc phep bat dau bang chu so 
// $1myEmail ='kjasdja@gmail.com // sai

// cach dinh nghia hang so
define('PI' ,3.14);
//PI = 3.15; //khong duoc phep thay doi gia tri cua hang so;
// *hang so khong co ki tu $ dung truoc;
echo PI;


const AGE =20;
// co the dung trong class, con define khong dung duoc trong class;
echo AGE;

//lam quen cac kieu du lieu co ban
//1-int
$a = 10; //gia tri la 1 so nguyen;
echo"<br/>";
echo gettype($a);

//2-float
$b = 31.4;
echo "<br/>";
echo gettype($b);

//3-booleans
$checking = true;
echo "<br/>";
echo gettype($checking);

//4-string
$title = 'sap duoc nghi roi';//duoc dat trong nhay don hoac nhay kep => string;
echo "<br/>";
echo gettype($title);

//5-number string: trong chuoi chi chua nhung con so
$phone = '0963077286';
echo "<br/>";
echo gettype($phone);
echo "<br/>";

$n1 = 10;
$n2 = '10a';

$n3 =$n1 + $n2;
echo $n3;
echo "<br/>";
echo gettype($n3);
// * trong php noi chuoi la dau .



