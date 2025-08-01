<!DOCTYPE html>
<?php
include 'constants.php';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo @$title; ?></title>
    <!-- [ FONT-AWESOME ICON ]
=========================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">
    <!-- [ PLUGIN STYLESHEET ]
=========================================================================================================================-->
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!-- [ Boot STYLESHEET ]
=========================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">
    <!-- [ DEFAULT STYLESHEET ] 
=========================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/color/themecolor.css">
</head>
<body>
    <!-- [ LOADERs ]

================================================================================================================================-->
    <div class="preloader">
        <div class="loader theme_background_color">
            <span></span>
        </div>
    </div>
    <!-- [ /PRELOADER ]

=============================================================================================================================-->

    <!-- [WRAPPER ]

=============================================================================================================================-->

    <div class="wrapper">
        <!-- [NAV]
============================================================================================================================-->
        <!-- Navigation
    ==========================================-->
        <nav class=" nim-menu navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php"><?php echo $title[0]; ?><span class="themecolor">
					<?php echo $title[1]; ?></span><?php for ($i = 2; $i < strlen($title); $i++) echo $title[$i]; ?></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home" class="page-scroll">
                                <h3>Home</h3>
                            </a></li>
                        <li><a href="#two" class="page-scroll">
                                <h3>About</h3>
                            </a></li>
<li>
  <a href="#map-section" class="page-scroll">
    <h3>Map</h3>
  </a>
</li>
                        <li><a href="pro/signin.php" class="page-scroll">
                                <h3>Passenger Portal</h3>
                            </a></li>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->

            </div><!-- /.container-fluid -->

        </nav>

        <!-- [/NAV]
 
============================================================================================================================-->

        <!-- [/MAIN-HEADING]
 
============================================================================================================================-->

        <section class="main-heading" id="home">

            <div class="overlay">

                <div class="container">

                    <div class="row">

                        <div class="main-heading-content col-md-12 col-sm-12 text-center">

                            <h1 class="main-heading-title"><span class="main-element themecolor"
                                    data-elements=" Online Ticket, Online Ticket, Online Ticket"></span></h1>

                            <h1 class="main-heading-title"><span class="main-element themecolor"
                                    data-elements=" Reservation System, Reservation System, Reservation System"></span>
                            </h1>

                            <p class="main-heading-text">WELCOME TO,<br />KEFFI MOTOR PARK COMPUTER BASED SCHEDULING SYSTEM</p>

                            <div class="btn-bar">

                                <a href="pro/signin.php" class="btn btn-custom theme_background_color">Make Reservations Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-heading" id="home">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="main-heading-content col-md-12 col-sm-12 text-center">
                            <h1 class="main-heading-title">KEFFI MOTOR PARK</h1>

                            <p class="main-heading-text">The Keffi Motor Park project is a system designed to streamline and digitize operations within the motor park located in Keffi, Nasarawa State, Nigeria. The goal of the project was to modernize the ticketing and vehicle management processes, reduce human errors, and improve overall efficiency.<br/><br/>
							
							This system allows for digital ticket generation, passenger record management, driver scheduling, and trip tracking. It minimizes delays, enhances security, and creates a transparent platform for both transport workers and passengers.<br/><br/>
							
							The project was initiated as a response to the growing need for digital transformation in local transport hubs and serves as a model for scalable implementation across similar motor parks nationwide.
                            </p>

                            <div class="btn-bar">

                                <a href="pro/individual_reg.php" class="btn btn-custom theme_background_color">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- [/MAIN-HEADING]
 
============================================================================================================================-->



        <!-- [ABOUT US]
 
============================================================================================================================-->

        <section class="aboutus white-background black" id="two">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center black">

                        <h3 class="title">ABOUT <span class="themecolor">US</span></h3>

                        <p class="a-slog">Developed By <?php echo $developer_name; ?> (<?php echo $developer_matric; ?>)
                            and Supervised By <?php echo $supervisor_name; ?></p>

                    </div>

                </div>

                <div class="gap">

                </div>

                <div class="row about-box">

                    <div class="col-sm-4 text-center">

                        <div class="margin-bottom">

                            <i class="fa fa-newspaper-o"></i>

                            <h4>Book Tickets from the Comfort of Your Home</h4>

                            <p class="black">Skip the long queues — reserve your seat online anytime, anywhere. Fast, secure, and stress-free travel booking at your fingertips.</p>

                        </div> <!-- / margin -->

                    </div> <!-- /col -->

                    <div class="col-sm-4 about-line text-center">

                        <div class="margin-bottom">

                            <i class="fa fa-diamond"></i>

                            <h4>Real-Time Trip Updates</h4>

                            <p class="black">Stay informed with live departure and arrival info — no more surprises or guesswork.</p>

                        </div> <!-- / margin -->

                    </div><!-- /col -->

                    <div class="col-sm-4 text-center">

                        <div class="margin-bottom">

                            <i class="fa fa-dollar"></i>

                            <h4>Pay Securely</h4>

                            <p class="black">Make payments with confidence. Our platform uses encrypted gateways to keep your transactions safe and protected.</p>

                        </div> <!-- / margin -->

                    </div><!-- /col -->

                </div> <!-- /row -->

            </div>
        </section>
		
		<div id="map-section" style="margin-top: 50px;">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31826.34181793185!2d7.8617692!3d8.8477651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104a48572f981e23%3A0x9999d683d6d902bb!2sKeffi%20Motor%20Park!5e0!3m2!1sen!2sng!4v1712540000000!5m2!1sen!2sng"
    width="100%"
    height="350"
    style="border:0;"
    allowfullscreen
    loading="lazy">
  </iframe>
</div>

        <footer class="site-footer section-spacing text-center " id="eight">

            <div class="container">

                <div class="row">

                    <div class="col-md-4">

                        <p class="footer-links"><a href="#">Terms of Use</a> <a href="#">Privacy Policy</a></p>

                    </div>

                    <div class="col-md-4"> <small>&copy; <?php echo date('Y'); ?>, Developed By <?php echo $developer_name; ?> </small></div>

                    <div class="col-md-4">

        <!-- [/FOOTER]
 
============================================================================================================================-->

    </div>

    <!-- [ /WRAPPER ]

=============================================================================================================================-->

    <!-- [ DEFAULT SCRIPT ] -->

    <script src="library/modernizr.custom.97074.js"></script>

    <script src="library/jquery-1.11.3.min.js"></script>

    <script src="library/bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

    <!-- [ PLUGIN SCRIPT ] -->

    <script src="library/vegas/vegas.min.js"></script>

    <script src="js/plugins.js"></script>

    <!-- [ TYPING SCRIPT ] -->

    <script src="js/typed.js"></script>

    <!-- [ COUNT SCRIPT ] -->

    <script src="js/fappear.js"></script>

    <script src="js/jquery.countTo.js"></script>

    <!-- [ SLIDER SCRIPT ] -->

    <script src="js/owl.carousel.js"></script>

    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <!-- [ COMMON SCRIPT ] -->
    <script src="js/common.js"></script>
</body>
</html>