<!DOCTYPE html>
<html class="wow-animation" lang="en">


<?php
  //To Handle Session Variables on This Page
  session_start();
  //Including Database Connection From db.php file to avoid rewriting in all files
  require_once("db.php");
?>

<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700,700italic">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>

<body>
    <!-- IE panel-->
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg"
                height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page-->
    <div class="page text-center">
        <!-- Page Head-->
        <header class="page-head slider-menu-position">
            <!-- - RD Navbar-->
            <!-- RD Navbar Transparent-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar container rd-navbar-floated rd-navbar-dark rd-navbar-dark-transparent"
                    data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static"
                    data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
                    data-lg-stick-up="true">
                    <div class="rd-navbar-inner">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Top Panel Toggle-->
                            <button class="rd-navbar-right-buttons-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-right-buttons"><span></span></button>
                            <!--Navbar Brand-->
                            <div class="rd-navbar-brand"><a href="index.php"><img width='218' height='35' src='images/logo.png'
                                        alt='' /></a></div>
                        </div>
                        <div class="rd-navbar-menu-wrap">
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-mobile-scroll">
                                    <!--Navbar Brand Mobile-->
                                    <div class="rd-navbar-mobile-brand"><a href="../index.php"><img width='218' height='35'
                                                src='images/logo.png' alt='' /></a></div>
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li><a href="index.php"><span>Home</span></a>
                                        </li>
                                        <li><a href="search.php"><span>Find a Job</span></a>
                                        </li>

                                        <?php
                      //Show user dashboard link once logged in.
                      //Todo: Check if Company logged in then show company dashboard? 
                      if(isset($_SESSION['id_user'])) { 
                        ?>
                                        <li><a href="user/dashboard.php">Dashboard</a></li>
                                        <li><a href="../logout.php">Logout</a></li>
                                        <?php
                      } else { 
                        //Show Login Links if no one is logged in.
                      ?>
                                        <li><a href="company.php">Company</a></li>
                                        <li><a href="register.php">Register</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <?php } ?>


                                        <li class="active"><a href="#"><span>More</span></a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="about-us.html"><span class="text-middle">About Us</span></a>
                                                </li>

                                                <li><a href="contact-us.html"><span class="text-middle">Contact Us</span></a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!--RD Navbar Search-->

                        </div>
                    </div>
                </nav>
            </div>
            <div class="context-dark">
                <!-- Modern Breadcrumbs-->
                <section>
                    <div class="parallax-container breadcrumb-modern bg-gray-darkest" data-parallax-img="images/background-02-1920x870.jpg">
                        <div class="parallax-content">
                            <div class="bg-overlay-gray-darkest">
                                <div class="container section-top-98 section-bottom-34 section-lg-bottom-66 section-lg-98 section-xl-top-155 section-xl-bottom-66">
                                    <div class="text-extra-big font-weight-bold d-none d-lg-block">Contact Us</div>
                                    <ul class="list-inline list-inline-dashed p offset-top-0 offset-xl-top-20">

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </header>
        <!-- Page Contents-->
        <main class="page-content">
            <!-- Get In Touch-->
            <section class="section-top-98 section-md-top-110">
                <div class="container">
                    <div class="row justify-content-sm-center">
                        <div class="col-md-9 col-lg-8 col-xl-12">
                            <div class="row">
                                <div class="col-xl-8 text-lg-left">
                                    <h1>Get In Touch</h1>
                                    <hr class="divider hr-lg-left-0 bg-darkers">
                                    <p class="offset-xl-top-50">You can contact us any way that is convenient for you.
                                        We are available 24/7 via fax, email or telephone. You can also use a quick
                                        contact form located on this page to ask a question about our services and
                                        current offers. We would be happy to answer your questions or offer any help.</p>
                                    <!-- RD Mailform-->
                                    <form class="rd-mailform text-left offset-top-50" data-form-output="form-output-global"
                                        data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label form-label-outside" for="contacts-first-name">First
                                                        Name</label>
                                                    <input class="form-control" id="contacts-first-name" type="text"
                                                        name="first-name" data-constraints="@Required">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-top-20 offset-xl-top-0">
                                                <div class="form-group">
                                                    <label class="form-label form-label-outside" for="contacts-last-name">Last
                                                        Name</label>
                                                    <input class="form-control" id="contacts-last-name" type="text"
                                                        name="last-name" data-constraints="@Required">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 offset-top-20">
                                                <div class="form-group">
                                                    <label class="form-label form-label-outside" for="contacts-email">E-mail</label>
                                                    <input class="form-control" id="contacts-email" type="email" name="email"
                                                        data-constraints="@Required @Email">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 offset-top-20">
                                                <div class="form-group">
                                                    <label class="form-label form-label-outside" for="contact-me-message">Message</label>
                                                    <textarea class="form-control" id="contact-me-message" name="message"
                                                        data-constraints="@Required" style="height: 160px;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-sm-center justify-content-xl-start offset-top-30">
                                            <div class="col-sm-5 col-md-4">
                                                <div class="inset-left-50 inset-right-50 inset-sm-left-0 inset-sm-right-0 inset-xl-right-50">
                                                    <button class="btn btn-block btn-primary" type="submit">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-4 text-left offset-top-66 offset-xl-top-0 inset-xl-left-80">
                                    <div>
                                        <h5>Social</h5>
                                    </div>
                                    <div class="offset-top-14 text-subline offset-top-10"></div>
                                    <div class="offset-top-20">
                                        <ul class="list-inline list-inline-xs text-darker list-inline-primary">
                                            <li class="list-inline-item h5 offset-top-0"><a class="text-dark fa fa-facebook"
                                                    href="#"></a></li>
                                            <li class="list-inline-item h5 offset-top-0"><a class="text-dark fa fa-twitter"
                                                    href="#"></a></li>
                                            <li class="list-inline-item h5 offset-top-0"><a class="text-dark fa fa-google-plus"
                                                    href="#"></a></li>
                                            <li class="list-inline-item h5 offset-top-0"><a class="text-dark fa fa-youtube"
                                                    href="#"></a></li>
                                        </ul>
                                    </div>
                                    <div class="offset-top-41 offset-xl-top-66">
                                        <h5>Phone</h5>
                                    </div>
                                    <div class="offset-top-14 text-subline offset-top-10"></div>
                                    <address class="contact-info offset-top-20"><span class="icon icon-xs fa fa-phone text-middle text-primary"></span><a
                                            class="text-middle" href="tel:#">1-800-1234-567</a></address>
                                    <div class="offset-top-66">
                                        <h5>Address</h5>
                                    </div>
                                    <div class="offset-top-14 text-subline offset-top-10"></div>
                                    <address class="unit align-items-start flex-row unit-spacing-xxs contact-info offset-top-20">
                                        <div class="unit-left"><span class="icon icon-xs fa fa-map-marker text-middle text-primary inset-right-10"></span></div>
                                        <div class="unit-body"><a href="#">4578 Marmora St, San Francisco D04 89GR</a></div>
                                    </address>
                                    <div class="offset-top-50">
                                        <h5 class="text-darker">Open Hours</h5>
                                    </div>
                                    <div class="text-subline offset-top-14"></div>
                                    <div class="p unit align-items-start unit-spacing-xs flex-row offset-top-24">
                                        <div class="unit-left"><span class="icon icon-xxs fa fa-clock-o text-primary"></span></div>
                                        <div class="unit-body">
                                            <address>
                                                <div><span class="font-weight-bold">Monday–Friday:</span> 9:00am–6:00pm</div>
                                                <div><span class="font-weight-bold">Saturday:</span> 10:00am–4:00pm</div>
                                                <div><span class="font-weight-bold">Sunday:</span> 10:00am–1:00pm</div>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-top-124">
                    <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
                        data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
                        <div class="google-map"></div>
                        <ul class="google-map-markers">
                            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"
                                data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
        <!-- Page Footer-->
        <!-- Default footer-->
        <footer class="section-relative section-top-66 section-bottom-34 page-footer bg-gray-darkest">
            <div class="container">
                <div class="row justify-content-md-center text-lg-left">
                    <div class="col-md-8 col-lg-12">
                        <div class="row justify-content-sm-center">
                            <div class="col-sm-10 col-lg-5 order-lg-2">
                                <h6 class="text-uppercase text-spacing-60 font-default text-white">Newsletter</h6>
                                <div class="inset-xl-right-80">
                                    <p class="text-muted">Keep up with our always upcoming news and updates. Enter your
                                        e-mail and subscribe to our newsletter.</p>
                                </div>
                                <div class="offset-top-30">
                                    <div class="inset-xl-right-93">
                                        <form class="rd-mailform" data-form-output="form-subscribe-footer"
                                            data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                                            <div class="form-group">
                                                <div class="input-group input-group-sm"><span class="input-group-prepend"><span
                                                            class="input-group-text input-group-icon"><span class="mdi mdi-email"></span></span></span>
                                                    <input class="form-control" placeholder="Type your E-Mail" type="email"
                                                        name="email" data-constraints="@Required @Email"><span class="input-group-append">
                                                        <button class="btn btn-sm btn-primary" type="submit">Subscribe</button></span>
                                                </div>
                                            </div>
                                            <div class="form-output" id="form-subscribe-footer"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-2 offset-top-50 offset-lg-top-0 order-lg-3 text-sm-left">
                                <h6 class="text-uppercase text-spacing-60 font-default text-white">Cities</h6>
                                <div class="d-block">
                                    <div class="d-inline-block">
                                        <ul class="list list-unstyled list-inline-primary">
                                            <li class="list-inline-item text-primary"><a href="#">Islamabad</a></li>
                                            <li class="list-inline-item text-primary"><a href="#">Karachi</a></li>
                                            <li class="list-inline-item text-primary"><a href="#">Lahore</a></li>
                                            <li class="list-inline-item text-primary"><a href="#">Multan</a></li>
                                            <li class="list-inline-item text-primary"><a href="#">Faislabad</a></li>
                                            <li class="list-inline-item text-primary"><a href="#">Peshawar</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-lg-2 offset-top-50 offset-lg-top-0 order-lg-3 text-sm-left">
                                <h6 class="text-uppercase text-spacing-60 font-default text-white">Categories</h6>
                                <div class="d-block">
                                    <div class="d-inline-block">
                                        <ul class="list list-unstyled list-inline-primary">
                                            <li class="list-inline-item text-primary"><a href="#">Healthcare</a></li>
                                            <li class="list-inline-item text-primary"><a href="#">Automobile Jobs</a></li>
                                            <li class="list-inline-item text-primary"><a href="#">Food Services</a></li>
                                            <li class="list-inline-item text-primary"><a href="#">Construction</a></li>
                                            <li class="list-inline-item text-primary"><a href="#">Logistics</a></li>
                                            <li class="list-inline-item text-primary"><a href="#">Finance</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 offset-top-50 offset-lg-top-0 order-lg-1">
                                <!-- Footer brand-->
                                <div class="footer-brand"><a href="index.php"><img width='218' height='35' src='images/logo.png'
                                            alt='' /></a></div>
                                <ul class="list-inline list-inline-sm d-inline-block offset-top-34 post-meta text-dark list-inline-primary">
                                    <li class="list-inline-item"><a href="#"><span class="icon icon-xxs fa-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="icon icon-xxs fa-twitter"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="icon icon-xxs fa-google-plus"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="icon icon-xxs fa-youtube-play"></span></a></li>
                                    <li class="list-inline-item"><a href="#"><span class="icon icon-xxs fa-instagram"></span></a></li>
                                </ul>
                                <p class="text-dark offset-top-50">Intense JB &copy; <span id="copyright-year"></span>
                                    . <a href="#">Privacy Policy</a>
                                    <!-- {%FOOTER_LINK}-->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="js/core.min.js">
    </script>
    <script src="js/script.js">
    </script>
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0"
        width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
</script><!-- End Google Tag Manager -->

</html>