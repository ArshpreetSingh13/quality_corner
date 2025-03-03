<?php
include("heading.php")
    ?>

<!-- main start -->
<main>
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="p-5 bg-light rounded">
                <div class="row g-4">
                    <div class="  col-12">
                        <div class="text-center mx-auto" style="max-width: 700px;">
                            <h1 class="A text-primary">REGISTER</h1>

                        </div>
                    </div>

                    <div class="  col-lg-6 offset-3">
                        <form action="./backend/register.php" class=" B">

                            <!-- name -->
                            <input type="text" class="B w-100 form-control border-0 py-3 mb-4" placeholder="Your Name" name="name">

                            <!-- email -->
                            <input type="email" class="B w-100 form-control border-0 py-3 mb-4 " name="email"
                                placeholder="Enter Your Email">

                            <!-- password -->
                            <input type="password" class="B w-100 form-control border-0 py-3 mb-4" name="password"
                                placeholder="Enter Your password">

                            <!-- contact -->
                            <input type="number" class="B w-100 form-control border-0 py-3 mb-4 " name="contact"
                                placeholder="Contact">

                            <!-- city -->
                            <input type="text" class="B w-100 form-control border-0 py-3 mb-4" name="city"
                                placeholder="City">

                            <!-- pin -->
                            <input type="text" class="B w-100 form-control border-0 py-3 mb-4" name="pincode"
                                placeholder="Pincode">

                            <!-- address -->
                            <textarea class="B w-100 form-control border-0 mb-4" rows="5" A  cols="10" name="address"
                                placeholder="Address"></textarea>

                            <!-- button -->
                            <button class="B w-100 btn form-control border-secondary py-3 bg-white text-primary "
                                type="submit">Submit</button>
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