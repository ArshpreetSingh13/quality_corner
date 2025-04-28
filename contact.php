<?php
session_start();

include("heading.php");
?>
        <!-- Single Page Header End -->
<div class="container-fluid page-header py-5 A ">
    <h1 class="text-center text-white display-6">Quality Corner</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        
        <li class="breadcrumb-item active text-white">Contact</li>
    </ol>
</div>

        <!-- Contact Start -->
        <div class="container-fluid contact py-5 A">
            <div class="container py-5">
                <div class="p-5 bg-light rounded">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="text-center mx-auto" style="max-width: 700px;">
                                <h1 class="text-primary">Get in touch</h1>
                                <?php
                        if(isset($_GET['msg'])){
                            echo "<div class='alert alert-primary' role='alert'> $_GET[msg]</div>";
                        }

                        ?>
                               
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="h-100 rounded w-100">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d27243.4132504652!2d75.516023!3d31.402369000000004!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2sin!4v1745736570237!5m2!1sen!2sin" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <form action="" class=" B">
                                <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="Your Name" name="name">
                                <input type="email" class="w-100 form-control border-0 py-3 mb-4" placeholder="Enter Your Email" name="email">
                                <textarea class="w-100 form-control border-0 mb-4" rows="5" cols="10" placeholder="Your Message" name="text"></textarea>
                                <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary " type="submit" name="submmit_btn">Submit</button>
                            </form>
                        </div>
                        <div class="col-lg-5 B">
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Address</h4>
                                    <p class="mb-2"> 102 Quality Corner, Sarai Khas, Kartarpur</p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Mail Us</h4>
                                    <p class="mb-2">qualitycorner@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="mb-2">9501154841</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <?php
    include("footer.php")
?>

<?php
if(isset($_REQUEST['submmit_btn'])){
   $name=$_REQUEST['name'];
   $email=$_REQUEST['email'];
   $text=$_REQUEST['text'];

    include("config.php");
    $query="INSERT INTO `contectus`( `name`, `email`, `text`) VALUES ('$name','$email','$text')";
    $res=mysqli_query($db,$query);

    if ($res > 0) {
        echo "<script>window.location.assign('contect.php?msg=Request Submitted')</script>";
    } else {
        echo "<script>window.location.assign('contect.php?msg=Request Cancled')</script>";
    }

}

?>