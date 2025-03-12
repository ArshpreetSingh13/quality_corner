<?php
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