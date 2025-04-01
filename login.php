<?php
 session_start();
include("heading.php")
    ?>

<!-- main start -->
<main>
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="p-5 bg-light rounded A">
                <div class="row g-4">
                    <div class="  col-12">
                        <div class="text-center mx-auto" style="max-width: 700px;">
                            <h1 class="A text-primary">LOGIN</h1>

                        </div>
                    </div>

                    <div class="  col-lg-6 offset-3">
                        <form  class=" A" method="post">

                        <?php
                        if(isset($_GET['msg'])){
                            echo "<div class='alert alert-primary' role='alert'> $_GET[msg]</div>";
                        }
                        
                        ?>


                            <!-- email -->
                            <input type="email" class="A w-100 form-control border-0 py-3 mb-4 " name="email"
                                placeholder="Enter Your Email">

                            <!-- password -->
                            <input type="password" class="A w-100 form-control border-0 py-3 mb-4" name="password"
                                placeholder="Enter Your password">

                            <div class="d-flex justify-content-end">
                                <a href="register.php" >Register Here? </a>
                                <p>if new user</p>
                            </div>



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
<!-- main end -->


<?php
include("footer.php")
    ?>

<?php
if(isset($_REQUEST['submit_btn'])){

   
    $email=$_REQUEST["email"];
    $password=md5($_REQUEST["password"]);
include("config.php");
$query="SELECT * from `admin` where `email`='$email' and `password`='$password'";

$res=mysqli_query($db,$query);

    if(mysqli_num_rows($res)>0){

        session_start();

        $_SESSION["email"]=$email;
        $_SESSION["password"]=$password;

        echo "<script>window.location.assign('index.php')</script>";
    }
    else{
        echo "<script>window.location.assign('login.php?msg=Invaild creeds')</script>";
    }
}
?>