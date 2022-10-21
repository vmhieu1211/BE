<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
    
</head>
<body>
    <?php
        $state = $_GET['state'] ?? null;
        $image = $_GET['img']   ?? null;
        define('PATH_IMAGE','uploads/')
    ?>
    
    <?php if($state == 'error_type'):?>
        <p style="color:red">Vui lòng nhập file là ảnh png,jpeg,jpg</p>
    <?php endif;?>
    <?php if($state == 'error'):?>
        <p style="color:red">Có lỗi xảy ra vui lòng thử lại sau</p>
    <?php endif;?>
    <?php if($state === 'ok' && $image !== null): ?>
        <img src= "<?= PATH_IMAGE. $image?>" alt=""/>
    <?php endif;?>






    <form method="post" action="server/handle-upload.php" enctype="multipart/form-data">
        <label for="upload">Chọn file</label>
</br>

        <input type="file" name="upload" id="upload"/>
</br>
        <button type="submit" name="btnUpload">Upload File</button>


    </form>
</body>
</html>
