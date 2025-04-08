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


<<<<<<< HEAD

=======
>>>>>>> 9371d7f4aec1772fd8ebef76603753b58a8e198b
    <table class="table table-striped table-hover">
        <tr>
            <th>Order Date</th>
            <th>User </th>
            <th>Total </th>
            <th>coupon</th>
            <th>View</th>
            <th>Action</th>

        </tr>
        <div class="row">
            <form action="">
                <div class="col-xl-3">
                    <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">

                        <label>Default Sorting:</label>
                        <select name="sort" class="border-0 form-select-sm bg-light me-3" >
                            <option  selected value="All">All</option>
                            <option value="pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="Packed">Packed</option>
                            <option value="TakeAway">TakeAway</option>
                            <option value="Delivered">Delivered</option>
                        </select>
                       


                    </div>

                </div>
                <div class="col-3">

                    <button class="btn btn-success text-white mt-2" name="sort_btn">Sort</button>


                </div>
            </form>
        </div>

        <?php
        include("config.php");
<<<<<<< HEAD

        if (isset($_REQUEST['sort_btn'])) {
            $sort=$_REQUEST['sort'];
            if($sort=='All'){
                
                $query = "SELECT * FROM `orders`  ";
            }
            else{

                $query="SELECT * FROM `orders`  WHERE `status`='$sort'";
                
            }
           
           
        }
        else{
            
       $query = "SELECT * FROM `orders`  ";
        }







=======
       
        $orders="SELECT * FROM `orders`";
        $orders_res=mysqli_query($db,$order);
        $orders_data=mysqli_fetch_assoc($orders_data);
        if(isset($orders_data['coupon_id'])>0){
            $query = "SELECT orders.*, coupon.code FROM `orders` INNER JOIN `coupon` on orders.coupon_id=coupon.id ";
        }
        else{
            $query = "SELECT * FROM `orders` ";
        }

       
>>>>>>> 9371d7f4aec1772fd8ebef76603753b58a8e198b

        $res = mysqli_query($db, $query);
        while ($data = mysqli_fetch_assoc($res)) {
            $cpn="SELECT * FROM `coupon` WHERE `id`=$data[coupon_id]";
            $cpn_res=mysqli_query($db,$cpn);
            $cpn_data=mysqli_fetch_assoc($cpn_res);

            ?>

            <tr>
                <td><?php echo $data['created at']; ?></td>
                <td><?php echo $data['user']; ?></td>
                <td><?php echo $data['total']; ?></td>
                <td><?php echo $cpn_data['code']; ?></td>

<<<<<<< HEAD
                <td><a class="btn btn-primary text-white" href="order_details.php?id=<?php echo $data['id']; ?>">View</a>
                </td>


                <?php
                if ($data['status'] == 'pending') {
                    ?>
                    <td>

                        <a class="btn btn-success text-white"
                            href="update_order.php?id=<?php echo $data['id'] ?>&status=Approved">Approved</a><?php echo $data['status']; ?><br>
                        <?php
                } else if ($data['status'] == 'Approved') {
                    ?>


                        <td><a class="btn btn-success text-white"
                                href="update_order.php?id=<?php echo $data['id'] ?>&status=Packed">Packed</a><?php echo $data['status']; ?><br>
                        <?php
                } else if ($data['status'] == 'Packed') {
                    ?>


                            <td><a class="btn btn-success text-white"
                                    href="update_order.php?id=<?php echo $data['id'] ?>&status=TakeAway">Ready for Take
                                    Away</a><?php echo $data['status']; ?><br>
                        <?php
                } else if ($data['status'] == 'TakeAway') {
                    ?>


                                <td><a class="btn btn-success text-white"
                                        href="update_order.php?id=<?php echo $data['id'] ?>&status=Delivered">Delivered</a><?php echo $data['status']; ?><br>
                        <?php
                } else {
                    ?>


                                <td class=" text-success">
                                    <i class="bi  bi-check-square-fill"></i>
                        <?php echo $data['status']; ?><br>
                        <?php
                }


                ?>

                    <a class="btn btn-danger text-white mt-2" href="?id=<?php echo $data['id']; ?>">Decline</a></< /td>
=======
                <td><a class="btn btn-success text-white" href="update_order?id=<?php echo $data['id'] ?>&status=Approve">Approve</a><br>
                <a class="btn btn-danger text-white mt-2" href="#?id=<?php echo $data['id']; ?>">Decline</a></</td>
>>>>>>> 9371d7f4aec1772fd8ebef76603753b58a8e198b
            </tr>
            <?php
        }

        ?>

    </table>
</div>

<?php
include("footer.php")
    ?>