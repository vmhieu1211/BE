<?php 
// Các hàm bổ trợ trong mảng php (có sẵn)
$student =['NAME' => 'Teo','age'=> 21];
$newSt = array_change_key_case($student, CASE_UPPER);
echo '<pre>';
//print_r($newSt);

$number =[1,2,3,1,2,1,2];
$newNb = array_count_values($number);
//print_r($newNb);
array_push($number,5); // thêm phần tử vào cuối mảng ** tác động trực tiếp vào mảng ban đầu
//print_r($number);
$lastEl = array_pop($number);
echo $lastEl;
echo '</br>';
// print_r($number);
array_unshift($number,$lastEl);
//  print_r($number);
$firstEl = array_shift($number);
// echo  $firstEl;
// print_r($number);
$arrNumber = [1,2,3,4,5,6,7,8,9];
$newArr = array_chunk($arrNumber,2);    
// print_r($newArr);
if(is_array($newArr)){
    echo "ok";
}
echo "<br>";
if(in_array('6',$arrNumber)){
    echo "YES";
}
echo "<br>";
if (array_key_exists('age', $student)){
    echo 1;
}

$arrUnique =[1,1,2,2,3,4,3,5];
$newArrUnique = array_unique($arrUnique);
echo "<br>";
// print_r($newArrUnique);
$newStudent = array_values($student);
// print_r($newStudent);
$sum = array_sum($newArrUnique);
echo $sum;
echo "</br>";
$newChildArr = array_slice($arrUnique,-2,3,true);
// print_r($newChildArr);
array_splice($arrUnique,2,2,[100,200]); // thay thế trực tiếp vào mảng ban đầu
// print_r($arrUnique);

// viết hàm xử lý : lấy mã id của link bài viết trong trang vnexpress

function getIdPostFromUrl($url){
  $newUrl = explode('-',$url);
  $endEl = end($newUrl);
  return intval($endEl);
}

$url = 'https://vnexpress.net/viet-nam-vs-singapore-4514126.html';
$result = getIdPostFromUrl($url);
// print_r($result);


$randomNb = [100,200,1,3,10,5,8,2,9];
// asort($randomNb);
// arsort($randomNb);

echo '<pre>';
// print_r($randomNb);
$fruits = ['f' => 'Tao', 'a' => 'Mit', 's'=> 'Oi'];
// ksort($fruits);
// krsort($fruits);
// print_r($fruits);

//viết hàm sắp xếp mảng theo trật tự tăng hoặc giảm dần

function sapXepMang($arr){
    //1-for  
    /*
    
    $tmp = null;
    for($i=0; $i < count($arr);$i++){
        for($j = $i + 1 ;$j < count($arr);$j++){
            if($arr[$i] > $arr[$j]){
                $tmp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tmp;

            }
        }
    }
    */



    //2-foreach
$tmp = null;
foreach ($arr as $i =>$item){
    foreach($arr as $j =>$val){
        if($arr[$i] < $arr[$j]){
            $tmp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $tmp;
        }
    }
}
    return $arr;
}
print_r (sapXepMang($randomNb));
