<?php

session_start();

if(!isset($_SESSION["email"])){
    echo "<script>window.location.assign('admin_login.php?msg=please Login ')</script>";

}

include("admin_heading.php");
?>
<div class="container-fluid fruite py-5">
    <div class="container py-5">








        <div class="row g-4">

            <div class="col-lg-12">







                <?php

                include("config.php");

                $query = "SELECT COUNT(*) as total from `user`";
                
                $res = mysqli_query($db, $query);
                
                $data = mysqli_fetch_assoc($res);
               




                ?>

                <div class="card p-3 d-flex align-items-center justify-content-center " style="width: 15rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_cI8XvIPNjB7OKnQfHkoW1VzccjslgqC2ag&s"
                        class="card-img-top  img-fluid w-50" alt="...">

                    <h5 class=" my-2">USER</h5>
                    <a href="#" class="btn btn-primary"><?php echo $data['total']; ?></a>

                </div>







            </div>
        </div>
    </div>
</div>


<?php
include("footer.php");
?>