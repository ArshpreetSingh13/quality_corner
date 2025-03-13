<?php
include("./heading.php");
?>

<main>
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="p-5 bg-light rounded A">
                <div class="row g-4">
                    <div class="  col-12">
                        <div class="text-center mx-auto" style="max-width: 700px;">
                        <?php
                        if(isset($_GET['msg'])){
                            echo "<div class='alert alert-primary' role='alert'> $_GET[msg]</div>";
                        }

                        ?>
                        
                            <h1 class="A text-primary">ADD YOUR NEW PRODUCT</h1>

                        </div>
                    </div>

                    <div class="  col-lg-6 offset-3">
                        <form  class=" A" method="post" enctype="multipart/form-data">

                       
                        
                      

                            <!-- category_name -->
                            <input type="text" required class="A w-100 form-control border-0 py-3 mb-4 " name="product_name"
                                placeholder="Enter Your Product Name" >

                            <!-- price -->
                            <input type="number" required class="A w-100 form-control border-0 py-3 mb-4 " name="price"
                                placeholder="Enter Your Price" >

                            <!--image -->
                            <input type="file" class="A w-100 form-control border-0 py-3 mb-4" name="image"
                                placeholder="Enter Your Image Name" required>

                            <textarea name="description" class="B w-100 form-control border-0 py-3 mb-4" required placeholder="Add Your Description"></textarea>

                            <select name="category" class="B w-100 form-control border-0 py-3 mb-4" >
                                <?php
                                include("config.php");

                                $query="select * from `category`";

                                $res=mysqli_query($db,$query);

                                while($data=mysqli_fetch_assoc($res)){

                                    ?>
                                    
                                    <option value="<?php 
                                    echo $data['id']; ?>"><?php 
                                    echo $data['category_name']; ?>
                                    </option>
                                    <?php
                                }
                                ?>

                            </select>



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
include("./footer.php")
?>




<?php
if(isset($_REQUEST["submit_btn"])){
    $product_name=$_REQUEST["product_name"];
    $price=$_REQUEST["price"];
    $image=$_FILES["image"];
    $description=$_REQUEST["description"];
    $category=$_REQUEST["category"];

    $tmp=$image["tmp_name"];

    $new_name=rand()."-".$image["name"];

    move_uploaded_file($tmp,"image/".$new_name);
    
   
    include("config.php");

    $query="INSERT INTO `products`( `product_name`, `price`, `category`, `image`, `description`) VALUES ('$product_name','$price','$new_name','$description','$category')";


    echo $query;

    // $res=mysqli_query($db,$query);

}

?>