<?php

session_start();

if(!isset($_SESSION["email"])){
    echo "<script>window.location.assign('admin_login.php?msg=please Login ')</script>";
}
include("admin_heading.php") 
?>
<!-- Modal Search End -->


<!-- Single Page Header start -->
<div class="container-fluid page-header py-5 A">
    <h1 class="text-center text-white display-6">Shop</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Coupon</li>
    </ol>
</div>

<div class="container-fluid my-5 py-5">

<?php
        if (isset($_GET['msg'])) {
            echo "<div class='alert alert-primary text-center' role='alert'> $_GET[msg]</div>";
        }

        ?>
    <table class="table table-striped table-hover">
        <tr>
            <th>CODE</th>
            <th>Discount</th>
            <th>Type</th>
            <th>Terms</th>
            <th>Min-Amount</th>
            <th>Status</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <?php
        include("config.php");
        $query = " SELECT * FROM `coupon`";
        $res = mysqli_query($db, $query);
        while($data = mysqli_fetch_assoc($res)) {


            ?>

            <tr>
                <td><?php echo $data['code']; ?></td>
                <td><?php echo $data['discount']; ?></td>
                <td><?php echo $data['type']; ?></td>
                <td><?php echo $data['term']; ?></td>
                <td><?php echo $data['minamt']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td><a class="btn btn-primary text-white" href="update_coupon.php?id=<?php echo $data['id']; ?>">Update</a></td>
                <td><a class="btn btn-primary text-white" href="delete_coupon.php?id=<?php echo $data['id']; ?>">Delete</a></td>
            </tr>
            <?php
        }

        ?>

    </table>
</div>

<?php
include("footer.php")
    ?>