<?php
if(isset($_POST['btnSubmit'])){
    $hsa = $_POST['hsa'] ?? null;
    $hsb = $_POST['hsb'] ?? null;
    
    if(!is_numeric($hsa)){
        // nguoi dung ko nhap so
        header("Location:../ptbn.php?err=hsa");
        exit();
    }
    if($hsa == 0){
        // loi nguoi dung
        header("Location:../ptbn.php?err=val_hsa");
        exit();
    }
    if(!is_numeric($hsb)){
        // nguoi dung ko nhap so
        header("Location:../ptbn.php?err=hsb");
        exit();
    }

    // tinh nghiem
    $x = -$hsb/$hsa;
    header("Location:../ptbn.php?err=empty&hsa={$hsa}&hsb={$hsb}&result={$x}");
    exit();
}