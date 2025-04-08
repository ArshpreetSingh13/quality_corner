<?php 
session_start();


$total=$_GET['total'];

$user=$_SESSION['email'];





include("config.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];

    
    $query=" INSERT INTO `orders`( `user`, `total`, `coupon_id`, `address`) VALUES ('$user','$total','$id',' ')";

   
}
else{

    
     $query=" INSERT INTO `orders`( `user`, `total`, `coupon_id`, `address`) VALUES ('$user','$total','',' ')";
}

$res=mysqli_query($db,$query);


$orders_id="SELECT * FROM `orders`  WHERE  `user` = '$user' ORDER BY id DESC ";
$orders_id_res=mysqli_query($db,$orders_id);
$orders_id_data=mysqli_fetch_assoc($orders_id_res);



$cart="SELECT  * FROM `cart` WHERE  `name` = '$user' ";
$cart_res=mysqli_query($db,$cart);
while($data=mysqli_fetch_assoc($cart_res)){
    $Ptotal=$data['quantity']*$data['price'];

    
    
    $order="INSERT INTO `order_details`(`order_id`, `product`, `quantity`, `price`) VALUES ('$orders_id_data[id]','$data[product]','$data[quantity]','$Ptotal')";
    
    $order_res=mysqli_query($db,$order);

    $cart_delete="DELETE FROM `cart` WHERE id='$data[id]'";
    $cart_delete_res=mysqli_query($db,$cart_delete);

    
    
    
    
}

echo "<script>window.location.assign('order_history.php')</script>";




?>