<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Send mail</title>
    
   

</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6 offset-3">
                <form action="server/handle.php" class="p-3 border" method="POST">
                    <div class="mb-3">
                        <label for="title">Tieu de</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="content">Noi dung</label>
                        <textarea class="form-control" name="content" id="content"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit" name="btnSendMail">Send</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>