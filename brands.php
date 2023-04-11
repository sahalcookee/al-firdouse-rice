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
                            <h4 class="about-banner-about text-white fs-3 mb-0 mb-md-5 pb-5 pt-5 mt-3">Brands</h4>
                            <p class="about-banner-p-1 text-uppercase pt-2">Quality rice, grown with care.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 order-1 order-md-0 align-self-end">
                        <img class="img-fluid abt-ban-img" src="assets/images/about-banner-img.png" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3 class="about-banner-h text-white mt-0 mt-md-5 pt-4">Discover our range of high-quality rice brands.</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-end abt-ban-butn-d">
            <a class="h-banner-butn text-decoration-none p-3 fs-5 rounded rounded-5 text-white abt-ban-btn" href="#">Our Products <img class="ps-2 butn-arrow" src="assets/images/h-banner-butn-arrow.svg" alt=""></a>
        </div>
    </section>
    
    <!-- section-1  -->
    <section class="py-5">
        <div class="container">
            <p class="abt-s1-p fs-2 py-4 py-lg-5 mt-3 mb-0">From our family to yours, our rice brands are chosen with care and a commitment to excellence in taste, texture, and nutrition.</p>
            <div class="mt-1 d-flex align-items-center justify-content-around justify-content-lg-between flex-wrap">
                <img class="py-3" src="assets/images/brd-firdous-logo.svg" alt="">
                <img class="py-3" src="assets/images/brd-alhind-logo.svg" alt="">
                <img class="py-3" src="assets/images/brd-aliflaila-logo.svg" alt="">
                <img class="py-3" src="assets/images/brd-akbarcity-logo.svg" alt="">
                <img class="py-3" src="assets/images/brd-abusalam-logo.svg" alt="">
            </div>
        </div>
    </section>

    <!-- section-2  -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="brd-card-div bg-white rounded rounded-5">
                        <div class="d-flex justify-content-around p-5">
                            <div class="text-center">
                                <img class="img-fluid brd-pro-img" src="assets/images/brd-firdous-rice.png" alt="">
                                <p class="about-banner-p-1 mt-3 text-black">Product Title</p>
                            </div>
                        </div>
                        <span class="brd-card-span w-100 d-block position-relative">
                            <div class="brd-card-logo-div position-absolute translate-middle d-flex align-items-center justify-content-center p-2">
                                <img class="img-fluid" src="assets/images/brd-firdous-logo.svg" alt="">
                            </div>
                        </span>
                        <div class="p-5 position-relative overflow-hidden">
                            <p class="abt-s1-p1 brd-card-h1 text-uppercase mt-4">Always reliable, always delicious</p>
                            <h4 class="abt-s1-h brd-card-h2">Al Firdous Rice</h4>
                            <img class="brd-card-grain position-absolute end-0" src="assets/images/about-banner-img.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="brd-card-div bg-white rounded rounded-5">
                        <div class="d-flex justify-content-around p-5 flex-wrap flex-md-nowrap">
                            <div class="text-center py-3 py-md-0">
                                <img class="img-fluid brd-pro-img" src="assets/images/brd-alhind-rice-1.png" alt="">
                                <p class="about-banner-p-1 mt-3 text-black">Product Title</p>
                            </div>
                            <div class="text-center py-3 py-md-0">
                                <img class="img-fluid brd-pro-img" src="assets/images/brd-alhind-rice-2.png" alt="">
                                <p class="about-banner-p-1 mt-3 text-black">Product Title</p>
                            </div>
                        </div>
                        <span class="brd-card-span w-100 d-block position-relative">
                            <div class="brd-card-logo-div position-absolute translate-middle d-flex align-items-center justify-content-center p-2">
                                <img class="img-fluid" src="assets/images/brd-alhind-logo.svg" alt="">
                            </div>
                        </span>
                        <div class="p-5 position-relative overflow-hidden">
                            <p class="abt-s1-p1 brd-card-h1 text-uppercase mt-4">experience pure flavour</p>
                            <h4 class="abt-s1-h brd-card-h2">Al Hind Rice</h4>
                            <img class="brd-card-grain position-absolute end-0" src="assets/images/about-banner-img.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="brd-card-div bg-white rounded rounded-5">
                        <div class="d-flex justify-content-around p-5">
                            <div class="text-center">
                                <img class="img-fluid brd-pro-img" src="assets/images/brd-abusalam-rice.png" alt="">
                                <p class="about-banner-p-1 mt-3 text-black">Product Title</p>
                            </div>
                        </div>
                        <span class="brd-card-span w-100 d-block position-relative">
                            <div class="brd-card-logo-div position-absolute translate-middle d-flex align-items-center justify-content-center p-3">
                                <img class="img-fluid" src="assets/images/brd-abusalam-logo.svg" alt="">
                            </div>
                        </span>
                        <div class="p-5 position-relative overflow-hidden">
                            <p class="abt-s1-p1 brd-card-h1 text-uppercase mt-4">A commitment to quality</p>
                            <h4 class="abt-s1-h brd-card-h2">Abu Salam Rice</h4>
                            <img class="brd-card-grain position-absolute end-0" src="assets/images/about-banner-img.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="brd-card-div bg-white rounded rounded-5">
                        <div class="d-flex justify-content-around p-5">
                            <div class="text-center">
                                <img class="img-fluid brd-pro-img" src="assets/images/brd-aliflaila-rice.png" alt="">
                                <p class="about-banner-p-1 mt-3 text-black">Product Title</p>
                            </div>
                        </div>
                        <span class="brd-card-span w-100 d-block position-relative">
                            <div class="brd-card-logo-div position-absolute translate-middle d-flex align-items-center justify-content-center p-2">
                                <img class="img-fluid" src="assets/images/brd-aliflaila-logo.svg" alt="">
                            </div>
                        </span>
                        <div class="p-5 position-relative overflow-hidden">
                            <p class="abt-s1-p1 brd-card-h1 text-uppercase mt-4">Savor the excellence in every bite</p>
                            <h4 class="abt-s1-h brd-card-h2">Alif Laila Rice</h4>
                            <img class="brd-card-grain position-absolute end-0" src="assets/images/about-banner-img.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="brd-card-div bg-white rounded rounded-5">
                        <div class="d-flex justify-content-around p-5 flex-wrap flex-md-nowrap">
                            <div class="text-center py-3 py-md-0">
                                <img class="img-fluid brd-pro-img" src="assets/images/brd-akbarcity-rice-1.png" alt="">
                                <p class="about-banner-p-1 mt-3 text-black">Product Title</p>
                            </div>
                            <div class="text-center py-3 py-md-0">
                                <img class="img-fluid brd-pro-img" src="assets/images/brd-akbarcity-rice-2.png" alt="">
                                <p class="about-banner-p-1 mt-3 text-black">Product Title</p>
                            </div>
                            <div class="text-center py-3 py-md-0">
                                <img class="img-fluid brd-pro-img" src="assets/images/brd-akbarcity-rice-3.png" alt="">
                                <p class="about-banner-p-1 mt-3 text-black">Product Title</p>
                            </div>
                            <div class="text-center py-3 py-md-0">
                                <img class="img-fluid brd-pro-img" src="assets/images/brd-akbarcity-rice-4.png" alt="">
                                <p class="about-banner-p-1 mt-3 text-black">Product Title</p>
                            </div>
                        </div>
                        <span class="brd-card-span w-100 d-block position-relative">
                            <div class="brd-card-logo-div position-absolute translate-middle d-flex align-items-center justify-content-center p-3">
                                <img class="img-fluid" src="assets/images/brd-akbarcity-logo.svg" alt="">
                            </div>
                        </span>
                        <div class="p-5 position-relative overflow-hidden">
                            <p class="abt-s1-p1 brd-card-h1 text-uppercase mt-4">Perfection in every kernel</p>
                            <h4 class="abt-s1-h brd-card-h2">Akbar City Rice</h4>
                            <img class="brd-card-grain position-absolute end-0" src="assets/images/about-banner-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>


</body>
</html>