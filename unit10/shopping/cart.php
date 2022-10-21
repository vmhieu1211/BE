<?php
session_start();
require 'data/productions.php';
$method = $_GET['m']?? null;
$method = trim(strtoupper($method));
switch($method){
    case 'ADD':
        addToCart();
        break;
    case "CHANGE":
        changeItem();
        break;
    case "REMOVE":
        removeItemCart();
        break;
    case "DELETE":
        deleteCart();
        break;
}
function deleteCart(){
    if(isset($_SESSION['cart'])){
        unset($_SESSION['cart']);
        echo json_encode([
            'cod'=>200,
            'message'=>'xoa thanh cong'
        ]);
    } else{
        echo json_encode([
            'cod'=> 500,
            'message'=> 'xoa khong thanh cong'
        ]);
    }
}
function removeItemCart(){
    $id = $_POST['id'] ?? null;
    $id =is_numeric($id)?$id :0;
    if(isset($_SESSION['cart'][$id])){
        unset($_SESSION['cart'][$id]);
        echo json_encode([
            'cod' => 200,
            'message'=>'xoa thanh cong'
        ]);
    }else{
        echo json_encode([
            'cod' => 500,
            'message' => 'khong tim thay san pham can xoa',
        ]);
    }
}
function changeItem(){
    $id =$_POST['id'] ?? null;
    $id = is_numeric($id)? $id : 0;

    $qty = $_POST['qtyPd'] ?? null;
    $qty = is_numeric($qty) && $qty > 0 ? $qty :1;
    echo $id. '---' .$qty;
    if($id !== 0){
        // tien hanh cap nhat san pham trong gio hang
        if(isset($_SESSION['cart'][$id])){
            //
            $_SESSION['cart'][$id]['qty']= $qty;
            $money = $qty *$_SESSION['cart'][$id]['pricePd'];
            echo json_encode(
                ['cod' => 200,
                'message' =>'cap nhat thanh cong',
                'money'=> $money]
            );
        }

    } else{
        echo json_encode([
            //tra ve chuoi json
            'cod' => 404,
            'message' => 'Ma san pham khong dung',
        ]);
    }
}

function addToCart(){
    // unset($_SESSION['cart']);
    // die;
    $id=$_GET['id'] ?? null;
    $id = is_numeric($id) ? $id : 0;
    $productions= getDataProductions();
    // lay ra duoc san pham nam trong productions theo id truyen len
    $info = [];
    foreach($productions as $item){
        if ($item['id'] == $id){
            $info = $item;
        }
    }
    if(empty($info)){
        header("Location:index.php?state=error");
        exit();
    }
    // them san pham  vao gio hang
    if(isset($_SESSION['cart'])){
        // da ton tai gio hang
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['qty'] += 1;
        }else{
            $_SESSION['cart'][$id]['idPd'] = $id;
            $_SESSION['cart'][$id]['namePd'] = $info['name'];
            $_SESSION['cart'][$id]['imgPd'] = $info['image'];
            $_SESSION['cart'][$id]['pricePd'] = $info['price'];
            //mac dinh mua 1 sang pham
            $_SESSION['cart'][$id]['qty'] = 1;
        }
    }
    else{
        //gio hang chua ton tai
        $_SESSION['cart'][$id]['idPd'] = $id;
        $_SESSION['cart'][$id]['namePd'] = $info['name'];
        $_SESSION['cart'][$id]['imgPd'] = $info['image'];
        $_SESSION['cart'][$id]['pricePd'] = $info['price'];
        //mac dinh mua 1 sang pham
        $_SESSION['cart'][$id]['qty'] = 1;
    }
    //hien thi gio hang] 
    $dataCart = $_SESSION['cart'] ?? [];
    // header('Location:view-cart.php');
    // echo '<pre>';
    // print_r($dataCart);
    require 'view-cart.php'; 
   

    
}