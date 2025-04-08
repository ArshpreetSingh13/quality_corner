<?php
session_start();
include("heading.php");
?>

<!-- Single Product Start -->
<div class="container-fluid pb-5  " data-aos="fade-up" data-aos-delay="100">
    <div class="container py-5">
        <?php
        $id = $_GET['id'];
        include("config.php");
        $Pquery = "SELECT products.* ,category.category_name FROM `products` INNER JOIN `category` ON products.category= category.id WHERE products.id='$id' ";
        $Pres = mysqli_query($db, $Pquery);
        $Pdata = mysqli_fetch_assoc($Pres);


        ?>
        <div class="row g-4 mb-5">
            <?php
            if (isset($_GET['msg'])) {
                echo "<div class='alert alert-primary' role='alert'> $_GET[msg]</div>";
            }

            ?>
            <div class="col-lg-8 col-xl-9 ">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="border rounded">
                            <a href="#">

                                <img src="images/<?php echo $Pdata['image'] ?>" class=" img-fluid rounded" alt="Image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h4 class="fw-bold mb-3"><?php echo $Pdata['product_name'] ?></h4>
                        <p class="mb-3">Category: <?php echo $Pdata['category_name'] ?></p>
                        <h5 class="fw-bold mb-3">&#8377; <?php echo $Pdata['price'] ?></h5>

                        <p class="mb-4"><?php echo $Pdata['description'] ?></p>





                        <form>
                            <input type="hidden" value="<?php echo $Pdata['id'] ?>" name="pid">

                            <input type="hidden" value="<?php echo $Pdata['price'] ?>" name="price">

                            <input type="hidden" value="<?php echo $_GET['id'] ?>" name="pageid">

                            <input type="hidden" value="<?php echo $_GET['cid'] ?>" name="cid">
                            
                            <button class="btn border border-secondary   rounded-pill px-3 py-1 mb-4 text-primary"
                                name="submit_btn"><i class="fa fa-shopping-bag  me-2 text-primary"></i> Add to
                                cart</button>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <nav>
                            <div class="nav nav-tabs mb-3">
                                <button class="nav-link active border-white border-bottom-0" type="button" role="tab"
                                    id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                                    aria-controls="nav-about" aria-selected="true">Description</button>
                                <button class="nav-link border-white border-bottom-0" type="button" role="tab"
                                    id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission"
                                    aria-controls="nav-mission" aria-selected="false">Reviews</button>
                            </div>
                        </nav>
                        <div class="tab-content mb-5">
                            <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                <p><?php echo $Pdata['description'] ?></p>


                            </div>
                            <div class="tab-pane" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                <div class="d-flex">
                                    <img src="img/avatar.jpg" class="img-fluid rounded-circle p-3"
                                        style="width: 100px; height: 100px;" alt="">
                                    <div class="">
                                        <p class="mb-2" style="font-size: 14px;">April 12, 2024</p>
                                        <div class="d-flex justify-content-between">
                                            <h5>Jason Smith</h5>

                                        </div>
                                        <p>The generated Lorem Ipsum is therefore always free from repetition
                                            injected
                                            humour, or non-characteristic
                                            words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <img src="img/avatar.jpg" class="img-fluid rounded-circle p-3"
                                        style="width: 100px; height: 100px;" alt="">
                                    <div class="">
                                        <p class="mb-2" style="font-size: 14px;">April 12, 2024</p>
                                        <div class="d-flex justify-content-between">
                                            <h5>Sam Peters</h5>

                                        </div>
                                        <p class="text-dark">The generated Lorem Ipsum is therefore always free from
                                            repetition injected humour, or non-characteristic
                                            words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-vision" role="tabpanel">
                                <p class="text-dark">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et
                                    tempor
                                    sit. Aliqu diam
                                    amet diam et eos labore. 3</p>
                                <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos
                                    labore.
                                    Clita erat ipsum et lorem et sit</p>
                            </div>
                        </div>
                    </div>
                    <form action="#">
                        <h4 class="mb-5 fw-bold">Leave a Reply</h4>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="border-bottom rounded">
                                    <input type="text" class="form-control border-0 me-4" placeholder="Yur Name *">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="border-bottom rounded">
                                    <input type="email" class="form-control border-0" placeholder="Your Email *">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="border-bottom rounded my-4">
                                    <textarea name="" id="" class="form-control border-0" cols="30" rows="8"
                                        placeholder="Your Review *" spellcheck="false"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-between py-3 mb-5">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 me-3">Please rate:</p>
                                        <div class="d-flex align-items-center" style="font-size: 12px;">
                                            <i class="fa fa-star text-muted"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="btn border border-secondary text-primary rounded-pill px-4 py-3">
                                        Post Comment</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <h1 class="fw-bold mb-0">Related products</h1>
        <div class="vesitable">
            <div class="owl-carousel vegetable-carousel justify-content-center">
                <?php
                $cid = $_GET['cid'];
                $query = "SELECT products.* ,category.category_name FROM `products` INNER JOIN `category` ON products.category= category.id WHERE products.category='$cid'";
               
                $res = mysqli_query($db, $query);
                while ($data = mysqli_fetch_assoc($res)) {

                    ?>

                    <div class="border border-primary rounded position-relative vesitable-item">

                        <a href="single_product.php?id=<?php echo $data['id']?>&cid=<?php echo $cid ?>">
                            <div class="vesitable-img">
                            <img src="images/<?php echo $data['image'] ?>" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            
                            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">
                                <?php echo $data['category_name'] ?>
                            </div>
                            
                            <div class="p-4 pb-0 rounded-bottom">
                                <h4><?php echo $data['product_name'] ?></h4>
                                <p><?php echo $data['description'] ?></p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold">&#8377;<?php echo $data['price'] ?></p>
                            
                            
                                    <form>
                                        
                                        <input type="hidden" value="<?php echo $data['id'] ?>" name="pid">

                                        <input type="hidden" value="<?php echo $_GET['cid'] ?>" name="cid">
                            
                                        <input type="hidden" value="<?php echo $data['price'] ?>" name="price">
                            
                                        <input type="hidden" value="<?php echo $_GET['id'] ?>" name="pageid">
                            
                                        <button class="btn border border-secondary   rounded-pill px-3 py-1 mb-4 text-primary" name="submit_btn"><i
                                                class="fa fa-shopping-bag  me-2 text-primary"></i> Add to
                                            cart</button>
                                    </form>
                                </div>
                            </div>
                        </a>
                    </div>

                    <?php
                }
                ?>





            </div>
        </div>
    </div>
</div>
</div>
<!-- Single Product End -->


<?php
include("footer.php")
    ?>

<?php



if (isset($_REQUEST['submit_btn'])) {


    include("config.php");
    $email = $_SESSION['email'];
    $pid = $_REQUEST['pid'];
    $pageid = $_REQUEST['pageid'];
    $cid=$_REQUEST['cid'];
    echo $cid;

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

    echo "<script>window.location.assign('single_product.php?id=$pageid&msg=Added to cart&cid=$cid ')</script>";

}



?>