
<?php
$category_name=$_REQUEST["category_name"];
$image=$_REQUEST["image"];

include("../db.php");


$query="INSERT INTO `category`( `category_name`, `image`) VALUES ('$category_name','$image')";

$res=mysqli_query($db,$query);


if($res>0){
    echo "<script>window.location.assign('../add_category.php?msg=Category Added')</script>";
}
else{
    echo "<script>window.location.assign('../add_category.php?msg=Category is not Added')</script>";
}



?>