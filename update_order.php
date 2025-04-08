<?php 

$id=$_GET['id'];
$status=$_GET['status'];

echo $id;
echo $status;

include("config.php");

$order="SELECT * FROM `orders`";
$order_res=mysqli_query($db,$order);
$order_data=mysqli_fetch_assoc($order_res);

if($order_data['status']=='pending'){
    $query="UPDATE `orders` SET `status`='$status' WHERE `id`='$id'";
    $res=mysqli_query($db,$query);

}
else if($order_data['status']=='Approved'){
    $query="UPDATE `orders` SET `status`='$status' WHERE `id`='$id'";
    $res=mysqli_query($db,$query);

}
else if($order_data['status']=='Packed'){
    $query="UPDATE `orders` SET `status`='$status' WHERE `id`='$id'";
    $res=mysqli_query($db,$query);

}
else if($order_data['status']=='TakeAway'){
    $query="UPDATE `orders` SET `status`='$status' WHERE `id`='$id'";
    $res=mysqli_query($db,$query);

}

echo "<script>window.location.assign('manage_order.php')</script>"
?>





