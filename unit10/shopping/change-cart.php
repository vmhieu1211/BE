<?php
$id =$_POST['id'] ?? null;
$id = is_numeric($id) ? $id : 0;
$qty = $_POST['qtyPd'] ?? null;
$qty = is_numeric($qty) && $qty > 0 ? $qty : 1;
echo $id. '---' .$qty;