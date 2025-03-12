<?php
include("heading.php");
?>


<main class="A">
<?php
                                        include("config.php");

                                        $query = "SELECT * FROM `category`";

                                        $res = mysqli_query($db, $query);


                                        while ($data = mysqli_fetch_assoc($res)) {
                                            

                                            
                                            echo $data["category_name"],"<br>";
                                        
                                        }
                                        ?>
</main>

<h1 class="A"><a href="./shop.php">for category in main page click here</a></h1>


<?php
include("footer.php");
?>