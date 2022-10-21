<?php
function kiemTraNgaySinhNhat(){
    if(isset($_POST['btnSubmit'])){
        $birthday = $_POST['birthday'] ?? null;
        $birthday = trim(strip_tags($birthday));
    }
    //cần lấy ra ngày sinh và tháng sinh của người dùng
    $arrBirthday    = explode('-',$birthday);
    $yearBirthday   = $arrBirthday[0] ?? null;
    $monthBirthday  = $arrBirthday[1] ?? null;
    $dateBirthday   = $arrBirthday[2] ?? null;
    if(checkdate((int)$monthBirthday,(int)$dateBirthday,(int)$yearBirthday)){
        $currentYear =date('Y');
        $birthdayCurrentYear = "{$currentYear}-{$monthBirthday}-{$dateBirthday}";
        $today = date('Y-m-d');
        //so sánh today vs birthDayCurrentYear
        $timeToday = strtotime($today);
        $timeBirthday = strtotime($birthdayCurrentYear);
        if($timeBirthday < $timeToday){
            // qua sinh nhật rồi
            header("Location:../birthday.php?mess=pass&date={$birthdayCurrentYear}");
            
        }
        else if($timeBirthday == $timeToday){
            //đúng là ngày sinh nhật
            header("Location:../birthday.php?mess=happy&date={$birthdayCurrentYear}");

        }
        else{
            //chưa tới ngày sinh nhật
            //tính được còn bao nhiêu ngày 
           $day= ($timeBirthday -= $timeToday)/86400;
           header("Location:../birthday.php?mess=wait&date={$birthdayCurrentYear}&day={$day}");
   
        }
}
else{
    header("Location:../birthday.php?err=fail");
}
}
kiemTraNgaySinhNhat();