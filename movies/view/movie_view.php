<?php
if (!defined('APP_PATH')){
    die('ban khong co quyen truy cap');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim kiem phim</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-md-6 offset-3">
                <h1 class="text-center mb-2">Tim kiem phim</h1>
                    <div class="input-group mb-3">
                        <input id="js-keyword" type="text" class="form-control" placeholder="nhap ten bo phim">
                        <button class="input-group-text btn btn-primary" id="js-search">Tim kiem</button>
                    </div>
                <div class="text-center">
                    <div class="spinner-border" id="loading" style="display:none" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
        </div>
        <!--hien thi du lieu ajax-->
        <div id="result"></div>
    </div>
    <script src="public/js/jquery-3.6.1.min.js"></script>
    <script>
        $(function(){
            $('#js-search').click(function(){
                let nameMovie = $('#js-keyword').val().trim();
                if(nameMovie.length > 0){
                    //co nhap ten bo phim
                    $.ajax({
                        url: "index.php?m=search",
                        type: "POST",
                        data:{name: nameMovie},
                        beforeSend: function(){
                            //hien thi hieu ung loading
                            $('#loading').show()
                            },
                        success:function(respone){
                            //respone du lieu nhan ve 
                            //an loading data - lay data xong roi
                            $('#loading').hide();
                            //view du lieu
                            $('#result').html(respone);
                        }
                    });
                } else{
                    alert('Vui long nhap ten bo phim');
                }               
            })
        })
    </script>
</body>
</html>
