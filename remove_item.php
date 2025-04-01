<?php
session_start();
include("config.php");
$id=$_REQUEST['id'];
$query="DELETE from `cart` where `id`='$id'";
$res=mysqli_query($db,$query);
if($res>1){
    echo "<script>window.location.assign('cart.php?msg=Item removed successfully')</script>";
}else{
    echo "<script>window.location.assign('cart.php?msg=Error while removing item from cart!!')</script>";
}
?>