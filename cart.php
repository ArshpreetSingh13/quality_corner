<?php
session_start();
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
                    $email = $_SESSION['email'];
                    
                    include("config.php");
                    $query = " SELECT cart.*, products.product_name, products.image FROM `cart` INNER JOIN `products` on cart.product=products.id WHERE name='$email'";


                    $res = mysqli_query($db, $query);

                    while ($data = mysqli_fetch_assoc($res)) {

                        ?>
                        <tr>

                            <td>
                                <p class="mb-0 mt-4"><?php echo $data['name'] ?></p>
                            </td>

                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="images/<?php echo $data['image'] ?>" class="img-fluid me-5 rounded-4"
                                        style="width: 80px; height: 80px;" alt="">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4"><?php echo $data['product_name'] ?></p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4"><?php echo $data['price'] ?></p>
                            </td>
                            <td>
                                <form>
                                    <div class="input-group  mt-4" style="width: 100px;">



                                        <input type="hidden" value="<?php echo $data['id'] ?>" name="pid">

                                        <button class="btn  rounded-circle bg-light border" name="btn_minus">
                                            <i class="fa fa-minus"></i>
                                        </button>

                                        <input type="text" class="form-control form-control-sm text-center border-0"
                                            value="<?php echo $data['quantity'] ?>">

                                        <button class="btn  rounded-circle bg-light border" name="btn_plus">
                                            <i class="fa fa-plus"></i>
                                        </button>



                                    </div>
                                </form>

                            </td>
                            <td>
                                <p class="mb-0 mt-4"><?php echo $data['price'] * $data['quantity'] ?> </p>
                            </td>
                            <td>
                                <button class="btn btn-md rounded-circle bg-light border mt-4" name="btn_delete">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                            </td>

                        </tr>
                        <?php

                    }

                    ?>


                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <input type="text" class="border-0 border-bottom rounded me-5 py-3 mb-4" placeholder="Coupon Code">
            <button class="btn border-secondary rounded-pill px-4 py-3 text-primary" type="button">Apply Coupon</button>
        </div>
        <div class="row g-4 justify-content-end">
            <div class="col-8"></div>
            <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                <div class="bg-light rounded">
                    <div class="p-4">
                        <h1 class="display-6 mb-4">Cart <span class="fw-normal">Total</span></h1>
                        <div class="d-flex justify-content-between mb-4">
                            <h5 class="mb-0 me-4">Subtotal:</h5>
                            <p class="mb-0">$96.00</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-0 me-4">Shipping</h5>
                            <div class="">
                                <p class="mb-0">Flat rate: $3.00</p>
                            </div>
                        </div>
                        <p class="mb-0 text-end">Shipping to Ukraine.</p>
                    </div>
                    <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                        <h5 class="mb-0 ps-4 me-4">Total</h5>
                        <p class="mb-0 pe-4">$99.00</p>
                    </div>
                    <button class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4"
                        type="button">Proceed Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart Page End -->


<?php
include("footer.php")
    ?>


<?php
if (isset($_REQUEST['btn_minus']) or isset($_REQUEST['btn_plus']) or isset($_REQUEST['btn_delete'])) {

    $id = $_REQUEST['pid'];
    echo $id;

    include("config.php");
    $cart = "SELECT * FROM `cart` WHERE id='$id'";
    $result = mysqli_query($db, $cart);
    $cart_data = mysqli_fetch_assoc($result);

    if (isset($_REQUEST['btn_minus'])) {
        $count = $cart_data['quantity'];


        $count = $count - 1;



        $cart_update = "UPDATE `cart` SET `quantity`='$count' WHERE `id`='$id'";
        $cart_updated = mysqli_query($db, $cart_update);
    } else if (isset($_REQUEST['btn_plus'])) {
        $count = $cart_data['quantity'];


        $count = $count + 1;




        $cart_update = "UPDATE `cart` SET `quantity`='$count' WHERE `id`='$id'";
        $cart_updated = mysqli_query($db, $cart_update);
    }
    else if (isset($_REQUEST['btn_delete'])) {
        

        echo "delete";
    }

    echo "<script>window.location.assign('cart.php ')</script>";
}


?>