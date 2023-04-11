<?php include 'assets/includes/header.php';?>
<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active-nav';
  } 
}
?>
    
    <!-- banner  -->
    <section>
        <div class="about-banner-sec rounded-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="mt-0 mt-md-5 pt-3">
                            <h4 class="about-banner-about text-white fs-3 mb-0 mb-md-5 pb-5 pt-5 mt-3">About Us</h4>
                            <p class="about-banner-p-1 text-uppercase pt-2">Quality rice, grown with care.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 order-1 order-md-0 align-self-end">
                        <img class="img-fluid abt-ban-img" src="assets/images/about-banner-img.png" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3 class="about-banner-h text-white mt-0 mt-md-5 pt-4">Experience the taste of premium rice with every grain.</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-end abt-ban-butn-d">
            <a class="h-banner-butn text-decoration-none p-3 fs-5 rounded rounded-5 text-white abt-ban-btn" href="brands.php">Our Products <img class="ps-2 butn-arrow" src="assets/images/h-banner-butn-arrow.svg" alt=""></a>
        </div>
    </section>
    
    <!-- section-1  -->
    <section class="py-5">
        <div class="container">
            <p class="abt-s1-p fs-2 my-4 my-lg-5 py-3">We are a company that specializes in bringing you the finest products under five distinct brands - Akbar, Alhind, Alif Laila, Firdous, and Abusalam. Each brand has its unique focus, but all are united by a passion for quality and excellence.</p>
            <div class="rounded-5 bg-white position-relative">
                <div class="row">
                    <div class="col-lg-7 text-start p-5">
                        <p class="abt-s1-p1 text-uppercase">Quality You Can Count On</p>
                        <h3 class="abt-s1-h mb-4 mb-lg-5 pb-4 pb-lg-5">Healthy, Nutritious Rice for Every Meal</h3>
                        <div class="pt-4 pt-lg-5 ms-4 ps-2 mb-5">
                            <a class="h-banner-butn text-decoration-none p-3 fs-5 rounded rounded-5 text-white" href="brands.php">Our Products <img class="ps-2 butn-arrow" src="assets/images/h-banner-butn-arrow.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img class="img-fluid abt-s1-img" src="assets/images/about-s1-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section-2  -->
    <section class="py-5">
        <div class="container">
            <h3 class="main-head h-s2-h text-center mx-auto mb-3 mb-lg-2">Our Vision & Mission</h3>
            <div class="row align-items-center">
                <div class="col-lg-4 order-1 order-lg-0">
                    <h6 class="fs-5 about-banner-p-1 text-black mb-3">Vision</h6>
                    <p class="about-banner-p-1">To be a leading global producer of high-quality, sustainably grown rice that nourishes people while protecting the environment.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <img class="img-fluid abt-s2-img" src="assets/images/about-s2-img.png" alt="">
                </div>
                <div class="col-lg-4">
                    <h6 class="fs-5 about-banner-p-1 text-black mb-3">Mission</h6>
                    <p class="about-banner-p-1">We are committed to producing rice that meets the highest standards of quality, taste, and nutrition, while also minimizing our environmental impact.</p>
                </div>
            </div>
                <div class="text-end mb-5 abt-s2-arrow d-none d-lg-block">
                    <img src="assets/images/about-s2-arrow.png" alt="">
                </div>
            <div class="row align-items-center">
                <div class="col-lg-3 col-6 text-center my-5 my-lg-0">
                    <img class="img-fluid" src="assets/images/about-s2-img-1.png" alt="">
                </div>
                <div class="col-lg-6 order-1 order-lg-0">
                    <ul class="abt-s2-ul abt-s1-p ps-5 pe-4">
                        <li class="py-2">Sourcing our rice from carefully selected farmers who use sustainable, eco-friendly growing practices.</li>
                        <li class="py-2">Investing in advanced technologies and processes to improve our rice production efficiency and quality.</li>
                        <li class="py-2">Working closely with our customers and partners to understand their needs and provide them with the best possible rice products and services.</li>
                        <li class="py-2">Contributing to the well-being of our communities by supporting local farmers, promoting healthy diets, and protecting the environment.</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 text-center my-5 my-lg-0">
                    <img class="img-fluid" src="assets/images/about-s2-img-2.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>

</body>
</html>