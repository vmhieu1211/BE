<?php
// các kiến thức xử lý thời gian
// gọi nó ra trước các hàm xử lý về tgian
// date_default_timezone_set('Asia/Ho_Chi_Minh');
$date = date('Y-m-d H:i'); // định dạng ngày tháng năm cần hiển thị
$year = date('Y'); //Y: full year; y: 2 số cuối
$month = date('m');
$day = date('d');
//M,D: chữ
//m,d: số
$today = date('Y-m-d');
$yesterday ='2022-09-27';
// so sánh ngày nào lớn hơn 
$timeToday = strtotime($today);
$timeYesterday = strtotime($yesterday);
if($timeToday > $timeYesterday){}
$nextweek =date('Y-m-d',strtotime('-3 week'));
$convertDate =date('Y-m-d H:i:s',$timeToday);
// echo $convertDate;
$addTime = mktime(0,0,0,9,28+12,2022);
// echo date('Y-m-d',$addTime);
if(checkdate(1,29,2022)){
    echo 'ok';
}



