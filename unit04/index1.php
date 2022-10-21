<?php
declare(strict_types=1);
// Các kiến thức về mảng trong PHP
// cú pháp khai báo mảng PHP

$number = array(1,2,3,4,5);
$student = ['name' => 'Teo', 'age' => 21];

// 1 - Kiểu dữ liệu : array
var_dump($number); // hiển thị cả kiểu dữ liệu và dữ liệu
echo "</br>";
echo "<pre>";
print_r(($student)); // in mảng (không in kèm kiểu dữ liệu)
/** key, index : thứ tự  */
echo "</pre>";
$fruits = ['cam', 'mit',[1,2,3],['a','b','c']];

// truy cập vào giá trị của phần tử nằm trong mảng
// cú pháp:  NameArray[key];

//echo $fruits[3][1];
//echo "</br>";
//echo $student['age'];
$arrInfoCats = [];// mảng rỗng
// bổ sung phần tử vào mảng rỗng 

//$arrInfoCats ['name'] = 'Tom';
//$arrInfoCats ['age'] = '3';
//$arrInfoCats ['color'] = 'black';

echo "<pre>";
 //print_r($arrInfoCats);

 $arrInfoCats[] = [
    'name' => 'tom', 
    'age' => 3 , 
    'color' => 'black' 
];
$arrInfoCats[] = 10;
//print_r($arrInfoCats);

$arrNumber = [1,2,3,4,5,6,7,8,9,10];
//kiểm trả số lượng phần tử nằm trong mảng
// sử dụng hàm count(NameArray)
$count = count($arrNumber);
//echo $count;
//duyệt qua các phần tử nằm trong mảng
//1 - for...
for ($i = 0; $i < $count; $i++) {

    // in ra giá trị các phần tử 
    echo $arrNumber[$i];
    echo "</br>";

}

//2 - foreach
//foreach ($arrNumber as  $item){} không truy vết giá trị của phần tử

foreach ($arrNumber as $key => $item){
        // echo "index: {$key} - value: {$item}";
        // echo "</br>";
        //in ra các số lẻ
        if($item % 2 !== 0)
        echo  $item;
        echo "</br>";
}
$arrNumber2 = [10,2,3,4,50,6,7,8,9,1];
// viết hàm tìm giá trị nhỏ nhất trong mảng
function in($arr){
    $first = $arr[0];// để so sánh với tất cả các phần tử trong mảng
    $count = count($arr);
    for($i = 0;$i < $count;$i++){
        if($first > $arr[$i]){
            $first = $arr[$i];
        }  
    } 
    return $first;
    }
$kq = in($arrNumber2);
echo $kq;

$years = [2016,2017,2018,2019,2020,2021,2022];
//viết hàm tính tổng các năm nhuận dương lịch trong mảng
function kiemTraNamNhuanDL($year){
    if($year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0) ){
        return true;
    }
    return false;
}
function tinhTongNamNhuanDL($arrYear){
    $count = count($arrYear);
    $sum = 0;
    for($i = 0; $i < $count; $i++){
        if(kiemTraNamNhuanDL($arrYear[$i])){
            $sum += $arrYear[$i];
        }
    }
    return $sum;
}

$kq2 = tinhTongNamNhuanDL($years);
echo $kq2;
