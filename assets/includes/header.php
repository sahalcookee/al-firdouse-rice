<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Firdouse Rice</title>
    <link rel="icon" type="x-icon/image" href="assets/images/fav-icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header  -->
    <header class="px-0 px-md-4">
        <!-- desktop-nav  -->
        <div class="container-fluid d-none d-lg-block">
            <div id="desktop-nav-js" class="nav-bg about-nav-bg mt-4 row px-4 py-4 border border-1 border-top-0 border-bottom-0 mb-5">
                <div class="col-lg-4 d-flex">
                    <a class="text-decoration-none p-2 mx-2 text-dark nav-a <?php active('index.php');?>" href="index.php">Home</a>
                    <a class="text-decoration-none p-2 mx-3 text-dark nav-a <?php active('about.php');?>" href="about.php">About</a>
                    <a class="text-decoration-none p-2 mx-3 text-dark nav-a <?php active('brands.php');?>" href="#">Brands</a>
                </div>
                <div class="col-lg-4 text-center position-relative">
                    <a href="#"><img class="nav-logo-img position-absolute start-50 translate-middle" src="assets/images/logo.png" alt=""></a>
                </div>
                <div class="col-lg-4 justify-content-end d-flex">
                    <a class="text-decoration-none p-2 mx-2 text-dark nav-a <?php active('products.php');?>" href="#">Products Range</a>
                    <a class="text-decoration-none p-2 mx-3 text-dark nav-a <?php active('insights.php');?>" href="#">Insights</a>
                    <a class="text-decoration-none p-2 mx-3 text-dark nav-a <?php active('contacts.php');?>" href="#">Contacts</a>
                </div>
            </div>
        </div>
        <!-- responsive-nav  -->
        <nav class="navbar sticky-top d-lg-none">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="w-75 resp-logo" src="assets/images/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span><img class="resp-toggler" src="assets/images/toggler.png" alt=""></span>
                </button>
                <div class="offcanvas offcanvas-end resp-nav-bg" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img class="w-50" src="assets/images/logo.png" alt=""></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="align-items-center d-flex flex-column resp-nav-a-div">
                        <a class="text-decoration-none p-2 mx-2 text-dark nav-a <?php active('index.php');?>" href="index.php">Home</a>
                        <a class="text-decoration-none p-2 mx-3 text-dark nav-a <?php active('about.php');?>" href="about.php">About</a>
                        <a class="text-decoration-none p-2 mx-3 text-dark nav-a <?php active('brands.php');?>" href="#">Brands</a>
                        <a class="text-decoration-none p-2 mx-2 text-dark nav-a <?php active('products.php');?>" href="#">Products Range</a>
                        <a class="text-decoration-none p-2 mx-3 text-dark nav-a <?php active('insights.php');?>" href="#">Insights</a>
                        <a class="text-decoration-none p-2 mx-3 text-dark nav-a <?php active('contacts.php');?>" href="#">Contacts</a>
                    </div>
                </div>
                </div>
            </div>
        </nav>
    </header>