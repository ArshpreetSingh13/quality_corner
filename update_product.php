<?php

session_start();

if (!isset($_SESSION["email"])) {
    echo "<script>window.location.assign('admin_login.php?msg=please Login ')</script>";
}
include("admin_heading.php") ?>

<main>
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="p-5 bg-light rounded A">
                <div class="row g-4">
                    <div class="  col-12">
                        <div class="text-center mx-auto" style="max-width: 700px;">


                            <h1 class="A text-primary">ADD YOUR NEW PRODUCT</h1>

                        </div>
                    </div>

                    <div class="  col-lg-6 offset-3">
                        <form class=" A" method="post" enctype="multipart/form-data">


                            <?php
                            $id = $_GET['id'];

                            include("config.php");
                            $query = "SELECT products.*, category.category_name FROM `products` INNER JOIN `category` on products.category=category.id WHERE products.id= $_GET[id]";

                            $res = mysqli_query($db, $query);
                            $data = mysqli_fetch_assoc($res);


                            ?>


                            <!-- category_name -->
                            <input type="text" required class="A w-100 form-control border-0 py-3 mb-4 "
                                name="product_name" placeholder="Enter Your Product Name"
                                value="<?php echo $data['product_name'] ?>">

                            <!-- price -->
                            <input type="number" required class="A w-100 form-control border-0 py-3 mb-4 " min="0"
                                name="price" value="<?php echo $data['price'] ?>" placeholder="Enter Your Price">

                            <!--image -->
                            <input type="file" class="A w-100 form-control border-0 py-3 mb-4" name="image"
                                placeholder="Enter Your Image Name">

                            <img src="images/<?php echo $data['image'] ?>" alt="" class=" position-absolute "
                                style="right: 100px; top: 550px; width: 200px;">

                            <textarea name="description" class="B w-100 form-control border-0 py-3 mb-4" required
                                placeholder="Add Your Description"
                                value="<?php echo $data['description'] ?>"><?php echo $data['description'] ?></textarea>

                            <select name="category" class="B w-100 form-control border-0 py-3 mb-4" 
                            >
                            
                                <?php
                                include("config.php");

                                $query = "select * from `category`";

                                $res = mysqli_query($db, $query);

                                while ($data = mysqli_fetch_assoc($res)) {

                                    if($data['products.category']==$data['category.id']){
                                        ?>
                                        <option selected value=" <?php
                                    echo $data['id']; ?>"><?php
                                      echo $data['category_name']; ?>
                                    </option>

                                        <?php
                                    }
                                    else{

                                        ?>
                                    
                                        <option value=" <?php
                                        echo $data['id']; ?>"><?php
                                          echo $data['category_name']; ?>
                                        </option>
                                        
                                        <?php

                                    }
                                  
                                }
                                ?>

                            </select>



                            <!-- button -->
                            <button class="A w-100 btn form-control border-secondary py-3 bg-white text-primary "
                                type="submit" name="submit_btn">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<?php
include("./footer.php")
    ?>




<?php


$queryP="SELECT * FROM `products` WHERE products.id= $_GET[id] ";
$result=mysqli_query($db,$queryP);
$datas=mysqli_fetch_assoc($result);
if (isset($_REQUEST["submit_btn"])) {
    $product_name = $_REQUEST["product_name"];
    $price = $_REQUEST["price"];
    $description = $_REQUEST["description"];
    $category = $_REQUEST["category"];

    if ($_FILES["image"]["name"]) {
        $image = $_FILES["image"];


        $tmp = $image["tmp_name"];

        $new_name = rand() . "-" . $image["name"];

        move_uploaded_file($tmp, "images/" . $new_name);
    }
    else{
        $new_name=$datas["image"];
    }




    

    $querys = "UPDATE `products` SET `product_name`='$product_name',`price`='$price',`category`='$category',`image`='$new_name',`description`='$description' WHERE `id`=$_GET[id]";





    $ress = mysqli_query($db, $querys);

  

}

?>