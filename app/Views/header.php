<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Santron Trading and Hospitality Services</title>
        <!-- fav icon -->
        <link href="<?= base_url('assets/') ?>assets/logo/santron-transparent.png" rel="shortcut icon" type="image/png">

        <!-- Bootstrap -->
        <link href="<?= base_url('assets/') ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- animated-css -->
        <link href="<?= base_url('assets/') ?>assets/css/animate.min.css" rel="stylesheet" type="text/css">
        <!-- font-awesome-css -->
        <link href="<?= base_url('assets/') ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- owl-carrosel-css -->
        <link href="<?= base_url('assets/') ?>assets/owl-carrosel/owl.carousel.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/') ?>assets/owl-carrosel/owl.theme.default.min.css" rel="stylesheet" type="text/css">
        <!-- Revolution Slider -->
        <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/css/revolution/layers.css">
        <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/css/revolution/navigation.css">
        <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/css/revolution/settings.css">
        <!-- offcanvas-menu-css -->
        <link href="<?= base_url('assets/') ?>assets/css/offcanvas-menu.css" rel="stylesheet" type="text/css">
        <!-- style-css -->
        <link href="<?= base_url('assets/') ?>assets/css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    </head>
    <body class="homePageOne">
        <!-- start preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- end preloader -->


        <header class="header-section">
            <div class="topper">
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="header-left-bar">
                                    <ul class="contact-wrapper">
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i> santronqatar@gmail.com</li>
                                        <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +974 30779555</li>
                                    </ul>
                                </div> <!-- header-left-bar -->
                            </div>
                            <style>
                                /* Hide the contact information on screens smaller than 768px (typical mobile devices) */
                                @media (max-width: 767.98px) {
                                    .header-left-bar {
                                        display: none;
                                    }
                                }
                            </style>

                            <div class="col-md-4">
                                <div class="header-right-bar text-right">
                                    <div class="language">
                                        <!-- <div class="dropbar closed">
                                            <i class="fa fa-language" aria-hidden="true"></i><div class="title">lan</div>

                                            <div class="dropbar-menu">
                                                <ul>
                                                    <li><img src="<?= base_url('assets/') ?>assets/images/map/eng.png" alt="">Eng</li>

                                                    <li><img src="<?= base_url('assets/') ?>assets/images/map/china.png" alt="">China</li>

                                                    <li><img src="<?= base_url('assets/') ?>assets/images/map/india.png" alt="">India</li>

                                                    <li><img src="<?= base_url('assets/') ?>assets/images/map/brazil.png" alt="">Brazil</li>

                                                    <li><img src="<?= base_url('assets/') ?>assets/images/map/canada.png" alt="">Canada</li>

                                                    <li><img src="<?= base_url('assets/') ?>assets/images/map/australia.png" alt="">Australia</li>

                                                    <li><img src="<?= base_url('assets/') ?>assets/images/map/nepal.png" alt="">Nepal</li>

                                                    <li><img src="<?= base_url('assets/') ?>assets/images/map/brazil.png" alt="">Srilanka</li>

                                                    <li><img src="<?= base_url('assets/') ?>assets/images/map/brazil.png" alt="">Gana</li>

                                                    <li><img src="<?= base_url('assets/') ?>assets/images/map/brazil.png" alt="">Italy</li>

                                                    <li><img src="<?= base_url('assets/') ?>assets/images/map/brazil.png" alt="">Denmark</li>

                                                    <li><img src="<?= base_url('assets/') ?>assets/images/map/brazil.png" alt="">Brenna</li>

                                                    <li><img src="<?= base_url('assets/') ?>assets/images/map/brazil.png" alt="">Robert</li>
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="social-icon pull-right">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div> <!-- header-right-bar -->
                            </div>
                        </div> 
                    </div>
                </div>
            </div> <!-- topper -->
            
            <nav class="navbar navbar-inverse hidden-sm hidden-xs">
                <div class="navbar-inner">
                    <div class="container">
                    <div class="navbar-header">
    <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="<?= base_url('assets/') ?>assets/images/logo-santron-2.png" alt="image">
        <div class="company-label ms-3">
            <span class="d-block fw-bold">SANTRON TRADING &</span>
            <span class="d-block fw-bold">HOSPITALITY SERVICES</span>
        </div>
    </a>
</div>

<style>
.navbar-header {
    display: flex;
    height: 100%;
}

.navbar-brand {
    display: flex;
    align-items: center;
    height: 100%;
    margin: 0;
    padding: 0;
}

.company-label {
    font-size: 1.2rem;
    line-height: 1.2;
    color: #333;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.company-label span {
    display: block;
}
</style>

                        <div class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/">Home <i class="" aria-hidden="true"></i></a>
                                    <!-- <ul class="dropdown-menu"> -->
                                        <!-- <li class="active"><a href="/">Home One</a></li> -->
                                        <!-- <li><a href="index-two.html">Home Two</a></li>
                                        <li><a href="index-three.html">Home Three</a></li>
                                        <li><a href="index-four.html">Home Four</a></li>
                                        <li><a href="index-five.html">Home Five</a></li>
                                        <li><a href="index-six.html">Home Six</a></li> -->
                                    <!-- </ul> -->
                                </li>

                                <li><a href="about">About</a></li>

                                <li class="dropdown"><a href="#">Service <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="night_club">Night Club</a></li>
                                        <li><a href="spa_and_relaxation">Spa & Relaxation</a></li>
                                        <li><a href="lounge_experience">Lounge Experience</a></li>
                                        <li><a href="hotel_supplies">Hotel Supplies</a></li>
                                    </ul>
                                </li>

                                <!-- <li class="dropdown"><a href="#">Gallery <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="night_club_gallery">Night Club Moments</a></li>
                                        <li><a href="spa_and_wellness_gallery">Spa & Wellness</a></li>
                                        <li><a href="lounge_experience_gallery">Lounge Experience</a></li>
                                        <li><a href="our_global_presence_gallery">Our Global Presence</a></li>
                                        <li><a href="behind_the_scene_gallery">Behind the Scenes</a></li>
                                    </ul>
                                </li> -->

                                <li class="dropdown"><a href="#">Messages & Blogs <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="founders_message">Founder's Message</a></li>
                                        <li><a href="chairmans_message">Chairman's Message</a></li>
                                        <li><a href="ceos_message">CEO's Message </a></li>
                                        <li><a href="blog">Blogs </a></li>
                                    </ul>
                                </li>

                                <li><a href="contact_us">Contact Us</a></li>

                                <!-- <li>
                                    <div class="search-view">
                                        <span class="open-bar"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></span>

                                        <div id="search-bar">
                                            <span class="close-bar pull-right"><i class="fa fa-times" aria-hidden="true"></i></span>

                                            <form class="form-bar">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="search">
                                                </div>
                                            </form>
                                        </div> 
                                    </div>
                                </li> -->

                                <li>
                                    <!-- <div class="cart cart-wrapper inline-block">
                                        <span class="cart-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>

                                        <div class="cart-item">
                                            <ul>
                                                <li>
                                                    <img src="<?= base_url('assets/') ?>assets/images/shop/s2.jpg" alt="">

                                                    <div class="content inline-block">
                                                        <h5>Name of the product</h5>
                                                        <span class="rate">$66</span>
                                                        <span class="option"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></span>
                                                    </div>
                                                </li>

                                                <li>
                                                    <img src="<?= base_url('assets/') ?>assets/images/shop/s2.jpg" alt="">

                                                    <div class="content inline-block">
                                                        <h5>Name of the product</h5>
                                                        <span class="rate">$66</span>
                                                        <span class="option"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></span>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="amount">Total Amount <span class="pull-right">$99</span></div>

                                            <button class="btn btn-primary">Proceed to checkout</button>
                                        </div>
                                    </div>  -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </nav>
        </header> <!-- header-section -->