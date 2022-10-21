<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo ngày sinh nhật</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" />
    
</head>
<body>
    <?php
    $error  = $_GET['mess']     ?? null;
    $pass   = $_GET['pass']    ?? null;   
    $happy  = $_GET['happy']   ?? null;
    $wait   = $_GET['wait']    ?? null;
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
            <h2 class="text-center my-3">Thông báo sinh nhật</h2>
                <?php if($error === 'mess'): ?>
                    <p class="text-danger text-left">chưa đến sinh nhật!!</p>
                <?php endif; ?>
            <form class="p-3 border" action="server/handle-birthday.php" method="post">
                <div class="mb-3">
                    <label for="birthday">Nhập ngày tháng năm sinh</label>
                    <input type="date" class="form-control" id="birthday" name="birthday"/>
                </div>
                <button class="btn btn-primary" type="submit" name="btnSubmit">Kiểm tra</button>
            </form>
        </div>

    </div>

    </div>
</body>
</html>