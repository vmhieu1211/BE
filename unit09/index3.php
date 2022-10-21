<?php
// kiểm tra xem có phải url
$url = 'http://www.instagram.com/';
if(filter_var($url,FILTER_VALIDATE_URL)){
    echo 'là url';
}
else {
    echo 'error';
}

echo "<br>";

//kiểm tra xem có phải 1 email
$email = 'test@example.com';
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'yes';
}
else{
    echo 'no';
}
echo "<br>";

$myUrl = 'https://example.com?tuổi=10';
$newUrl = filter_var($myUrl,FILTER_SANITIZE_URL);
echo $newUrl;

echo "<br>";

$number = "+100";
$newNumber = filter_var($number,FILTER_SANITIZE_NUMBER_INT);
echo $newNumber;