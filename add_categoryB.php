
<?php
$category_name=$_REQUEST["category_name"];
$image=$_FILES["image"];

$tmp=$image["tmp_name"];

$new_name=rand()."-".$image['name'];

    
move_uploaded_file($tmp,"category_image/".$new_name);

include("config.php");


 echo $query="INSERT INTO `category`( `category_name`, `image`) VALUES ('$category_name','$new_name')";

$res=mysqli_query($db,$query);


if($res>0){
    echo "<script>window.location.assign('add_category.php?msg=Category Added')</script>";
}
else{
    echo "<script>window.location.assign('add_category.php?msg=Category is not Added')</script>";
}



?>