<template>
<div>
    
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="spinner"></div>
</div>
<!-- End Preloader Area -->

<!-- Start Header Area -->
<header class="header-area">
    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="#">
                            <img src="assets/img/Logo/qmLogo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar">
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/Logo/qmLogo.png" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu col-md-8" id="navbarSupportedContent">
                        <nav id="primary-menu">
                            <ul class="navbar-nav" data-easing="easeInOutExpo" data-speed="1500">
                                <li class="nav-item">
                                    <a href="#section-pharma" class="nav-link"><div>Pharmacy</div></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#section-corporate" class="nav-link"><div>Corporate</div></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                        <div class="collapse navbar-collapse mean-menu col-md-3">
                            <div class="others-options">
                                <a href="https://wa.me/60327022316?text=I%27m%20interested%20with%20Be%20Ethical%27s%20Telehealth%20Solution" class="default-btn-two">
                                     Contact Us
                                 <span></span>
                                </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Header Area -->

  <router-view></router-view>

<!-- Start Footer Area -->
<section class="footer-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Be Ethical</h3>
                    <p>Health and medicine have always been, and still are, a matter of ethics. In Be Ethical, we put ethics in the very core of our solutions. Our mission is to help humanity help itself by bringing high-value telehealth services to healthcare professionals.</p>
                    <ul class="footer-social">
                        <li>
                            <a href="https://www.facebook.com/BeEthical.co">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>

<!--                        <li>-->
<!--                            <a href="https://www.linkedin.com/company/queuemed">-->
<!--                                <i class="fab fa-linkedin-in"></i>-->
<!--                            </a>-->
<!--                        </li>-->
                    </ul>
                </div>
            </div>

            <div class="col-lg-5 col-sm-6">
<!--                <div class="single-footer-widget pl-5">-->
<!--                    <h3>Useful Links</h3>-->

<!--                    <ul class="footer-quick-links">-->
<!--                        <li>-->
<!--                            <a href="index.html">Home</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="about.html">About Us</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="solution.html">Solution</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="services.html">Services</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="contact.html">Contact Us</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Contact</h3>

                    <div class="footer-info-contact">
                        <i class="flaticon-email"></i>
                        <h3>Contact Us</h3>
                        <span><a href="https://wa.me/60327022316?text=I%27m%20interested%20with%20Be%20Ethical%27s%20Telehealth%20Solution">03-27022316 (WhatsApp)</a></span>
                    </div>

                    <div class="footer-info-contact">
                        <i class="flaticon-pin"></i>
                        <h3>Address</h3>
                        <span> C-20-05, KL Trillion,<br>
                                Jln Tun Razak,<br>
                                50400 Kuala Lumpur, Malaysia
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
    </div>

    <div class="shape">
        <img src="assets/img/footer-shape.png" alt="image">
    </div>
</section>
<!-- End Footer Area -->

<!-- Start Copy Right Section -->
<div class="copyright-area">
    <div class="container">
        <p>
            <i class="far fa-copyright"></i>
            2021 Qmed-RTK. All Rights Reserved by Qmed
        </p>
    </div>
</div>
<!-- End Copy Right Section -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="fa fa-chevron-up"></i>
    <i class="fa fa-chevron-up"></i>
</div>
</div>
</template>
<script>
export default {
   
  created(){
      if (!User.loggedIn()) {
        this.$router.push({name: 'user_main'})
      }
  }


}
         



</script>
