<?php

session_start();
include("heading.php") ?>

<div class="container-fluid">
    <div class="row my-5 mx-5 px-5 ">
        <?php
        if (isset($_GET['msg'])) {
            echo "<div class='alert alert-primary' role='alert'> $_GET[msg]</div>";
        }

        ?>






        <?php

        include("config.php");

        // $query = "SELECT * FROM `products`";
        


        if (isset($_GET["id"])) {
            $query = "SELECT products.*, category.category_name FROM `products` INNER JOIN `category` on products.category=category.id WHERE products.category= $_GET[id]";
        } else {
            $query = "SELECT products.*, category.category_name FROM `products` INNER JOIN `category` on products.category=category.id ";
        }



        $res = mysqli_query($db, $query);



        while ($data = mysqli_fetch_assoc($res)) {

            ?>
            <div class="col-md-6 A col-lg-4 col-xl-3 p-0 border border-secondary rounded my-5 ms-5 me-4">
                <div class="rounded position-relative fruite-item">
                <a href="single_product.php?id=<?php echo $data['id']?>&cid=<?php echo $_GET['id']?>">

                    <div class="ps-4 fruite-img ">
                        <img src="images/<?php echo $data['image'] ?>" class="img-fluid  rounded  " alt=""
                            style=" height: 200px ; width: 90%; ">
                    </div>



                    <div class="px-3 py-3 ">
                        <h4><?php echo $data['product_name'] ?></h4>
                       
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">₹<?php echo $data['price'] ?></p>



                            <form>


                                <input type="hidden" value="<?php echo $data['id'] ?>" name="pid">

                                <input type="hidden" value="<?php echo $data['price'] ?>" name="price">

                                <input type="hidden" value="<?php echo $_GET['id'] ?>" name="pageid">


                                <button class="btn border border-secondary rounded-pill px-3 text-primary"
                                    name="submit_btn">

                                    <i class="fa fa-shopping-bag me-2 text-primary "></i>
                                    Add to
                                    cart

                                </button>
                            </form>
                        </div>
                        
                    </div>
                    </a>
                </div>


            </div>






            <?php


        }

        ?>




    </div>
</div>

<?php
include("footer.php")
    ?>


<?php



if (isset($_REQUEST['submit_btn'])) {


    include("config.php");
    $email = $_SESSION['email'];
    $pid = $_REQUEST['pid'];
    $pageid = $_REQUEST['pageid'];

    $cart = "SELECT * FROM `cart` WHERE `name` = '$email' and `product`=$pid";
    $cart_res = mysqli_query($db, $cart);
    $cart_data = mysqli_fetch_assoc($cart_res);



    $price = $_GET['price'];


    $count = 1;

    if ($cart_data['name'] == $_SESSION['email'] and $cart_data['product'] == $pid) {




        $count = $cart_data['quantity'];

        $id = $cart_data['id'];
        $count = $count + 1;


        $cart_update = "UPDATE `cart` SET `quantity`='$count' WHERE `id`='$id'";
        $cart_updated = mysqli_query($db, $cart_update);

    } else {

        $cart_insert = "INSERT INTO `cart`(`name`, `product`, `quantity`, `price`) VALUES ('$email','$pid','$count','$price')";

        $cart_result = mysqli_query($db, $cart_insert);











    }

    echo "<script>window.location.assign('product.php?id=$pageid&msg=Added to cart ')</script>";

}



?>