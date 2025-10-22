<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
    <title>@yield('title')</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="/frontend/my-img/favicon.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="/frontend/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="/frontend/css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css">
	<!-- Font Awesome Icon css-->
	<link href="/frontend/css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="/frontend/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="/frontend/css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="/frontend/css/mousecursor.css">
	<link rel="stylesheet" href="/frontend/css/my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


	<!-- Main Custom Css -->
	<link href="/frontend/css/custom.css" rel="stylesheet" media="screen">
</head>
<body>


    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<!-- Logo Start -->
					 <a class="navbar-brand" href="/">
                        <img src="/frontend/my-img/logo.png" alt="Logo" style="width: 129px; height: auto;">
                    </a>
					<!-- Logo End -->
					<!-- Main Menu Start -->
				<!-- <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>                                
                                <li class="nav-item"><a class="nav-link" href="about.html">About Us</a>
                                <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                            </ul>
                    </div> -->
                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a class="btn-default" href="/#prising">View Packages</a>
                        </div>
                        <!-- Header Btn End -->                      
					</div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->

    @yield('content')
    
    <!-- Footer Start -->
    <footer class="main-footer">
      
		<div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-6">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                             <img src="/frontend/my-img/footer-logo.png" alt="Logo" style="width: 229px; height: auto;">
                        </div>
                        
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p>The content, including without limitation any viewpoint or opinion in any profile, article or video,
                                contained on this website is for informational purposes only. Any third party contributor 
                                to any such profile, article or video has been compensated by Compare-HomeSecurity.
                                net for such contribution. It is advised that you conduct your own investigation as 
                                to the accuracy of any information contained herein as such information,
                                including without limitation any quote, is provided “as is” for informational purposes only.
                                Further, Compare-HomeSecurity.net shall not be liable for
                                 any informational error or for any action taken in reliance on information contained herein.</p>
                        </div>
                        <!-- About Footer Content End -->
                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-xl-4 col-md-6">
                    <!-- Footer Contact Start -->
                    <div class="footer-contact footer-links">
                        <h3 style="color:#fff;">User Rights & Legal Info</h3>
                        <ul style="list-style:none; margin:0; padding:0;">
                            <li><a href="/privacy-policy" style="color:#fff; text-decoration:none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">Privacy Policy</a></li>
                            <li><a href="/terms-of-use" style="color:#fff; text-decoration:none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">Terms of Use</a></li>
                            <li><a href="/accessibility" style="color:#fff; text-decoration:none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">Accessibility</a></li>
                            <li><a href="https://compliance.centerfield.com/doNotSell.php?lang=en-us#/rightsRequest" target="_blank" style="color:#fff; text-decoration:none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">Do Not Sell/Share My Personal Information</a></li>
                            <li><a href="https://compliance.centerfield.com/doNotSell.php?lang=en-us#/rightsRequest" target="_blank" style="color:#fff; text-decoration:none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">Limit the Use of My Sensitive Personal Information</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Footer Copyright Box Start -->
                        <div class="footer-copyright-box">
                            <div class="footer-copyright-text">
                                <p>Copyright © 2025 All Rights Reserved.</p>
                            </div>

                            <!-- Footer Menu Start -->
                            <!-- <div class="footer-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">services</a></li>
                                    <li><a href="blog.html">Blogs</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div> -->
                            <!-- Footer Menu End -->
                        </div>
                        <!-- Footer Copyright  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyright End -->
    </footer>
    <!-- Footer End -->

    <!-- Jquery Library File -->
    <script src="/frontend/js/jquery-3.7.1.min.js"></script>
    <!-- Circle Progress Js File -->
    <script src="/frontend/js/circle-progress.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="/frontend/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="/frontend/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="/frontend/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="/frontend/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="/frontend/js/jquery.waypoints.min.js"></script>
    <script src="/frontend/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="/frontend/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="/frontend/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="/frontend/js/gsap.min.js"></script>
    <script src="/frontend/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="/frontend/js/SplitText.min.js"></script>
    <script src="/frontend/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="/frontend/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="/frontend/js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="/frontend/js/function.js"></script>
</body>
</html>