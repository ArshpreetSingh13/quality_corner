<?php
include("admin_heading.php")
    ?>

<main>
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="p-5 bg-light rounded A">
                <div class="row g-4">
                    <div class="  col-12">
                        <div class="text-center mx-auto" style="max-width: 700px;">
                            <?php
                            if (isset($_GET['msg'])) {
                                echo "<div class='alert alert-primary' role='alert'> $_GET[msg]</div>";
                            }

                            ?>

                            <h1 class="A text-primary">ADD COUPON</h1>

                        </div>
                    </div>

                    <div class="  col-lg-6 offset-3">
                        <form class=" A" method="post" enctype="multipart/form-data">


                       


                            <!-- category_name -->
                            <input type="text" required class="A w-100 form-control border-0 py-3 mb-4 " name="code"
                                placeholder="Enter Code">
                                
                                <input type="number" required class="A w-100 form-control border-0 py-3 mb-4 " name="discount"
                                placeholder="Enter Discount">
<!-- 
                                <p>Enter Your Discount Type</p>                                
                                <label for="flat">flat</label>
                                <input type="radio" name="type"  value="flat" class="form-check-input">
                                <label for="flat">Discount</label>
                                <input type="radio" name="type" value="Rupees" class="form-check-input"> -->

                                <select name="type" class="B w-100 form-control border-0 py-3 mb-4">
                                    <option value="" disabled selected>Enter Your discount type </option>
                                    
                                    <option value="flat">Flat </option>
                                    <option value="rupees">Rupees </option>
                                    
                                </select>
                                
                                
                                <input type="text" required class="A w-100 form-control border-0 py-3 mb-4 " name="term"
                                    placeholder="Enter terms and condition">
                                    
                                    <input type="text" required class="A w-100 form-control border-0 py-3 mb-4 " name="minamt"
                                        placeholder="Enter Minimum Amount">




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
if($_REQUEST["submit_btn"]){
    $code=$_REQUEST["code"];
$discount=$_REQUEST["discount"];
$type=$_REQUEST["type"];
$term=$_REQUEST["term"];
$minamt=$_REQUEST["minamt"];

include("config.php");
$query="INSERT INTO `coupon`( `code`, `discount`, `type`, `term`, `minamt`) VALUES ('$code','$discount','$type','$term','$minamt')";

echo $query;
// $res=mysqli_query($db,$query);

// if($res>0){
//     echo "<script>window.location.assign('add_coupon.php?msg=coupon Added')</script>";
// }
// else{
//     echo "<script>window.location.assign('add_coupon.php?msg=coupon is not Added')</script>";
// }
}



?>