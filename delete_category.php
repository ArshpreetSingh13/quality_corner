<?php

session_start();

if(!isset($_SESSION["email"])){
    echo "<script>window.location.assign('admin_login.php?msg=please Login ')</script>";
}
$id=$_GET['id'];

include("config.php");

$query="DELETE FROM `category` WHERE `id`='$id'";

$res=mysqli_query($db,$query);


if($res>0){
    echo "<script>window.location.assign('manage_category.php?msg=Delete successfully')</script>";
}
else{
    echo "<script>window.location.assign('manage_category.php?msg=Delete unsuccessfully')</script>";
}



?>