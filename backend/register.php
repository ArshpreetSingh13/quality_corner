<?php
$name= $_REQUEST["name"];
$email= $_REQUEST["email"];
$password= MD5($_REQUEST["password"]);
$contact= $_REQUEST["contact"];
$address= $_REQUEST["address"];
$pincode= $_REQUEST["pincode"];
$city= $_REQUEST["city"];





// db connect
$db=mysqli_connect("localhost","root","","my_project");


// db insert
$td1= "INSERT into `user`(`name`,`email`,`password`,`contact`,`address`,`pincode`,`city`) VALUES('$name','$email','$password','$contact','$address','$pincode','$city')";

$res= mysqli_query($db,$td1);

if($res==TRUE){
    echo "Your page in successfully submit...!";
}
else{
    echo "try later";

}




?>