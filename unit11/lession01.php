<?php
//biểu thức chính quy 
//regular expression
$string = "phaD";
//kiem tra trong chuoi co tu php hay khong?
//xây dựng 1 regular expression kiểm tra xem trong chuỗi ban đầu có từ khóa php không
$btcq = '/php/'; // //: khai báo btcq - tất cả cú pháp nằm trong nó
// cần kiểm tra xem btcq có hoạt động với dữ liệu truyền vào hay không

//kiểm tra xem chuỗi có bắt đầu bằng ký tự php hay không?
$btcq2 = '/^php/';

//kiểm tra xem chuối có kết thúc bằng ký tự php không?
$btcq3 = '/^php$/';

//kiểm tra trong chuỗi chỉ chứa các ký tự là chữ cái và là chữ thường
$btcq4 = '/^[^0-9]{3,5}+$/'; // + :1 hoặc nhiều lần xuất hiện
//    '/^[a-z]$/'; so khớp 1 kí tự
// []: phạm vi
// {}:độ dài
/*  / ? . + *  */ // các ký tự nằm trong biểu thức chính quy

$str = "hom nay hoc php phai khong?";
$btcq5 = '/\?$/'; // kiểm tra dây hỏi có nằm cuối chuỗi không


if(preg_match($btcq5,$str,$match )){
    echo "tim thay";
    // $match : bien tuy chon (co the truyen vao hoac khong)
    //$match: trả về mảng chứa các kết quả mà btcq tìm thấy
    echo "<pre>";
    print_r($match);

}
else{
    echo "khong tim thay";
}
echo "</br>";
//kiểm tra 1 số có 3 chữ số: số thứ nhất tùy ý (không bằng không(1-9)), số thứ 2 là số lẻ , số thứ 3 là số chia hết cho 5
// 235 : hợp lệ
$number= '235';//dữ liệu cần kiểm tra
$btcq6 = '/^[1-9][1,3,5,7,9][0,5]$/';
if(preg_match($btcq6,$number,$match )){
    echo "tim thay";
    echo "<pre>";
    print_r($match);

}
else{
    echo "khong tim thay";
}
echo"<br/>";
//kiểm tra xem có phải số điện thoại của nhà mạng viettel với đàu số 09??
$phone ='0963077286';
$btcq7 ='/^[09]{2}[6-8]\d{7}$/';
if(preg_match($btcq7,$phone,$match)){
    echo "tim thay";
    echo "<pre>";
    print_r($match);

}
else{
    echo "khong tim thay";
}

// dd//mm//yyyy
// 01/02/2002
// viet bieu thuc chinh quy de kiem tra dinh dang ngay thang theo chuan VN
$date = "29/02/2022";
$checkDate ="/^(0[1-9]|1\d|2\d|3[0-1])\/(0[1-9]|1[0-2])\/([1-9]\d{3})$/";
// ?? mysql
if(preg_match($checkDate,$date,$match)){
    // echo "tim thay";
    // echo "<pre>";
    // print_r($match);
    //xử lý logic kiểm tra xem dữ liệu ngày tháng đúng hay sai


}
else{
    echo "khong dung dinh dang";
}

// ??????????????????????
// viet bieu thuc chinh quy kiem tra do manh yeu cua mat khau
// 8 ki tu tro len, it nhat 1 chu hoa thuong, it nhat 1 chu hoa ,it nhat 1 con so , it nhat 1 ky tu dac biet                          
    $password ="Vmhieu123@";
    $checkPassword ="/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";
if(preg_match($checkPassword,$password,$match)){
    echo "ok";
    echo "<pre>";
    print_r($match);
    
}
else{
    echo "mat khau yeu";
}