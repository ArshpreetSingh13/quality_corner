<?php
include("heading.php");
?>


<main class="A">
    <?php
        include("./config.php");

        $query="SELECT * FROM `category`";

        $res=mysqli_query($db,$query);

        $row=mysqli_num_rows($res);

        if($row>0){
            foreach($res as $d){
                print_r( $d['category_name']);
                echo "<br>";
            }
        }

    ?>
</main>

<h1 class="A"><a href="./shop.php">for category in main page click here</a></h1>


<?php
include("footer.php");
?>