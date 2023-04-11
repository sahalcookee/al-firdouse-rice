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
    <section class="pt-1 pt-lg-5">
        <div class="container">
            <div class="mt-1 mt-lg-5 pt-2 pt-lg-3">
                <img class="banner-rice1-img text-center position-absolute" src="assets/images/h-banner-rice-1.png" alt="">
                <img class="banner-rice2-img text-center position-absolute" src="assets/images/h-banner-rice-2.png" alt="">
                <div class="position-relative text-center">
                    <h3 class="main-head h-banner-h-width banner-h-fs text-center mx-auto">Discover the Secret to Perfect Rice Every Time!</h3>
                    <div class="text-center text-lg-end h-banner-butn-div mb-5 mb-sm-0">
                        <a class="h-banner-butn text-decoration-none p-3 fs-5 rounded rounded-5 text-white" href="brands.php">Our Products <img class="ps-2 butn-arrow" src="assets/images/h-banner-butn-arrow.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- section-1  -->
    <section class="px-0 px-sm-4">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-12 text-center">
                    <img class="img-fluid" src="assets/images/banner-img.png" alt="">
                </div>
                <div class="col-12">
                    <div class="bg-white rounded-5 p-4 p-lg-5 h-s1-div position-relative">
                        <p class="h-s1-p fs-3 mx-auto pt-5 pb-4 text-center">We are a company that specializes in bringing you the finest products under five distinct brands - Akbar, Alhind, Alif Laila, Firdous, and Abusalam. Each brand has its unique focus, but all are united by a passion for quality and excellence.</p>
                        <p class="h-s1-p2 mx-auto pb-4 text-center">With our years of experience in the industry, we have become experts in bringing you the very best in [mention the types of products you offer]. Our commitment to exceptional quality, attention to detail, and customer satisfaction has made us a trusted name in the industry. Thank you for choosing our products, and we look forward to bringing you the very best that our brands have to offer.</p>
                            <div class="z-3 position-relative my-5 text-center">
                                <a class="h-banner-butn text-decoration-none p-3 fs-5 rounded rounded-5 text-white" href="about.php">Read our story <img class="ps-2 butn-arrow" src="assets/images/h-banner-butn-arrow.svg" alt=""></a>
                            </div>
                        <img class="position-absolute h-s1-grain-img-1" src="assets/images/h-s1-grain-img.png" alt="">
                        <img class="position-absolute h-s1-grain-img-2" src="assets/images/h-s1-grain-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section-2  -->
    <section class="py-5">
        <div class="container">
            <div class="mt-4 position-relative">
                <h3 class="main-head h-s2-h h-s2-h-width text-center mx-auto">Take a Look at What We Offer</h3>
                <div class="position-absolute h-s2-ar-brand-div d-none d-sm-block">
                    <div class="position-relative">
                        <span class="position-absolute h-s2-brands fs-4">Brands</span>
                        <img class="position-absolute h-s2-arrow" src="assets/images/h-s2-arrow.png" alt="">
                    </div>
                </div>
            </div>
            <div>
                <div class="text-center d-flex my-5 justify-content-center" id="myBtnContainer">
                    <a class="h-s2-filter-h text-decoration-none d-inline-bock fs-5 rounded border mx-2 active" id="filter-clicked" onclick="filterSelection('akbar')">Akbar</a>
                    <a class="h-s2-filter-h text-decoration-none d-inline-bock fs-5 rounded border mx-2" onclick="filterSelection('alhind')">Alhind</a>
                    <a class="h-s2-filter-h text-decoration-none d-inline-bock fs-5 rounded border mx-2" onclick="filterSelection('alif-laila')">Alif Laila</a>
                    <a class="h-s2-filter-h text-decoration-none d-inline-bock fs-5 rounded border mx-2" onclick="filterSelection('firdous')">Firdous</a>
                    <a class="h-s2-filter-h text-decoration-none d-inline-bock fs-5 rounded border mx-2" onclick="filterSelection('abusalam')">Abusalam</a>
                </div>
                <div class="row gy-3 gy-sm-5 gx-0">
                    <div class="col-lg-6 col-md-6 col-sm-6 bg-white d-flex rounded-start-5 h-s2-product-div filterDiv overflow-hidden akbar">
                        <div class="p-5 pe-0 align-self-end h-s2-fliter-text-div">
                            <h4 class="h-s2-product-h fs-3 mb-3">Akbar xxl gold 26KG</h4>
                            <p  class="h-s2-product-p m-0">Basmati Rice</p>
                        </div>
                        <div class="h-s2-filter-img">
                            <img class="img-fluid" src="assets/images/Akbarxxlgold26KG.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 bg-white d-flex rounded-end-5 h-s2-product-div filterDiv overflow-hidden akbar">
                        <div class="h-s2-filter-img align-self-end">
                            <img class="img-fluid" src="assets/images/Akbarxxlwhite26KG.png" alt="">
                        </div>
                        <div class="p-5 ps-0 h-s2-fliter-text-div">
                            <h4 class="h-s2-product-h fs-3 mb-3">Akbar xxl white 26KG</h4>
                            <p  class="h-s2-product-p m-0">Basmati Rice</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 bg-white d-flex rounded-start-5 h-s2-product-div filterDiv overflow-hidden akbar">
                        <div class="p-5 pe-0 align-self-end h-s2-fliter-text-div">
                            <h4 class="h-s2-product-h fs-3 mb-3">Akbar xxl white 26KG</h4>
                            <p  class="h-s2-product-p m-0">Basmati Rice</p>
                        </div>
                        <div class="h-s2-filter-img">
                            <img class="img-fluid" src="assets/images/Akbarxxlgold26KG-2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 bg-white d-flex rounded-end-5 h-s2-product-div filterDiv overflow-hidden akbar">
                        <div class="h-s2-filter-img align-self-end">
                            <img class="img-fluid" src="assets/images/Akbarrozanawhite26KG.png" alt="">
                        </div>
                        <div class="p-5 ps-0 h-s2-fliter-text-div">
                            <h4 class="h-s2-product-h fs-3 mb-3">Akbar rozana white 26KG</h4>
                            <p  class="h-s2-product-p m-0">Basmati Rice</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 bg-white d-flex rounded-start-5 h-s2-product-div filterDiv overflow-hidden alhind">
                        <div class="p-5 pe-0 align-self-end h-s2-fliter-text-div">
                            <h4 class="h-s2-product-h fs-3 mb-3">Alhind bukhari</h4>
                            <p  class="h-s2-product-p m-0">Basmati Rice</p>
                        </div>
                        <div class="h-s2-filter-img">
                            <img class="img-fluid" src="assets/images/h-alhind-rice-1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 bg-white d-flex rounded-end-5 h-s2-product-div filterDiv overflow-hidden alhind">
                        <div class="h-s2-filter-img align-self-end">
                            <img class="img-fluid" src="assets/images/h-alhind-rice-2.png" alt="">
                        </div>
                        <div class="p-5 ps-0 h-s2-fliter-text-div">
                            <h4 class="h-s2-product-h fs-3 mb-3">Alhind golden sella</h4>
                            <p  class="h-s2-product-p m-0">Basmati Rice</p>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3 col-12 bg-white d-flex rounded-5 h-s2-product-div filterDiv overflow-hidden alif-laila">
                        <div class="p-5 pe-0 align-self-end h-s2-fliter-text-div">
                            <h4 class="h-s2-product-h fs-3 mb-3">Alif laila burdwan kaima</h4>
                            <p  class="h-s2-product-p m-0">kaima Rice</p>
                        </div>
                        <div class="h-s2-filter-img">
                            <img class="img-fluid" src="assets/images/h-aliflaila-rice.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3 col-12 bg-white d-flex rounded-5 h-s2-product-div filterDiv overflow-hidden firdous">
                        <div class="p-5 pe-0 align-self-end h-s2-fliter-text-div">
                            <h4 class="h-s2-product-h fs-3 mb-3">Firdous biriyani rice</h4>
                            <p  class="h-s2-product-p m-0">Biriyani Rice</p>
                        </div>
                        <div class="h-s2-filter-img">
                            <img class="img-fluid" src="assets/images/h-firdouse-rice-1.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-3 col-12 bg-white d-flex rounded-5 h-s2-product-div filterDiv overflow-hidden abusalam">
                        <div class="p-5 pe-0 align-self-end h-s2-fliter-text-div">
                            <h4 class="h-s2-product-h fs-3 mb-3">Abusalam biriyani rice</h4>
                            <p  class="h-s2-product-p m-0">Biriyani Rice</p>
                        </div>
                        <div class="h-s2-filter-img">
                            <img class="img-fluid" src="assets/images/h-abusalam-rice-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>

    <!-- javascript -->
        
        <!-- nav-bg-change  -->
        <script>
            document.getElementById("desktop-nav-js").classList.remove("about-nav-bg");
        </script>
        <!-- filter-tab  -->
        <script>
            filterSelection("all");
            function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
            }

            function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
                }
            }
            }

            // Hide elements that are not selected
            function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
            }

            var btnContainer = document.getElementById("myBtnContainer");
            var btns = btnContainer.getElementsByClassName("h-s2-filter-h");
            for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
            }
        </script>
        <!-- make filter clicked at refresh  -->
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                document.getElementById("filter-clicked").click();
            });
        </script>
</body>
</html>