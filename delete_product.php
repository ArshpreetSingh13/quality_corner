<?php

session_start();

if(!isset($_SESSION["email"])){
    echo "<script>window.location.assign('admin_login.php?msg=please Login ')</script>";
}
$id=$_GET['id'];

include("config.php");

$query="DELETE FROM `products` WHERE `id`='$id'";

$res=mysqli_query($db,$query);




if($res>0){
    echo "<script>window.location.assign('categories.php?msg=Delete successfully')</script>";
}
else{
    echo "<script>window.location.assign('categories .php?msg=Delete unsuccessfully')</script>";
}



?>