<?php

session_start();

if (!isset($_SESSION["email"])) {
    echo "<script>window.location.assign('admin_login.php?msg=please Login ')</script>";

}

include("admin_heading.php");
?>
<div class="container-fluid py-5">
    <div class="container A">
        <div class="bg-light B p-5 rounded">
            <div class="row  g-4 justify-content-center">

                <?php
                include("config.php");

                $user = "SELECT count(*) as total FROM `user` ";
                $user_res = mysqli_query($db, $user);
                $user_data = mysqli_fetch_assoc($user_res);

                ?>
                <?php
                $pro = "SELECT count(*) as totalP FROM `products` ";
                $pro_res = mysqli_query($db, $pro);
                $pro_data = mysqli_fetch_assoc($pro_res);

                ?>
                <?php
                $admin = "SELECT count(*) as totalA FROM `admin` ";
                $admin_res = mysqli_query($db, $admin);
                $admin_data = mysqli_fetch_assoc($admin_res);

                ?>
                <?php
                $cat = "SELECT count(*) as totalC FROM `category` ";
                
                $cat_res = mysqli_query($db, $cat);
                $cat_data = mysqli_fetch_assoc($cat_res);

                ?>

                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-users text-secondary"></i>
                        <h4>NO. of Admins</h4>
                        <h1><?php echo $admin_data['totalA'] ?></h1>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-users text-secondary"></i>
                        <h4>No. of customers</h4>
                        <h1><?php echo $user_data['total'] ?></h1>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-users text-secondary"></i>
                        <h4>Total category</h4>
                        <h1><?php echo $cat_data['totalC'] ?></h1>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="counter bg-white rounded p-5">
                        <i class="fa fa-users text-secondary"></i>
                        <h4>Available Products</h4>
                        <h1><?php echo $pro_data['totalP'] ?></h1>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php
include("footer.php");
?>