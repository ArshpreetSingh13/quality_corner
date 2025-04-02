<?php

session_start();

if(!isset($_SESSION["email"])){
    echo "<script>window.location.assign('admin_login.php?msg=please Login ')</script>";
}
include("admin_heading.php") 
?>
<!-- Modal Search End -->


<!-- Single Page Header start -->
<div class="container-fluid page-header py-5 A">
    <h1 class="text-center text-white display-6">Shop</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Coupon</li>
    </ol>
</div>

<div class="container-fluid my-5 py-5">


    <table class="table table-striped table-hover">
        <tr>
            <th>Order Date</th>
            <th>User </th>
            <th>Total </th>
            <th>coupon</th>
            <th>View</th>
            <th>Action</th>
            
        </tr>

        <?php
        include("config.php");
       
        $orders="SELECT * FROM `orders`";
        $orders_res=mysqli_query($db,$order);
        $orders_data=mysqli_fetch_assoc($orders_data);
        if(isset($orders_data['coupon_id'])>0){
            $query = "SELECT orders.*, coupon.code FROM `orders` INNER JOIN `coupon` on orders.coupon_id=coupon.id ";
        }
        else{
            $query = "SELECT * FROM `orders` ";
        }

       

        $res = mysqli_query($db, $query);
        while($data = mysqli_fetch_assoc($res)) {


            ?>

            <tr>
                <td><?php echo $data['created at']; ?></td>
                <td><?php echo $data['user']; ?></td>
                <td><?php echo $data['total']; ?></td>
                <td><?php echo $data['code']; ?></td>
                
                <td><a class="btn btn-primary text-white" href="order_details.php?id=<?php echo $data['id']; ?>">View</a></td>

                <td><a class="btn btn-success text-white" href="update_order?id=<?php echo $data['id'] ?>&status=Approve">Approve</a><br>
                <a class="btn btn-danger text-white mt-2" href="#?id=<?php echo $data['id']; ?>">Decline</a></</td>
            </tr>
            <?php
        }

        ?>

    </table>
</div>

<?php
include("footer.php")
    ?>