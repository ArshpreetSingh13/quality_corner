<?php
include("heading.php")
?>


    <div class="container">
        <div class="thank-you-card">
            <div class="thank-you-icon">
                ✓
            </div>
            <h2 class="mb-3">Thank You!</h2>
            <p>We are thankfull to you for this review.</p>
            <a href="index.php" class="btn btn-outline-success btn-custom">Back Home</a>
        </div>
    </div>


<?php
include("footer.php")
?>

<?php

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$p_id=$_REQUEST['p_id'];
$reviews=$_REQUEST['reviews'];





include("config.php");
$query="INSERT INTO `review`( `Name`, `email`, `product_id`, `reviews`) VALUES ('$name','$email','$p_id','$reviews')";

$res=mysqli_query($db,$query);



?>



