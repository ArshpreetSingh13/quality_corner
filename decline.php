<?php
$id=$_GET['id'];
include("config.php");
$query="DELETE FROM `orders` WHERE id='$id'";
$res=mysqli_query($db,$query);
if ($res > 0) {
    echo "<script>window.location.assign('manage_order.php')</script>";
} else {
    echo "<script>window.location.assign('manage_order.php')</script>";
}

?>