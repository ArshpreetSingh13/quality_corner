<?php
session_start();
if (!isset($_SESSION["email"])) {
    echo "<script>window.location.assign('login.php?msg=please Login ')</script>";
    
}
include("heading.php");
?>
<!-- Single Page Header End -->

<!-- Cart Page Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Products</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    include("config.php");
                    $query = "SELECT cart.*, products.product_name,products.image FROM `cart` INNER JOIN `products` on cart.product=products.id WHERE cart.name='$_SESSION[email]'";
                    $res = mysqli_query($db, $query);
                    while ($data = mysqli_fetch_assoc($res)) {
                        $total += $data['price'] * $data['quantity'];
                        ?>
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="images/<?php echo $data['image'] ?>" class="img-fluid me-5 rounded-circle"
                                        style="width: 80px; height: 80px;" alt="">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4">
                                    <?php
                                    echo $data['product_name']
                                        ?>
                                </p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">
                                    &#8377;
                                    <?php
                                    echo $data['price']
                                        ?>
                                </p>
                            </td>
                            <td>
                                <div class="input-group quantity mt-4" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <a href="update_cart.php?id=<?php echo $data['id'] ?>&type=minus&quantity=<?php echo $data['quantity'] ?>"
                                            class="btn btn-sm btn-minus rounded-circle bg-light border">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0" value="<?php
                                    echo $data['quantity']
                                        ?>">
                                    <div class="input-group-btn">
                                        <a href="update_cart.php?id=<?php echo $data['id'] ?>&type=plus&quantity=<?php echo $data['quantity'] ?>"
                                            class="btn btn-sm btn-plus rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">&#8377;
                                    <?php
                                    echo $data['price'] * $data['quantity']
                                        ?>
                                </p>
                            </td>
                            <td>
                                <a href="remove_item.php?id=<?php echo $data['id'] ?>"
                                    class="btn btn-md rounded-circle bg-light border mt-4">
                                    <i class="fa fa-times text-danger"></i>
                                </a>
                            </td>

                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
        <div class="mt-5">


            <form method="POST">


                <select name="coupon" class="B w-25 form-control border-0 py-3 mb-4">
                    <option value="" disabled selected> Apply Your Coupon</option>
                    <?php
                    include("config.php");

                    $query = "select * from `coupon` WHERE status='active'";

                    $res = mysqli_query($db, $query);

                    while ($data = mysqli_fetch_assoc($res)) {

                        ?>

                        <option value="<?php
                        echo $data['id']; ?>"><?php
                          echo $data['code']; ?>
                        </option>
                        <?php
                    }
                    ?>

                </select>
                <button class="btn border-secondary rounded-pill px-4 py-3 text-primary" name="check"
                    type="submit">Check Coupon</button>
            </form>
        </div>
        <div class="row g-4 justify-content-between">
            <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                <?php

                if (isset($_REQUEST['check'])) {

                    $coupon = $_REQUEST['coupon'];

                    $coupon_details = "SELECT * FROM `coupon` WHERE `id`='$coupon'";
                    $coupon_res = mysqli_query($db, $coupon_details);
                    $coupon_data = mysqli_fetch_assoc($coupon_res);


                    ?>
                    <div class="bg-light rounded mt-3">
                        <div class="p-4 ">




                            <h1 class="display-6 mb-4">Coupon <span class="fw-normal">Detail</span></h1>
                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="mb-0 me-4">Code:</h5>
                                <p class="mb-0"><?php echo $coupon_data['code'] ?></p>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="mb-0 me-4">Type of Discount</h5>
                                <div class="">
                                    <p class="mb-0 text-end"><?php 
                                     if($coupon_data['type']==1){
                                        echo("Flat");
                                    } 
                                    else{
                                        
                                        echo("Percentage");
                                     }
                                     ?></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="mb-0 me-4">Discount</h5>
                                <div class="">
                                    <p class="mb-0 text-end"><?php echo $coupon_data['discount'] ?></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="mb-0 me-4">Terms</h5>
                                <div class="">
                                    <p class="mb-0 text-end"><?php echo $coupon_data['term'] ?></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="mb-0 me-4">Minmum Amt</h5>
                                <div class="">
                                    <p class="mb-0 text-end"><?php echo $coupon_data['minamt'] ?></p>
                                </div>
                            </div>



                        </div>

                        <form method="GET">
                            <input name="Cid" type="hidden" value="<?php echo $coupon_data['id'] ?>">
                            <button
                                class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4"
                                type="submit" name="apply">Apply coupon</button>
                        </form>
                    </div>

                    <?php

                }



                ?>

            </div>
            <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                <div class="bg-light rounded">
                    <div class="p-4">





                        <h1 class="display-6 mb-4">Cart <span class="fw-normal">Total</span></h1>
                        <div class="d-flex justify-content-between mb-4">
                            <h5 class="mb-0 me-4">Subtotal:</h5>
                            <p class="mb-0">&#8377;<?php echo $total ?></p>
                        </div>





                        <div class="d-flex justify-content-between">
                            <h5 class="mb-0 me-4">Packing Charges</h5>
                            <div class="">
                                <p class="mb-0 text-end">&#8377;<?php
                                if ($total >= 500) {
                                    $shipping = 0;
                                    $grand_total = $total + $shipping;
                                    echo 0;
                                } else {
                                    $shipping = 50;
                                    $grand_total = $total + $shipping;
                                    echo "50<br><div class='text-success text-decoration-underline'>Free Shipping on order above Rs.500</div>";
                                }
                                ?></p>
                            </div>
                        </div>

                    </div>

                    <div class="pt-4  border-top  d-flex justify-content-between">
                        <h5 class="mb-0 ps-4 me-4">Total</h5>
                        <p class="mb-0 pe-4">&#8377;<?php
                        echo $grand_total;
                        ?></p>

                    </div>
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-1">
                        </div>
                    </div>
                    <?php

                    if (isset($_REQUEST['apply'])) {

                        $Cid = $_REQUEST["Cid"];

                        $coupon_details = "SELECT * FROM `coupon` WHERE `id`='$Cid'";
                        $coupon_res = mysqli_query($db, $coupon_details);
                        $coupon_data = mysqli_fetch_assoc($coupon_res);
                        if ($coupon_data['minamt'] <= $total) {

                            ?>
                            <div class="d-flex justify-content-between px-4">
                                <?php


                                echo "<h5 class=' me-4'>Coupon Discount:</h5>";
                                if ($coupon_data['type'] == 1) {

                                    echo "<p class='mb-0'>- &#8377; ", $coupon_data['discount'];
                                    $grand_total -= $coupon_data['discount'];



                                } else {

                                    $Damt = ($coupon_data['discount'] * $total) / 100;

                                    echo "<p class='mb-0'>- &#8377; ", $Damt;

                                    $grand_total -= $Damt;
                                }

                                ?>
                            </div>

                            <div class="pt-4 mb-4 border-top  d-flex justify-content-between">
                                <h5 class="mb-0 ps-4 me-4">Total After Discount</h5>
                                <p class="mb-0 pe-4">&#8377;<?php
                                echo $grand_total;
                                ?></p>

                            </div>



                            <?php

                        } else {
                            echo "<p class='text-danger mx-4'>Coupon desn't minmum requirements</p>";
                        }

                        
                    }

                    ?>


                    <?php 
                    if(isset($_GET['Cid'])){
                        ?>
                            <a href="order.php?id=<?php echo $_GET['Cid']; ?>&total=<?php echo $grand_total?>" class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4"
                            type="submit" name="order">Order Now</a>

                            <?php
                    }
                    else{
                        ?>
                            <a href="order.php?total=<?php echo $grand_total?>" class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4"
                            type="submit" name="order">Order Now</a>

                            <?php
                    }
                    ?>

                    
                        
                       
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart Page End -->
<?php
include("footer.php")
    ?>

