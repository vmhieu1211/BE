<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View cart</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" />


</head>
<body>
    <table>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                <table class="table">
                    <thead>
                        <tr>                           
                            <th scope="col">San pham</th>
                            <th scope="col">Anh</th>
                            <th scope="col">So luong</th>
                            <th scope="col">Don gia</th>
                            <th scope="col">Thanh tien</th>
                            <th></th>
                        </tr>
                    </thead>

                        <tbody>
                            <?php foreach($dataCart as $key => $item): ?>
                                <tr class="row-cart-<?= $item['idPd']; ?>"></tr>
                                
                            <tr>
                                <th scope="row"><?= $key; ?></th>
                                <td><?= $item['namePd']; ?></td>
                                <td><img with="50%" src ="<?= $item['imgPd']?>"></td>
                                <td><input type="number" value="<?= $item['qty'];?>" min ="1" class="js-change-qty" id="<?= $item['idPd']?>"/></td>
                                <td><?= $item['pricePd']?></td>
                                <td id="m-<?= $item['pricePd']*$item['qty']?>"><?= $item['pricePd']*$item['qty']?></td>
                                <td>
                                    <button class="btn btn-primary js-remove-item-cart" id=""<?= $item['idPd'];?>>xoa</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a class="btn btn-primary" href="index.php">Tiep tuc mua hang</a>
                    <a class ="btn btn-danger js-delete-all-cart" >Xoa gio hang</a>
                </div>
            </div>
        </div>
        <script src="../../bootstrap/js/jquery-3.6.1.min.js"></script>      
        
        <script>
           $(function(){
                $('.js-delete-all-cart'.click(function(){
                    if(confirm('Ban co muon xoa khong?')){
                        $.ajax({
                            type:'post',
                            url:'cart.php?m=delete',
                            success:function(data){
                                let respone =JSON.parse(data);
                                if(respone.cod===200){
                                    window.location.reload(true);
                                }
                                alert(response.message);
                            }
                        });
                    }
                }));

                //ham khoi tao - doi lad xong dom htm;
                $('.js-remove-item-cart').click(function(){
                    // alert('hi');
                    let self =$(this);
                    let id =self.attr('id').trim();
                    if($.isNumeric(id)){
                        $ajax({
                            type:post,
                            url:'cart.php?m=remove',
                            data:'id',
                            success:function(data){
                                let result = JSON.parse(data);
                                if(result.cod === 200){
                                    // an bo dong du lieu vua xoa
                                    $('#row-cart-'+id).hide();
                                }
                                alear(result.message);
                                //window.location.reload(true);
                            }
                        })
                    }
                    })

                // $= jQuery
                $('.js-change-qty').on('change',function(){
                    let self = $(this);// tro vao chinh phan tu dang thao tac
                    //lay gia tri nguoi dung vua thay doi
                    let qty = self.val().trim();
                    let idPd =self.attr('id').trim();
                    if (qty > 0 && $.isNumeric(idPd)){
                        //xu lyajax
                        $.ajax({
                            url: "cart.php?m=change",
                            type:"post",
                            data: {id: idPd, qtyPd: qty},
                            success: function(data){
                                // console.log(data);
                                //data la chuoi json ben phia backend tra ve
                                //convert ve object trong js
                                let result = JSON.parse(data);
                                // console.log(result.cod)
                                if(result.cod === 200){
                                    $('#m-'+idPd).text(result.money);
                                }
                            }
                        });
                    }
                    else{
                        alert('So luong mua phai lon hon 0');
                    }
                });

            })
        </script>
    
</body>
</html>