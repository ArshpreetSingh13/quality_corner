<?php

session_start();

if(!isset($_SESSION["email"])){
    echo "<script>window.location.assign('admin_login.php?msg=please Login ')</script>";
}
include("admin_heading.php")?>
<!-- Modal Search End -->


<!-- Single Page Header start -->

<!-- Single Page Header End -->


<!-- Fruits Shop Start-->
<div class="container-fluid fruite py-5">
    <div class="container py-5">
        <h1 class="mb-4 A">Fresh fruits shop</h1>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4 B">
                   
                    <div class="col-6"></div>
                    
                </div>





                <div class="row g-4">

                    <div class="col-lg-12">
                        <div class="row g-4 justify-content-center">


                        <?php
                        if(isset($_GET['msg'])){
                            echo "<div class='alert alert-primary' role='alert'> $_GET[msg]</div>";
                        }

                        ?>




                            <?php
                            include("config.php");

                            $query = "SELECT * FROM `category`";

                            $res = mysqli_query($db, $query);


                            while ($data = mysqli_fetch_assoc($res)) {

                                

                                ?>
                                <div class="col-md-6 col-lg-6 col-xl-4 B">
                                    <div class="rounded position-relative fruite-item ">
                                        <div class="fruite-img">
                                            <img src="category_image/<?php
                                            echo $data['image'];
                                            ?>" class="img-fluid rounded-top" alt="" style="height:200px; width:370px;">
                                        </div>


                                        <a href="delete_category.php?id=<?php echo $data['id'];?>" class="text-white" >
                                            <button class="text-white bg-secondary btn px-3 py-1 rounded position-absolute"
                                                style="top: 10px; left: 10px;" name="delete">

                                                Delete
                                            </button>

                                        </a>


                                        <a href="update_category.php?id=<?php echo $data['id'];?>" class="text-white" >
                                            
                                            <button class="btn text-white bg-secondary px-3 py-1 rounded position-absolute"
                                                style="top: 10px; left: 260px;">

                                                Update
                                            </button>

                                        </a>



                                        <div class='p-4 border border-secondary border-top-0 rounded-bottom'>
                                            <h4 class='text-center'>
                                                <?php
                                                echo $data["category_name"];
                                                ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <?php

                            }
                            ?>


                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fruits Shop End-->


<?php
include("footer.php")
?>





