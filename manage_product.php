<?php

session_start();

if(!isset($_SESSION["email"])){
    echo "<script>window.location.assign('admin_login.php?msg=please Login ')</script>";
}
include("admin_heading.php")?>

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
        


        if(isset($_GET["id"])){
            $query = "SELECT products.*, category.category_name FROM `products` INNER JOIN `category` on products.category=category.id WHERE products.category= $_GET[id]";
        }
        else{
            $query = "SELECT products.*, category.category_name FROM `products` INNER JOIN `category` on products.category=category.id ";
        }
        


        $res = mysqli_query($db, $query);



        while ($data = mysqli_fetch_assoc($res)) {

            ?>
            <div class="col-md-6 A col-lg-4 col-xl-3 p-0 border border-secondary rounded my-5 ms-5 me-4">
                <div class="rounded position-relative fruite-item">
                    <div class="p-0 fruite-img ">
                        <img src="images/<?php echo $data['image'] ?>" class="img-fluid  rounded" alt=""
                            style=" height: 200px ; width: 100%;">
                    </div>

                    <a href="delete_product.php?id=<?php echo $data['id']; ?>" class="text-white">
                        <button class="text-white bg-secondary btn px-3 py-1 rounded position-absolute"
                            style="top: 10px; left: 10px;" name="delete">

                            Delete
                        </button>

                    </a>


                    <a href="update_product.php?id=<?php echo $data['id']; ?>" class="text-white">

                        <button class="btn text-white bg-secondary px-3 py-1 rounded position-absolute"
                            style="top: 10px; left: 150px;">

                            Update
                        </button>

                    </a>


                    <div class="px-3 py-3 ">
                        <h4><?php echo $data['product_name'] ?></h4>
                        <p><?php echo $data['description'] ?></p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">₹<?php echo $data['price'] ?></p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                    class="fa fa-shopping-bag me-2 text-primary"></i> Add to
                                cart</a>
                        </div>
                    </div>
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