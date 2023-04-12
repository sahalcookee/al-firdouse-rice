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
                            <h4 class="about-banner-about text-white fs-3 mb-0 mb-md-5 pb-5 pt-5 mt-3">Contact Us</h4>
                            <p class="about-banner-p-1 text-uppercase pt-2">Quality rice, grown with care.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 order-1 order-md-0 align-self-end">
                        <img class="img-fluid abt-ban-img" src="assets/images/about-banner-img.png" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3 class="about-banner-h text-white mt-0 mt-md-5 pt-4">Send us a grain of thought or a spoonful of feedback.</h3>
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
        <div class="container pt-3">
            <div class="bg-white rounded-5 my-5">
                <div class="row">
                    <div class="col-lg-7 p-5 text-start position-relative">
                        <p class="abt-s1-p1 text-uppercase">Get in touch with the Rice Experts</p>
                        <h3 class="abt-s1-h mb-3 mb-lg-5 pb-3">Contact<br>Information</h3>
                        <a href="#" class="footer-p fs-5 d-block text-decoration-none mb-3">667,GROUNDFLOOR,SECTOR4,KARNAL,HARIYANA,PIN 132001</a>
                        <a href="tel:7736877685" class="footer-p fs-5 d-block text-decoration-none mb-3">+91 7736877685</a>
                        <a href="mailto:info@alfirdousrice.com" class="footer-p fs-5 d-block text-decoration-none mb-3">info@alfirdousrice.com</a>
                        <h6 class="about-banner-p-1 cnt-s1-follow mb-1 text-uppercase mt-3 mt-lg-5 pt-5">follow us on</h6>
                        <div class="d-flex justify-content-start my-3">
                            <a class="me-4 footer-social" href="https://www.facebook.com/alfirdousrice" target="_blank"><img src="assets/images/footer-facebook.png" alt=""></a>
                            <a class="me-4 footer-social" href="https://www.instagram.com/alfirdous_foods/" target="_blank"><img src="assets/images/footer-insta.png" alt=""></a>
                            <a class="me-4 footer-social" href="#"><img src="assets/images/footer-youtube.png" alt=""></a>
                        </div>
                        <img class="position-absolute bottom-0 end-0" src="assets/images/h-s1-grain-img.png" alt="">
                    </div>
                    <div class="col-lg-5">
                        <div class="cnt-form-div p-3 p-sm-5 rounded-5 position-relative">
                            <form action="" method="">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Name" required>
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="floatingInput" placeholder="Phone" required>
                                    <label for="floatingInput">Phone</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="Email" required>
                                    <label for="floatingInput">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control cnt-text-area" id="floatingInput" placeholder="Message"></textarea>
                                    <label for="floatingInput">Message</label>
                                </div>
                                <div class="text-end cnt-form-btn-div position-absolute">
                                    <button class="h-banner-butn text-decoration-none p-3 fs-5 rounded rounded-5 text-white abt-ban-btn" href="#">Send Message<img class="ps-2 butn-arrow" src="assets/images/h-banner-butn-arrow.svg" alt=""></button>
                                </div>
                            </form>
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