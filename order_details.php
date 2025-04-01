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
            <th>Order ID</th>
            <th>Product </th>
            <th>Image </th>
            
            <th>price without coupon</th>
            <th>Quantity </th>  
            <th>View</th>
            <th>Action</th>
        </tr>

        <?php

        $id=$_GET['id'];
        include("config.php");

        


       $query = "SELECT * FROM `order_details` WHERE  order_id ='$id'";

        $res = mysqli_query($db, $query);
        while($data = mysqli_fetch_assoc($res)) {
            $product="SELECT * FROM `products` WHERE id='$data[product]'";
            $Pres= mysqli_query($db, $product);
            $Pdata=mysqli_fetch_assoc($Pres);

           
            ?>

            <tr>
                <td><?php echo $data['order_id']; ?></td>
                <td><?php echo $Pdata['product_name']; ?></td>
                <td><img class="img-fluid" src="images/<?php echo $Pdata['image']; ?>" alt="" style="width: 80px; height: 80px;" ></td>
                <td><?php echo $data['price']; ?></td>
                <td><?php echo $data['quantity']; ?></td>
                
                <td><a class="btn btn-primary text-white" href="order_details.php?id=<?php echo $data['id']; ?>">View</a></td>

                <td><a class="btn btn-primary text-white" href="delete_coupon.php?id=<?php echo $data['id']; ?>">Delete</a><br>
                <a class="btn btn-primary text-white mt-2" href="delete_coupon.php?id=<?php echo $data['id']; ?>">Delete</a></</td>
            </tr>
            <?php
        }

        ?>

    </table>
</div>

<?php
include("footer.php")
    ?>