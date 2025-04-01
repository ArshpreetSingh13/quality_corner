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

<?php
        if (isset($_GET['msg'])) {
            echo "<div class='alert alert-primary text-center' role='alert'> $_GET[msg]</div>";
        }

        ?>
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
       

        $query = "SELECT orders.*, coupon.code FROM `orders` INNER JOIN `coupon` on orders.coupon_id=coupon.id ";

        $res = mysqli_query($db, $query);
        while($data = mysqli_fetch_assoc($res)) {


            ?>

            <tr>
                <td><?php echo $data['created at']; ?></td>
                <td><?php echo $data['user']; ?></td>
                <td><?php echo $data['total']; ?></td>
                <td><?php echo $data['code']; ?></td>
                
                <td><a class="btn btn-primary text-white" href="order_details.php?id=<?php echo $data['id']; ?>">View</a></td>

                <td><a class="btn btn-success text-white" href="#?id=<?php echo $data['id']; ?>">Approve</a><br>
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