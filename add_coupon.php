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

                            <input type="text" required class="A w-100 form-control border-0 py-3 mb-4 " name="code"
                                placeholder="Enter Discount">



                                <select name="type" class="B w-100 form-control border-0 py-3 mb-4">
                                <option value="" disabled selected>Enter Your discount type </option>

                                <option value="">Flat </option>
                                <option value="">Rupees </option>

                            </select>







                            <!-- button -->
                            <button class="A w-100 btn form-control border-secondary py-3 bg-white text-primary "
                                type="submit">Submit</button>
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