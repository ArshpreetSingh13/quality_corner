<?php
include("heading.php");
?>
<!-- Modal Search End -->


<!-- Single Page Header start -->
<div class="container-fluid page-header py-5 A ">
    <h1 class="text-center text-white display-6">Shop</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Category</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Fruits Shop Start-->
<div class="container-fluid fruite py-5 ">
    <div class="container py-5">
        <h1 class="mb-4 A">Grocery shop</h1>
        <div class="row g-4">
            <div class="col-lg-12">
                





                <div class="row g-4 ">

                    <div class="col-lg-12">
                        <div class="row g-4 justify-content-center">







                            <?php
                            include("config.php");

                            $query = "SELECT * FROM `category`";

                            $res = mysqli_query($db, $query);


                            while ($data = mysqli_fetch_assoc($res)){

                                ?>

                                
                                <div class="col-md-6 col-lg-6 col-xl-4  A">
                                    <div class="rounded position-relative fruite-item ">
                                    <a class="" href="product.php?id=<?php echo $data['id'];?>">
                                        <div class="fruite-img">
                                            <img src="category_image/<?php 
                                             echo $data['image'];
                                            ?>" class="img-fluid rounded-top" alt="">
                                        </div>

                                        <div class='p-4 border border-secondary border-top-0 rounded-bottom'>
                                            <h4 class='text-center'>
                                                <?php
                                                echo $data["category_name"];
                                                ?>
                                            </h4>
                                        </div>
                                        </a>
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