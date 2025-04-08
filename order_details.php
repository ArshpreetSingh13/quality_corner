<?php

session_start();

if (!isset($_SESSION["email"])) {
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
    <div class="card-body d-flex align-items-center justify-content-around">
        <p class="h5">S.No</p>
        <p class="h5">Product Name</p>
        <p class="h5">Image</p>
        <p class="h5">Price</p>
        <p class="h5">Quantity</p>


    </div>


    <div class="card">

        <?php

        $id = $_GET['id'];
        include("config.php");




        $query = "SELECT * FROM `order_details` WHERE  order_id ='$id'";

        $res = mysqli_query($db, $query);
        $count=0;
        while ($data = mysqli_fetch_assoc($res)) {
            $product = "SELECT * FROM `products` WHERE id='$data[product]'";
            $Pres = mysqli_query($db, $product);
            $Pdata = mysqli_fetch_assoc($Pres);
            $count+=1;


            ?>
            <div class="card-body d-flex align-items-center justify-content-around">
                <p><?php echo $count; ?></p>
                <p><?php echo $Pdata['product_name']; ?></p>
                <p><img class="img-fluid " src="images/<?php echo $Pdata['image']; ?>" alt=""
                        style="width: 80px; height: 80px;"></p>
                <p><?php echo $data['price']; ?></p>
                <p><?php echo $data['quantity']; ?></p>

            
            </div>
            <div class="container"><hr></div>

            <?php
        }

        ?>



    </div>
</div>

<?php
include("footer.php")
    ?>