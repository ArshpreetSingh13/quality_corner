<?php

session_start();

if (!isset($_SESSION["email"])) {
    echo "<script>window.location.assign('admin_login.php?msg=please Login ')</script>";
}
include("admin_heading.php") ?>

<div class="container-fluid">



    <div class="container">
        <form action="">
            <div class="row ps-5 A">



                <div class="col-xl-3">
                    <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">

                        <label>Sorting:</label>
                        <select name="sort" class="border-0 form-select-sm bg-light me-3">
                            <option selected value="0">All</option>
                            <?php

                            include("config.php");
                            $pro = "SELECT * FROM  `category` ";
                            $pro_res = mysqli_query($db, $pro);
                            while ($cat = mysqli_fetch_assoc($pro_res)) {

                                ?>

                                <option value="<?php echo $cat['id'] ?>"><?php echo $cat['category_name'] ?></option>
                                <?php
                            }


                            ?>

                        </select>



                    </div>

                </div>
                <div class="col-3">


                    <button class="btn btn-success text-white mt-2" name="sort_btn">Sort</button>


                </div>

            </div>
        </form>
    </div>

    <div class="row my-0 mx-5 px-5 ">







        <?php



        // $query = "SELECT * FROM `products`";
        


        if ($_REQUEST['sort']!="0"){

            $id = $_REQUEST['sort'];
            $query = "SELECT products.*, category.category_name FROM `products` INNER JOIN `category` on products.category=category.id WHERE products.category= '$id'";

        } else {
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
                            style="top: 10px; left: 180px;">

                            Update
                        </button>

                    </a>


                    <div class="px-3 py-3 ">
                        <h4><?php echo $data['product_name'] ?></h4>

                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">₹<?php echo $data['price'] ?></p>

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