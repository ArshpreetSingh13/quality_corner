<?php
$name= $_REQUEST["name"];
$email= $_REQUEST["email"];
$password= MD5($_REQUEST["password"]);
$contact= $_REQUEST["contact"];
$address= $_REQUEST["address"];
$pincode= $_REQUEST["pincode"];
$city= $_REQUEST["city"];





// db connect
include("../db.php");


// db insert
$td1= "INSERT into `user`(`name`,`email`,`password`,`contact`,`address`,`pincode`,`city`) VALUES('$name','$email','$password','$contact','$address','$pincode','$city')";

$res= mysqli_query($db,$td1);

if($res>0){
    echo "<script>window.location.assign('../login.php?msg=Registered successfully')</script>";
}
else{
    echo "<script>window.location.assign('../register.php?msg=Registered unsuccessful')</script>";

}




?>