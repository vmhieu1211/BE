<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giai phuong trinh bac nhat</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" />
</head>
<body>
    <?php
        $error = $_GET['err'] ?? null;
        $hsa   = $_GET['hsa'] ?? null;
        $hsb   = $_GET['hsb'] ?? null;
        $x     = $_GET['result'] ?? null;
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">

                <h3 class="text-center my-3">Giai phuong trinh bac nhat</h3>

                <?php if($error === 'hsa'): ?>
                    <p class="text-danger text-left">He so A phai nhap la so</p>
                <?php endif; ?>
                <?php if($error === 'val_hsa'): ?>
                    <p class="text-danger text-left">He so A khong duoc phep bang 0</p>
                <?php endif; ?>
                <?php if($error === 'hsb'): ?>
                    <p class="text-danger text-left">He so B phai la so</p>
                <?php endif; ?>

                <form class="p-3 border" action="server/gptbn.php" method="post">
                    <div class="mb-3">
                        <label for="hsa">He so a</label>
                        <input type="text" class="form-control" id="hsa" name="hsa" value="<?= $hsa; ?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="hsb">He so b</label>
                        <input type="text" class="form-control" id="hsb" name="hsb" value="<?= $hsb; ?>" />
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnSubmit"> Giai PT</button>
                </form>
                <?php if($error === 'empty' && $x !== null): ?>
                    <h4 class="my-3 text-success">Nghiem cua PT la : <?= $x; ?></h4>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>