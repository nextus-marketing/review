<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <title>@yield('title')</title>
  {{-- Handle Meta & Structured Data --}}
  @if(View::hasSection('meta'))
      @yield('meta')
  @elseif(View::hasSection('meta_description'))
      <meta name="description" content="@yield('meta_description')">
  @endif
  <link rel="canonical" href="{{ url()->current() }}"/>
  <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
  <link rel="shortcut icon" type="image/x-icon" href="/frontend/my-img/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&amp;display=swap" rel="stylesheet">
  <link href="/frontend/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="/frontend/css/slicknav.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css">
  <link href="/frontend/css/all.min.css" rel="stylesheet" media="screen">
  <link href="/frontend/css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="/frontend/css/magnific-popup.css">
  <link rel="stylesheet" href="/frontend/css/mousecursor.css">
  <link rel="stylesheet" href="/frontend/css/my.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"/>
  <link href="/frontend/css/custom.css" rel="stylesheet" media="screen">
  @yield('structured_data')
</head>

<body>
<style>
/* ===== Top Info Bar ===== */
.top-info-bar {
  background-color: #0f2453; /* dark navy */
  color: #fff;
  font-size: 12px;
  padding: 5.5px 16px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.top-info-bar .container-fluid {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  flex-wrap: wrap;
  max-width: 100%;
}

.top-info-bar .info-text {
  color: #fff;
  margin: 0;
  line-height: 1.5;
  max-width: 90%;
  word-wrap: break-word;
}

.top-info-bar .learn-more {
  color: #0c9fe4;
  text-decoration: underline;
  margin-left: 4px;
  transition: color 0.3s ease;
  white-space: nowrap;
}

.top-info-bar .learn-more:hover {
  color: #fff;
}

/* ===== Responsive Fixes ===== */
@media (max-width: 768px) {
  .top-info-bar {
    font-size: 13px;
    padding: 6px 12px;
  }
  .top-info-bar .info-text {
    max-width: 100%;
    text-align: center;
  }
}

@media (max-width: 480px) {
  .top-info-bar {
    font-size: 12px;
    padding: 6px 10px;
  }
  .top-info-bar .info-text {
    display: block;
    text-align: center;
    margin-bottom: 4px;
  }
  .top-info-bar .learn-more {
    display: inline-block;
    margin-left: 0;
    margin-top: 2px;
  }
}

/* Hide top-info-bar.mobile by default (desktop/tablet) */
.top-info-bar.mobile {
  display: none;
}

/* Show only on mobile screens (below 768px) */
@media (max-width: 767px) {
  .top-info-bar.mobile {
    display: block;
  }
}

/* Show on mobile and tablet (below 992px) */
@media (max-width: 991px) {
  .top-info-bar.mobile {
    display: block;
  }
}

</style>

<div class="top-info-bar">
  <div class="container-fluid">
    <p class="info-text mb-0">
      comparehomesecurity.org may receive compensation from some providers listed on this page.
      <a href="/disclosure" class="learn-more">Learn More</a>
    </p>
  </div>
</div>

    <!-- Header Start -->
	<header class="main-header">
    <div class="top-info-bar mobile">
  <div class="container-fluid">
    <p class="info-text mb-0">
      comparehomesecurity.org may receive compensation from some providers listed on this page.
      <a href="/disclosure" class="learn-more">Learn More</a>
    </p>
  </div>
</div>
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<!-- Logo Start -->
					 <a class="navbar-brand" href="/">
                        <img src="/frontend/my-img/new-logo.png" alt="Logo" style="width: 139px; height: auto;">
                    </a>
					    <!-- Logo End -->
              <!-- Header Btn Start -->
              <div class="header-btn">
                  <a class="btn-default" href="/#pricing">View Packages</a>
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
                            to any such profile, article or video has been compensated by Compare Home Security
                            for such contribution. It is advised that you conduct your own investigation as 
                            to the accuracy of any information contained herein as such information,
                            including without limitation any quote, is provided “as is” for informational purposes only.
                            Further, Compare Home Security shall not be liable for
                            any informational error or for any action taken in reliance on information contained herein.
                        </p>

                        <!-- Social Media Icons -->
                            <div class="social-icons" style="margin-top: 20px;">
                                <a href="https://www.facebook.com/comparehomesecurity" target="_blank" aria-label="Facebook" class="circle-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/comparehomesecurity/" target="_blank" aria-label="Instagram" class="circle-icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#0" target="_blank" aria-label="LinkedIn" class="circle-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#0" target="_blank" aria-label="YouTube" class="circle-icon">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        <!-- Social Icons End -->
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
                        <!-- <li><a href="https://compliance.centerfield.com/doNotSell.php?lang=en-us#/rightsRequest" target="_blank" style="color:#fff; text-decoration:none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">Do Not Sell/Share My Personal Information</a></li>
                        <li><a href="https://compliance.centerfield.com/doNotSell.php?lang=en-us#/rightsRequest" target="_blank" style="color:#fff; text-decoration:none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">Limit the Use of My Sensitive Personal Information</a></li> -->
                        <li><a href="/blogs" style="color:#fff; text-decoration:none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">Blogs</a></li>
                        <li><a href="/contact" style="color:#fff; text-decoration:none;" onmouseover="this.style.color='black'" onmouseout="this.style.color='white'">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright-box">
                        <div class="footer-copyright-text">
                            <p>Copyright © 2025 All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </footer>

    <a href="#0" class="call-now-float" aria-label="Call Now">
        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="24"
            height="24">
            <path
                d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21 11.36 11.36 0 003.54.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 5a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.54 1 1 0 01-.45 1.25l-2.2 2.2z" />
        </svg>
    <!-- Scroll to Top Button -->
    <button id="scrollTopBtn" title="Go to top">
      <i class="fa-solid fa-arrow-up"></i>
    </button>

    <script>
      // Show or hide the button
      const scrollTopBtn = document.getElementById("scrollTopBtn");
      window.addEventListener("scroll", () => {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
          scrollTopBtn.style.display = "block";
        } else {
          scrollTopBtn.style.display = "none";
        }
      });

      // Scroll to top when clicked
      scrollTopBtn.addEventListener("click", () => {
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      });
    </script>


<!-- Script -->
<script>
document.querySelectorAll('.open-modal').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const modalId = this.getAttribute('data-modal');
        document.getElementById(modalId).style.display = 'block';
    });
});

document.querySelectorAll('.close').forEach(btn => {
    btn.addEventListener('click', function() {
        this.closest('.modal').style.display = 'none';
    });
});

window.addEventListener('click', function(event) {
    document.querySelectorAll('.modal').forEach(modal => {
        if(event.target == modal) {
            modal.style.display = 'none';
        }
    });
});
</script>
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