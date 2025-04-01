<?php
session_start();
include("config.php");
$id=$_REQUEST['id'];
$type=$_REQUEST['type'];
$quantity=$_REQUEST['quantity'];
if($type=="minus"){
    if($quantity==1){
        $query="DELETE from `cart` where `id`='$id'";
    }else{
        $quantity=$quantity-1;
        $query="UPDATE `cart` set `quantity`='$quantity' where `id`='$id'";
    }
}else{
    $quantity=$quantity+1;
    $query="UPDATE `cart` set `quantity`='$quantity' where `id`='$id'";
}
$res=mysqli_query($db,$query);
if($res>0){
    echo "<script>window.location.assign('cart.php?msg=Cart Updated successfully')</script>";
}else{
    echo "<script>window.location.assign('cart.php?msg=Error while updating cart!!')</script>";
}
?>