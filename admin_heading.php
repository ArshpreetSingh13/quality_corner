<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fruitables - Vegetable Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">


        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/add.css" rel="stylesheet">
</head>

<body>

    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>

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
                    <a href="./pdf/Privacy Policy.pdf" download  class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                    <a href="./pdf/Terms.pdf" download  class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                    <a href="contect.php" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
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
                        <a href="dashboard.php" class="nav-item nav-link">Home</a>
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Category</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="add_category.php" class="dropdown-item">Add Category</a>
                                <a href="manage_category.php" class="dropdown-item">Manage Category</a>
                                
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Product</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="add_product.php" class="dropdown-item">Add Product</a>
                                <a href="manage_product.php" class="dropdown-item">Manage Product</a>
                                
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Coupon</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                               
                                <a href="add_coupon.php" class="dropdown-item">Add Coupon</a>
                                <a href="manage_coupon.php" class="dropdown-item">Manage Coupon</a>
                               
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">More...</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                               
                                 <a href="Requsts.php" class="dropdown-item">Requsts</a>
                                <a href="manage_order.php" class="dropdown-item">Orders</a>

                            </div>
                        </div>

                           <a href='Logout.php' class='nav-item nav-link'>Logout</a>

                    </div>
                    <div class="d-flex m-3 me-0">
                       
                       
                        <a href="login.php" class="my-auto">
                            <p><?php echo $_SESSION['email'];?></>
                            <i class="fas fa-user fa-2x"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
