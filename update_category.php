<?php

session_start();

if(!isset($_SESSION["email"])){
    echo "<script>window.location.assign('admin_login.php?msg=please Login ')</script>";
}
include("heading.php")
    ?>

<main>
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="p-5 bg-light rounded A">
                <div class="row g-4">
                    <div class="  col-12">
                        <div class="text-center mx-auto" style="max-width: 700px;">


                            <h1 class="A text-primary">UPDATE YOUR CATEGORY</h1>

                        </div>
                    </div>

                    <div class="  col-lg-6 offset-3">

                        <?php
                        $id = $_GET["id"];

                        include("config.php");

                        $query = "SELECT * FROM `category` WHERE id='$id'";


                        $res = mysqli_query($db, $query);

                        // print_r ($res);
                        $data = mysqli_fetch_assoc($res);






                        ?>



                        <form class=" A" method="post" enctype="multipart/form-data">





                            <!-- category_name -->
                            <input type="text" class="A w-100 form-control border-0 py-3 mb-4 " name="category_name"
                                placeholder="Enter Your Category Name" value="<?php echo $data['category_name']; ?>"
                                required>

                            <!--image -->
                            <input type="file" class="A w-100 form-control border-0 py-3 mb-4" name="image"
                                placeholder="Enter Your Image Name">





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
include("footer.php")
    ?>


<?php

if (isset($_REQUEST["submit_btn"])) {
    $category_name = $_REQUEST["category_name"];
    if ($_FILES["image"]["name"]) {
        $image = $_FILES["image"];

        $tmp = $image["tmp_name"];

        $new_name = rand() . "-" . $image['name'];


        move_uploaded_file($tmp, "category_image/" . $new_name);
    }

    else{
        $new_name=$data["image"];
    }

    include("config.php");


  

       $query="UPDATE `category` SET `category_name`='$category_name',`image`='$new_name' WHERE id='$id'";

    $res = mysqli_query($db, $query);


    if ($res > 0) {
        echo "<script>window.location.assign('manage_category.php?msg=Category updated')</script>";
    } else {
        echo "<script>window.location.assign('manage_category.php?msg=Category is not updated')</script>";
    }

}



?>