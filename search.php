<!DOCTYPE html>
<html class="wow-animation" lang="en">




<?php
  //To Handle Session Variables on This Page
  session_start();
  //Including Database Connection From db.php file to avoid rewriting in all files
  require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Job Portal</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.15/features/searchHighlight/dataTables.searchHighlight.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->





    <title>About Us</title>
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


    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg"
                height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page-->
    <div class="page text-center">

        <header class="page-head slider-menu-position">
            <!-- - RD Navbar-->
            <!-- RD Navbar Transparent-->
            <div class="rd-navbar-wrap" style="height: 86.5px;">
                <nav class="rd-navbar container rd-navbar-floated rd-navbar-dark rd-navbar-dark-transparent rd-navbar--is-touch rd-navbar-original rd-navbar-static"
                    data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static"
                    data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
                    data-lg-stick-up="true">
                    <div class="rd-navbar-inner">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Top Panel Toggle-->
                            <button class="rd-navbar-right-buttons-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-right-buttons"><span></span></button>
                            <!--Navbar Brand-->
                            <div class="rd-navbar-brand"><a href="index.php"><img width="218" height="35" src="images/logo.png"
                                        alt=""></a></div>
                        </div>
                        <div class="rd-navbar-menu-wrap">
                            <div class="rd-navbar-nav-wrap toggle-original-elements">
                                <div class="rd-navbar-mobile-scroll">
                                    <!--Navbar Brand Mobile-->
                                    <div class="rd-navbar-mobile-brand"><a href="../index.php"><img width="218" height="35"
                                                src="images/logo.png" alt=""></a></div>
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li><a href="index.php"><span>Home</span></a>
                                        </li>
                                        <li><a href="search.php"><span>Find a Job</span></a>
                                        </li>



                                        <?php
            //Show user dashboard link once logged in.
            if(isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])) { 
              ?>
                                        <li><a href="user/dashboard.php">Dashboard</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                        <?php
              } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])) { 
              ?>
                                        <li><a href="company/dashboard.php">Dashboard</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                        <?php }  else { 
              //Show Login Links if no one is logged in.
            ?>
                                        <li><a href="company.php">Company</a></li>
                                        <li><a href="register.php">Register</a></li>
                                        <li><a href="login.php">Login</a></li>
                                        <?php } ?>



                                        <li class="active rd-navbar--has-dropdown rd-navbar-submenu"><a href="#"><span>More</span></a><span
                                                class="rd-navbar-submenu-toggle"></span>
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
                    <div class="parallax-container breadcrumb-modern bg-gray-darkest parallax-disabled"
                        data-parallax-img="images/background-02-1920x870.jpg" style="background-image: url(&quot;images/background-02-1920x870.jpg&quot;);">
                        <div class="parallax-content">
                            <div class="bg-overlay-gray-darkest">
                                <div class="container section-top-98 section-bottom-34 section-lg-bottom-66 section-lg-98 section-xl-top-155 section-xl-bottom-66">
                                    <div class="text-extra-big font-weight-bold d-none d-lg-block">Find Your Dream Job</div>
                                    <ul class="list-inline list-inline-dashed p offset-top-0 offset-xl-top-20">

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </header>





    </div>

    <main class="page-content">

        <section class="section-98 section-md-110" style="background-color:yellowgreen">
            <div class="container">



















                <!-- LATEST JOB POSTS -->
                <section>
                    <div class="container">
                        <div class="row" style="margin-left:110px;">
                            <div class="col-md-12 col-lg-12">
                                <form id="myForm" class="form-inline">
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <select id="experience" class="form-control">
                                            <option value="" selected="">Select Experience (Years)</option>
                                            <?php 
                // SQL query to get all differnet qualification that has been entered in our database
                  $sql ="SELECT DISTINCT(experience) FROM job_post WHERE experience IS NOT NULL ORDER BY experience";
                  $result = $conn->query($sql);
                  if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                      echo "<option value'".$row['experience']."'>".$row['experience']."</option>";
                    }
                  }
                ?>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Qualification</label>
                                        <select id="qualification" class="form-control">
                                            <option value="" selected="">Select Qualification</option>
                                            <?php 
                // SQL query to get all differnet qualification that has been entered in our database
                  $sql ="SELECT DISTINCT(qualification) FROM job_post WHERE qualification IS NOT NULL";
                  $result = $conn->query($sql);
                  if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                      echo "<option value'".$row['qualification']."'>".$row['qualification']."</option>";
                    }
                  }
                ?>
                                        </select>
                                    </div>
                                    <button style="margin-top:5px;" class="btn btn-success  h5 offset-top-14">Search</button>
                                </form>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5%;">
                            <div class="table-responsive">
                                <table id="myTable" class="table">
                                    <thead>
                                        <th>Job Name</th>
                                        <th>Job Description</th>
                                        <th>Minimum Salary</th>
                                        <th>Maximum Salary</th>
                                        <th>Experience</th>
                                        <th>Qualification</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>













            </div>
        </section>



    </main>



    <footer class="section-relative section-top-66 section-bottom-34 page-footer bg-gray-darkest">
        <div class="container">
            <div class="row justify-content-md-center text-lg-left">
                <div class="col-md-8 col-lg-12">
                    <div class="row justify-content-sm-center">
                        <div class="col-sm-10 col-lg-5 order-lg-2">
                            <h6 class="text-uppercase text-spacing-60 font-default text-white">Newsletter</h6>
                            <div class="inset-xl-right-80">
                                <p class="text-muted">Keep up with our always upcoming news and updates. Enter your
                                    e-mail and
                                    subscribe to our newsletter.</p>
                            </div>
                            <div class="offset-top-30">
                                <div class="inset-xl-right-93">
                                    <form class="rd-mailform" data-form-output="form-subscribe-footer" data-form-type="subscribe"
                                        method="post" action="bat/rd-mailform.php">
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
                                        <th>Experience</th>

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
                            <p class="text-dark offset-top-50">Intense JB &copy; <span id="copyright-year"></span> . <a
                                    href="#">Privacy
                                    Policy</a>
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









    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous">
    </script>

    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js">
    </script>

    <script src="//bartaz.github.io/sandbox.js/jquery.highlight.js">
    </script>

    <script src="//cdn.datatables.net/plug-ins/1.10.15/features/searchHighlight/dataTables.searchHighlight.min.js">
    </script>

    <script type="text/javascript">
        $(function() {
            //this is how datatables are created. we are getting data from refresh_job_search page using ajax
            var oTable = $('#myTable').DataTable({
                "autoWidth": false,
                "ajax": {
                    "url": "refresh_job_search.php",
                    "dataSrc": "",
                    "data": function(d) {
                        d.experience = $("#experience").val();
                        d.qualification = $("#qualification").val();
                    }
                }
            });

            oTable.on('draw', function() {
                var body = $(oTable.table().body());

                body.unhighlight();

                body.highlight(oTable.search());


            });

            //We only want to reload the ajax on submit button click instead of redirecting to form post page. so we use preventDefault();
            $("#myForm").on("submit", function(e) {
                e.preventDefault();
                oTable.ajax.reload(null, false);
            })

        });
    </script>






</body>









<!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
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