<?php
// Các kiến thức về chuỗi PHP
// chuỗi được khai báo trong nháy đơn hoặc nháy kép 
// dùng nháy kép thì sử dụng biến trong chuỗi được - nháy đơn thì không

$time = "18h30";
$string = "dang học php co ban vao luc {$time}";

//echo $string;   

$myString = "Hoc \"php\" "; //** */
$myString2 = 'Hoc "php"';
echo $myString;

$script = "<script> alert('hello')</script>";
$script2 = htmlentities($script);
$script3 = html_entity_decode($script2);
//echo htmlentities($script);
//echo $script3;   //$script3 == $script

$string2 = "dang hoc js";
$newstr = str_replace('js', 'php', $string2); // thay thế kí tự nằm trong chuỗi
//echo $string2 . "--" .$newstr;// . toán tử ghép chuỗi

$title = "<h1> Ngay mai la <em>Trung thu</em></h1>";
//echo strip_tags($title,'<em>');
echo "</br>";

if (strpos($newstr, 'php') !== false) {
    // tim kiem ki tu trong chuoi
    echo "oke";
}

$title2 = "       sap duoc nghi roi";
echo "</br>";
echo ltrim($title2);
echo "</br>";
echo rtrim($title2,'roi'); // không truyền tham số thứ 2 thì mặc định hiểu là khoảng trắng

