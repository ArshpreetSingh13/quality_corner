<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fruitables - Vegetable Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/add.css" rel="stylesheet">
    <style>
    .thank-you-card {
      max-width: 500px;
      margin: 100px auto;
      padding: 30px;
      text-align: center;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      border-top: 5px solid #198754; /* Bootstrap's success green */
      border-radius: 10px;
      background-color: #ffffff;
    }
    .thank-you-icon {
      font-size: 60px;
      color: #198754;
      margin-bottom: 20px;
    }
    .btn-custom {
      margin-top: 20px;
      color: #198754;
      border-color: #198754;
    }
    .btn-custom:hover {
      background-color: #198754;
      color: #fff;
    }
  </style>
</head>

<body>



    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->






    <!-- Navbar start -->
    <div class="container-fluid sticky-top bg-white mt-2 A">

        <div class="container  topbar bg-primary d-none d-lg-block">

            <div class="d-flex justify-content-between">

                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#"
                            class="text-white"> 102 Quality Corner, Sarai Khas, Kartarpur</a></small>
                    <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#"
                            class="text-white">qualitycorner@gmail.com</a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="./pdf/Privacy Policy.pdf" download class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                    <a href="./pdf/Terms.pdf" download class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                    <a href="contact.php" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
                </div>
            </div>
        </div>
        <div class="container px-0 ">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="index.php" class="navbar-brand">
                    <h1 class="text-primary display-6">QUALITY CORNER</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="categories.php" class="nav-item nav-link">Categories</a>

                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="order_history.php" class="nav-item nav-link">Orders</a>

                        <?php

                        if (isset($_SESSION["email"])) {


                            echo " <a href='Logout.php' class='nav-item nav-link'>Logout</a>";
                        } else {
                            echo "<div class='nav-item dropdown'>
                            <a href='#' class='nav-link dropdown-toggle 'data-bs-toggle='dropdown'>Login</a>
                            <div class='dropdown-menu m-0 bg-secondary rounded-0'>
                                <a href='admin_login.php' class='dropdown-item'>Admin login</a>
                                <a href='login.php' class='dropdown-item'>Login</a>
                                
                            </div>
                        </div>";
                            
                        }

                        ?>





                    </div>
                    <div class="d-flex m-3 me-0">

                        <a href="cart.php" class="position-relative me-4 my-auto">
                            <i class="fa fa-shopping-bag fa-2x"></i>
                            <?php

                            include("config.php");

                            if (isset($_SESSION["email"])) {
                                $email = $_SESSION['email'];

                                $query = "SELECT count(*) as total From `cart` WHERE `name` = '$email'";

                                $res = mysqli_query($db, $query);
                                $data = mysqli_fetch_assoc($res);

                                ?>
                                <span
                                    class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                                    style="top: -5px; left: 15px; height: 20px; min-width: 20px;"><?php echo $data['total'] ?></span>
                                <?php
                            } 
                            ?>

                        </a>
                        <a href="login.php" class="my-auto">
                       
                            <i class="fas fa-user fa-2x"></i>
                        </a>
                        <?php 
                        if(isset($_SESSION['email'])){
                            ?>
                            <p class="pt-4 ps-2"><?php echo $_SESSION['email'];?></p>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->