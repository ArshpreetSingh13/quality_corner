<?php

session_start();

if (!isset($_SESSION["email"])) {
    echo "<script>window.location.assign('admin_login.php?msg=please Login ')</script>";
}
include("heading.php")
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
            <th>Status</th>
            <th>View</th>

        </tr>
        <div class="row">
            <form action="">
                <div class="col-xl-3">
                    <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">

                        <label>Default Sorting:</label>
                        <select name="sort" class="border-0 form-select-sm bg-light me-3" >
                            <option  selected disabled value="0">SELECT</option>
                            <option   value="All">All</option>
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

        $email=$_SESSION['email'];
        if (isset($_REQUEST['sort_btn'])) {
            $sort=$_REQUEST['sort'];
            if($sort=='All'){
                
                $query = "SELECT * FROM `orders`  WHERE `user`='$email' ORDER BY id DESC";
            }
            else{

                $query="SELECT * FROM `orders`  WHERE `user`='$email'  AND `status`='$sort' ORDER BY id DESC" ;
                
            }
           
           
        }
        else{
            
       $query = "SELECT * FROM `orders`  WHERE `user`='$email' ORDER BY id DESC";
        }








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

                <td><p><?php echo $data['status']; ?></p></td>

                <td><a class="btn btn-primary text-white" href="order_his_details.php?id=<?php echo $data['id']; ?>">View</a>
                </td>

               
                    
                       
                       
            </tr>
            <?php
        }

        ?>

    </table>
</div>

<?php
include("footer.php")
    ?>