<footer class="footer-section">
    <div class="footer-container">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="footer-wrapper">
                        <!-- <img src="<?= base_url('assets/') ?>assets/images/footer-logo.png" alt=""> -->

                        <ul class="location">
                            <li><i class="fa fa-home" aria-hidden="true"></i> 
                                <div class="content">
                                    Santron Trading and Hospitality Services, <br> Doha, Qatar
                                </div>
                            </li>

                            <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                <div class="content">
                                santronqatar@gmail.com
                                </div>
                            </li>

                            <li><i class="fa fa-phone" aria-hidden="true"></i> 
                                <div class="content">
                                +974 30779555
                                </div>
                            </li>

                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> 
                                <div class="content">
                                    Working Hours: <br> Sun-Thu (9 am - 6 am)
                                </div>
                            </li>
                        </ul>
                    </div> <!-- footer-wrapper -->
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="footer-wrapper">
                        <h3>About Santron</h3>

                        <p>Santron Trading and Hospitality Services is a global leader in luxury entertainment, relaxation, and hospitality. With over 15 years of experience, we are dedicated to creating unforgettable experiences for our clients.</p>

                        <ul class="social-icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        </ul> 
                    </div> <!-- footer-wrapper -->
                </div>

                <div class="col-md-3 col-md-offset-1 col-sm-4">
                    <div class="footer-wrapper last-wrapper">
                        <h3>Quick Links</h3>

                        <ul class="wrapper-option clearfix">
                            <li><a href="<?= base_url('/') ?>">Home</a></li>
                            <li><a href="<?= base_url('/about') ?>">About Us</a></li>
                            <li><a href="<?= base_url('/services') ?>">Services</a></li>
                            <li><a href="<?= base_url('/night_club') ?>">Night Club</a></li>
                            <li><a href="<?= base_url('/spa_and_relaxation') ?>">Spa & Relaxation</a></li>
                            <li><a href="<?= base_url('/lounges') ?>">Lounges</a></li>
                        </ul> <!-- wrapper-option -->

                        <ul class="wrapper-option">
                            <li><a href="<?= base_url('/hotel_supplies') ?>">Hotel Supplies</a></li>
                            <li><a href="<?= base_url('/blog') ?>">Blog</a></li>
                            <li><a href="<?= base_url('/testimonials') ?>">Testimonials</a></li>
                            <li><a href="<?= base_url('/contact_us') ?>">Contact Us</a></li>
                        </ul> <!-- wrapper-option -->
                    </div> <!-- footer-wrapper -->
                </div>
            </div>
        </div>
    </div> <!-- footer-container -->

    <div class="copy-right text-center">
        <div class="container">
            <p>2025 &copy; All Rights Reserved by <a href="<?= base_url('/') ?>">Santron Trading and Hospitality Services</a></p>
        </div>
    </div> <!-- copy-right -->
</footer> <!-- footer-section -->

<!-- Off-Canvas View Only -->
<span class="menu-toggle navbar visible-xs visible-sm">
    <img src="<?php echo base_url('../assets/assets/images/santron-main.png') ?>" alt="Santron Logo" class="menu-logo">
    <i class="fa fa-bars" aria-hidden="true"></i>
</span>
<style>
.menu-toggle {
    display: flex;
    align-items: center;
    justify-content: space-between; /* Align logo left and icon right */
    width: 100%; /* Full width */
    padding: 0 15px; /* Optional: Add padding for spacing */
}

.menu-logo {
    height: 30px; /* Adjust as needed */
    width: auto; /* Maintain aspect ratio */
}

.menu-toggle i {
    margin-left: 90%; /* Push the menu icon to the right */
    font-size: 20px; /* Adjust icon size if needed */
    position: relative;
    top: -25px; /* Move the icon a little bit to the top */
}
</style>
<div id="offcanvas-menu" class="visible-xs visible-sm">
    <span class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></span>

    <ul class="menu-wrapper">
        <li>
            <a class="active dropmenu" href="#">Home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropDown sub-menu">
                <li><a class="active" href="index.html">Home One</a></li>
                <li><a href="index-two.html">Home Two</a></li>
                <li><a href="index-three.html">Home Three</a></li>
                <li><a href="index-four.html">Home Four</a></li>
                <li><a href="index-five.html">Home Five</a></li>
                <li><a href="index-six.html">Home Six</a></li>
            </ul><!-- end of dropdown -->
        </li><!-- end of li -->

        <li><a href="about.html">About</a></li><!-- end of li -->

        <li>
            <a class="dropmenu" href="#">Services <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropDown sub-menu">
                <li><a href="service.html">All Services</a></li>
                <li><a href="service-one.html">Night Club</a></li>
                <li><a href="service-two.html">Spa & Relaxation</a></li>
                <li><a href="service-three.html">Lounges</a></li>
                <li><a href="service-four.html">Hotel Supplies</a></li>
            </ul><!-- end of dropdown -->
        </li><!-- end of li -->

        <li>
            <a class="dropmenu" href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropDown sub-menu">
                <li><a href="blog.html">Blog Posts</a></li>
                <li><a href="single-blog.html">Single Blog</a></li>
            </ul><!-- end of dropdown -->
        </li><!-- end of li -->

        <li><a href="contact.html">Contact</a></li><!-- end of li -->
    </ul> <!-- menu-wrapper -->      
</div>
<!-- Off-Canvas View Only -->

<div id="toTop" class="hidden-xs">
    <i class="fa fa-chevron-up"></i>
</div> <!-- totop -->

<script src="<?= base_url('assets/') ?>assets/js/jquery.js"></script>
<script src="<?= base_url('assets/') ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>assets/js/jquery.inview.min.js"></script>
<script src="<?= base_url('assets/') ?>assets/js/wow.js"></script>
<script src="<?= base_url('assets/') ?>assets/js/lightbox.js"></script>
<script src="<?= base_url('assets/') ?>assets/js/portfolio.js"></script>
<script src="<?= base_url('assets/') ?>assets/owl-carrosel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/') ?>assets/js/jquery-ui.js"></script>
<script src="<?= base_url('assets/') ?>assets/js/language.js"></script>


<!-- Revolution Slider -->
<script src="<?= base_url('assets/') ?>assets/revolution/jquery.themepunch.revolution.min.js"></script>
<script src="<?= base_url('assets/') ?>assets/revolution/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Revolution Extensions -->
<script type="text/javascript" src="<?= base_url('assets/') ?>assets/revolution/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>assets/revolution/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>assets/revolution/extensions/revolution.extension.video.min.js"></script>

<script src="<?= base_url('assets/') ?>assets/js/script.js"></script>
</body>
</html>