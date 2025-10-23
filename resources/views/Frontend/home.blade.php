@extends('layouts.frontend')
@section('title') Compare Home Security @endsection
@section('content')
  <div class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-box">
                    <div class="hero-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp"><span>Welcome!</span> To Compare Home Security</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque">
                                Find the <span>Best Home Security Systems</span> for Your Family
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Compare Home Security is your trusted resource for honest, expert reviews of today’s leading home security providers. 
                                We help you compare features, prices, and performance so you can protect your home with confidence.
                                Our comparisons are unbiased, detailed, and designed to make your decision simple and secure.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="our-services" style="padding: 60px 0; background: #f4f6fb;">
  <div class="container">
    <div class="row justify-content-center" style="gap: 30px;">

      <div class="col-xl-5 col-md-6">
        <div class="service-card" style="background: #fff; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; overflow: hidden;">
          <div style="padding: 30px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
              <img src="/frontend/my-img/adt-logo.svg" alt="ADT Logo" style="height: 45px; width: auto;">
              <a href="#0"><img src="/frontend/my-img/RatingBadge.png" alt="arrow" style="height: 22px;"></a>
            </div>

            <ul style="list-style: none; padding: 0; margin: 0 0 30px;">
              <li style="display: flex; align-items: center; gap: 10px; font-size: 16px; color: #0f2453; margin-bottom: 12px;">
                <span style="color:#2a4fa5;">•</span> Advanced features
              </li>
              <li style="display: flex; align-items: center; gap: 10px; font-size: 16px; color: #0f2453; margin-bottom: 12px;">
                <span style="color:#2a4fa5;">•</span> 15 Years of experience
              </li>
              <li style="display: flex; align-items: center; gap: 10px; font-size: 16px; color: #0f2453;">
                <span style="color:#2a4fa5;">•</span> Professionally installed
              </li>
            </ul>
          
            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
              <a href="#0" style="background: #0f2453; color: #fff; padding: 12px 22px; border-radius: 8px; font-weight: 600; text-decoration: none;">View Packages <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
              <a href="tel:8552869128" style="border: 2px solid #0f2453; color: #0f2453; padding: 10px 10px; border-radius: 8px; font-weight: 600; text-decoration: none;"><i class="fa-solid fa-phone"></i> Enquire Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-5 col-md-6">
        <div class="service-card" style="background: #fff; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; overflow: hidden;">
          <div style="padding: 30px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
              <img src="/frontend/my-img/vivint-black.png" alt="Vivint Logo" style="height: 45px; width: auto;">
              <a href="#0"><img src="/frontend/my-img/RatingBadge.png" alt="arrow" style="height: 22px;"></a>
            </div>

            <ul style="list-style: none; padding: 0; margin: 0 0 30px;">
              <li style="display: flex; align-items: center; gap: 10px; font-size: 16px; color: #0f2453; margin-bottom: 12px;">
                <span style="color:#2a4fa5;">•</span> Smart home features
              </li>
              <li style="display: flex; align-items: center; gap: 10px; font-size: 16px; color: #0f2453; margin-bottom: 12px;">
                <span style="color:#2a4fa5;">•</span> Robust equipment
              </li>
              <li style="display: flex; align-items: center; gap: 10px; font-size: 16px; color: #0f2453;">
                <span style="color:#2a4fa5;">•</span> Month-to-month option
              </li>
            </ul>

            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
              <a href="#0" style="background: #0f2453; color: #fff; padding: 12px 22px; border-radius: 8px; font-weight: 600; text-decoration: none;">View Packages <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
              <a href="tel:8552869128" style="border: 2px solid #0f2453; color: #0f2453; padding: 10px 10px; border-radius: 8px; font-weight: 600; text-decoration: none;"><i class="fa-solid fa-phone"></i> Enquire Now</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<style>
.service-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 25px rgba(0,0,0,0.12);
}
@media (max-width: 767px) {
  .service-card {
    margin-bottom: 25px;
  }
}
</style> 

<div class="our-pricing dark-section" id="prising">
  <div class="container">
    <div class="row section-row">
      <div class="col-lg-12">
        <div class="section-title section-title-center">
          <h3 class="wow fadeInUp">our Package Plan</h3>
          <h2 class="text-anime-style-2" data-cursor="-opaque">
            Affordable, scalable cybersecurity services for businesses 
            <span>of all sizes</span>
          </h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="our-pricing-box" data-wow-delay="0.2s">
          <div class="pricing-tab-item" id="monthly">
            <div class="row">
            
              <style>
                .card {
                  display: flex;
                  flex-direction: column;
                  justify-content: space-between;
                  height: 100%;
                  border-radius: 12px;
                  padding: 20px;
                  background-color: #f9f9f9;
                }
                .card-body {
                  display: flex;
                  flex-direction: column;
                  justify-content: space-between;
                  flex-grow: 1;
                }
                .card-content {
                  flex-grow: 1;
                }
                .d-grid.gap-2 {
                  margin-top: auto;
                }
                .custom-btn:hover {
                  background-color: #1d366f !important;
                  transform: translateY(-2px);
                }
                .custom-btn-outline:hover {
                  background-color: #0f2453 !important;
                  color: #fff !important;
                  transform: translateY(-2px);
                }
              </style>


              <div class="col-xl-3 col-md-6 mb-4 d-flex">
                <div class="card shadow-sm text-center w-100">
                  <img src="/frontend/my-img/vivint-product.png" alt="vivint-product"
                    class="img-fluid mb-3" style="max-height: 180px; object-fit: contain; border-radius: 8px;">
                  
                  <div class="card-body p-0 d-flex flex-column">
                    <div class="card-content">
                      <h5 class="card-title mb-3" style="font-size: 1.2rem; color: #333;">What we like about Vivint</h5>
                      <ul class="text-start ps-3" style="font-size: 0.95rem; color: #444; margin-bottom: 16px;">
                        <li>Free professional installation</li>
                        <li>Lifetime warranty on devices & car guard</li>
                        <li>Advanced Home Automation</li>
                      </ul>
                      <p class="text-muted" style="font-size: 0.9rem; margin-bottom: 20px;">
                        Get up to <strong>4 FREE months</strong> of monitoring plus FREE installation with 
                        <strong>Promo code (4FREE)</strong>
                      </p>
                      <div class="d-flex flex-wrap justify-content-center gap-2 mb-3">
                        <span class="badge-item"><i class="bi bi-tools me-2 text-primary"></i>Professional Installation</span>
                        <span class="badge-item"><i class="bi bi-shield-lock me-2 text-primary"></i>24x7 Monitoring</span>
                        <span class="badge-item"><i class="bi bi-phone me-2 text-primary"></i>Mobile App</span>
                        <span class="badge-item"><i class="bi bi-exclamation-triangle me-2 text-primary"></i>Fire Monitoring</span>
                      </div>
                    </div>

                    <div class="d-grid gap-2">
                      <a href="#0" class="custom-btn" style="background-color: #0f2453; color: #fff; border-radius: 8px; padding: 10px 0; font-weight: 600;"><i class="fa-solid fa-arrow-up-right-from-square"></i> View Packages</a>
                      <a href="tel:+844-262-6777" class="custom-btn-outline" style="background-color: transparent; color: #0f2453; border: 2px solid #0f2453; border-radius: 8px; padding: 10px 0; font-weight: 600;"><i class="fa-solid fa-phone"></i> Call for FREE Quote</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-md-6 mb-4 d-flex">
                <div class="card shadow-sm text-center w-100">
                  <img src="/frontend/my-img/Adt.png" alt="adt-product"
                    class="img-fluid mb-3" style="max-height: 180px; object-fit: contain; border-radius: 8px;">
                  
                  <div class="card-body p-0 d-flex flex-column">
                    <div class="card-content">
                      <h5 class="card-title mb-3" style="font-size: 1.2rem; color: #333;">What we like about ADT</h5>
                      <ul class="text-start ps-3" style="font-size: 0.95rem; color: #444; margin-bottom: 16px;">
                        <li>6-month, money-back guarantee.</li>
                        <li>Up to $500 theft protection guarantee.</li>
                        <li>24/7 ADT monitoring</li>
                      </ul>
                      <p class="text-muted" style="font-size: 0.9rem; margin-bottom: 20px;">
                        Get up to <strong>4 FREE months</strong> of monitoring plus FREE installation with 
                        <strong>Promo code (4FREE)</strong>
                      </p>
                      <div class="d-flex flex-wrap justify-content-center gap-2 mb-3">
                        <span class="badge-item"><i class="bi bi-tools me-2 text-primary"></i>Professional Installation</span>
                        <span class="badge-item"><i class="bi bi-shield-lock me-2 text-primary"></i>24x7 Monitoring</span>
                        <span class="badge-item"><i class="bi bi-phone me-2 text-primary"></i>Mobile App</span>
                        <span class="badge-item"><i class="bi bi-exclamation-triangle me-2 text-primary"></i>Smoke Detection</span>
                      </div>
                    </div>

                    <div class="d-grid gap-2">
                      <a href="#0" class="custom-btn" style="background-color: #0f2453; color: #fff; border-radius: 8px; padding: 10px 0; font-weight: 600;"><i class="fa-solid fa-arrow-up-right-from-square"></i> View Packages</a>
                      <a href="tel:+844-262-6777" class="custom-btn-outline" style="background-color: transparent; color: #0f2453; border: 2px solid #0f2453; border-radius: 8px; padding: 10px 0; font-weight: 600;"><i class="fa-solid fa-phone"></i> Call for FREE Quote</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-md-6 mb-4 d-flex">
                <div class="card shadow-sm text-center w-100">
                  <img src="/frontend/my-img/brings-home.png" alt="brinks-product"
                    class="img-fluid mb-3" style="max-height: 180px; object-fit: contain; border-radius: 8px;">
                  
                  <div class="card-body p-0 d-flex flex-column">
                    <div class="card-content">
                      <h5 class="card-title mb-3" style="font-size: 1.2rem; color: #333;">What we like about Brinks</h5>
                      <ul class="text-start ps-3" style="font-size: 0.95rem; color: #444; margin-bottom: 16px;">
                        <li>Professional Installation</li>
                        <li>24x7 Monitoring</li>
                        <li>Mobile App</li>
                      </ul>
                      <p class="text-muted" style="font-size: 0.9rem; margin-bottom: 20px;">
                        Get up to <strong>4 FREE months</strong> of monitoring plus FREE installation with 
                        <strong>Promo code (4FREE)</strong>
                      </p>
                      <div class="d-flex flex-wrap justify-content-center gap-2 mb-3">
                        <span class="badge-item"><i class="bi bi-tools me-2 text-primary"></i>Professional Installation</span>
                        <span class="badge-item"><i class="bi bi-shield-lock me-2 text-primary"></i>24x7 Monitoring</span>
                        <span class="badge-item"><i class="bi bi-phone me-2 text-primary"></i>Mobile App</span>
                        <span class="badge-item"><i class="bi bi-exclamation-triangle me-2 text-primary"></i>Fire Monitoring</span>
                      </div>
                    </div>

                    <div class="d-grid gap-2">
                      <a href="#0" class="custom-btn" style="background-color: #0f2453; color: #fff; border-radius: 8px; padding: 10px 0; font-weight: 600;"><i class="fa-solid fa-arrow-up-right-from-square"></i> View Packages</a>
                      <a href="tel:+844-262-6777" class="custom-btn-outline" style="background-color: transparent; color: #0f2453; border: 2px solid #0f2453; border-radius: 8px; padding: 10px 0; font-weight: 600;"><i class="fa-solid fa-phone"></i> Call for FREE Quote</a>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xl-3 col-md-6 mb-4 d-flex">
                <div class="card shadow-sm text-center w-100">
                  <img src="/frontend/my-img/simplysafe.png" alt="simplysafe-product"
                    class="img-fluid mb-3" style="max-height: 180px; object-fit: contain; border-radius: 8px;">
                  
                  <div class="card-body p-0 d-flex flex-column">
                    <div class="card-content">
                      <h5 class="card-title mb-3" style="font-size: 1.2rem; color: #0f2453;">What we like about SimpliSafe</h5>
                      <ul class="text-start ps-3" style="font-size: 0.95rem; color: #333; margin-bottom: 16px;">
                        <li>60-Day Trial for equipment</li>
                        <li>Self Monitoring Option</li>
                        <li>Award-winning company</li>
                      </ul>
                      <p class="text-muted" style="font-size: 0.9rem; margin-bottom: 20px;">
                        Get up to <strong>4 FREE months</strong> of monitoring plus FREE installation with 
                        <strong>Promo code (4FREE)</strong>
                      </p>
                      <div class="d-flex flex-wrap justify-content-center gap-2 mb-3">
                        <span class="badge-item"><i class="bi bi-tools me-2" style="color:#0f2453;"></i>DIY Installation</span>
                        <span class="badge-item"><i class="bi bi-shield-lock me-2" style="color:#0f2453;"></i>Professional Installation</span>
                        <span class="badge-item"><i class="bi bi-phone me-2" style="color:#0f2453;"></i>24x7 Monitoring</span>
                        <span class="badge-item"><i class="bi bi-exclamation-triangle me-2" style="color:#0f2453;"></i>Mobile App</span>
                      </div>
                    </div>

                    <div class="d-grid gap-2">
                      <a href="#0" class="custom-btn" style="background-color: #0f2453; color: #fff; border-radius: 8px; padding: 10px 0; font-weight: 600;"><i class="fa-solid fa-arrow-up-right-from-square"></i> View Packages</a>
                      <a href="tel:+844-262-6777" class="custom-btn-outline" style="background-color: transparent; color: #0f2453; border: 2px solid #0f2453; border-radius: 8px; padding: 10px 0; font-weight: 600;"><i class="fa-solid fa-phone"></i> Call for FREE Quote</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
                        <div class="pricing-tab-item d-none" id="annually">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <!-- PricingItemStart -->
                                    <div class="pricing-item">
                                        <!-- Pricing Header Start -->
                                        <div class="pricing-header">
                                            <h3>Basic Plan</h3>
                                            <p>Discover how our trusted have empowered businesses.</p>
                                            <h2>$99.00<sub>/Yearly</sub></h2>
                                        </div>
                                        <!-- Pricing Header End -->
                                
                                        <!-- Pricing body Start -->
                                        <div class="pricing-body">
                                            <h3>What's Included:</h3>
                                            <ul>
                                                <li>Basic firewall protection</li>
                                                <li>Yearly security reports</li>
                                                <li>Real-time threat monitoring</li>
                                            </ul>
                                        </div>
                                        <!-- Pricing body End -->

                                        <!-- Pricing Button Start -->
                                        <div class="pricing-btn">
                                            <a href="#0" class="btn-default btn-highlighted">get started</a>
                                        </div>
                                        <!-- Pricing Button End -->
                                    </div>
                                    <!-- Pricing Item End -->
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <!-- PricingItemStart -->
                                    <div class="pricing-item highlighted-box">
                                        <!-- Pricing Header Start -->
                                        <div class="pricing-header">
                                            <h3>Standard Plan</h3>
                                            <p>Discover how our truste have empowered businesses.</p>
                                            <h2>$249.00<sub>/Yearly</sub></h2>
                                        </div>
                                        <!-- Pricing Header End -->
                                
                                        <!-- Pricing body Start -->
                                        <div class="pricing-body">
                                            <h3>What's Included:</h3>
                                            <ul>
                                                <li>Basic firewall protection</li>
                                                <li>Yearly security reports</li>
                                                <li>Real-time threat monitoring</li>
                                            </ul>
                                        </div>
                                        <!-- Pricing body End -->

                                        <!-- Pricing Button Start -->
                                        <div class="pricing-btn">
                                            <a href="#0" class="btn-default btn-highlighted">get started</a>
                                        </div>
                                        <!-- Pricing Button End -->
                                    </div>
                                    <!-- Pricing Item End -->
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <!-- PricingItemStart -->
                                    <div class="pricing-item">
                                        <!-- Pricing Header Start -->
                                        <div class="pricing-header">
                                            <h3>Premium Plan</h3>
                                            <p>Discover how our trusted have empowered businesses.</p>
                                            <h2>$349.00<sub>/Yearly</sub></h2>
                                        </div>
                                        <!-- Pricing Header End -->
                                
                                        <!-- Pricing body Start -->
                                        <div class="pricing-body">
                                            <h3>What's Included:</h3>
                                            <ul>
                                                <li>Basic firewall protection</li>
                                                <li>Yearly security reports</li>
                                                <li>Real-time threat monitoring</li>
                                            </ul>
                                        </div>
                                        <!-- Pricing body End -->

                                        <!-- Pricing Button Start -->
                                        <div class="pricing-btn">
                                            <a href="#0" class="btn-default btn-highlighted">get started</a>
                                        </div>
                                        <!-- Pricing Button End -->
                                    </div>
                                    <!-- Pricing Item End -->
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <!-- PricingItemStart -->
                                    <div class="pricing-item">
                                        <!-- Pricing Header Start -->
                                        <div class="pricing-header">
                                            <h3>Enterprise Plan</h3>
                                            <p>Discover how our trusted have empowered businesses.</p>
                                            <h2>$449.00<sub>/Yearly</sub></h2>
                                        </div>
                                        <!-- Pricing Header End -->
                                
                                        <!-- Pricing body Start -->
                                        <div class="pricing-body">
                                            <h3>What's Included:</h3>
                                            <ul>
                                                <li>Basic firewall protection</li>
                                                <li>Yearly security reports</li>
                                                <li>Real-time threat monitoring</li>
                                            </ul>
                                        </div>
                                        <!-- Pricing body End -->

                                        <!-- Pricing Button Start -->
                                        <div class="pricing-btn">
                                            <a href="#0" class="btn-default btn-highlighted">get started</a>
                                        </div>
                                        <!-- Pricing Button End -->
                                    </div>
                                    <!-- Pricing Item End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="our-testimonials dark-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="our-testimonial-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Customer Reviews</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            What homeowners say about <span>Compare Home Security</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Read how real users found the best home security systems through our trusted reviews and easy-to-understand comparisons. Your peace of mind starts here.
                        </p>
                    </div>
                    <div class="testimonial-google-review wow fadeInUp" data-wow-delay="0.6s">
                        <div class="about-google-review-header">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-google.svg" alt="Google Icon">
                            </div>
                            <div class="about-google-review-content">
                                <p>Google Reviews</p>
                            </div>
                        </div>
                        <div class="google-review-content">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <p>(<span class="counter">4.9</span>)</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7 col-lg-6">
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper" data-cursor-text="Drag">

                            <!-- Testimonial 1 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="testimonial-quote">
                                            <img src="/frontend/images/testimonial-quote.svg" alt="Quote Icon">
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <div class="testimonial-content">
                                            <p>“Compare Home Security helped me choose the perfect alarm system for my new home. Their comparisons were clear, honest, and easy to understand. I ended up saving money and getting better protection than I expected.”</p>
                                        </div>
                                        <div class="testimonial-author-content">
                                            <h3>Emily Johnson</h3>
                                            <p>Homeowner, California</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 2 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="testimonial-quote">
                                            <img src="/frontend/images/testimonial-quote.svg" alt="Quote Icon">
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <div class="testimonial-content">
                                            <p>“I had no idea there were so many options for smart home security. Thanks to Compare Home Security, I found a system that integrates with Alexa and my cameras perfectly. Their top-rated list was spot on.”</p>
                                        </div>
                                        <div class="testimonial-author-content">
                                            <h3>David Miller</h3>
                                            <p>Apartment Owner, Texas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 3 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="testimonial-quote">
                                            <img src="/frontend/images/testimonial-quote.svg" alt="Quote Icon">
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <div class="testimonial-content">
                                            <p>“Their review on professional vs DIY systems was super helpful. I finally went with a monitored plan that fits my family’s lifestyle. The site saved me a lot of time and confusion.”</p>
                                        </div>
                                        <div class="testimonial-author-content">
                                            <h3>Sophia Lee</h3>
                                            <p>Homeowner, Florida</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 4 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="testimonial-quote">
                                            <img src="/frontend/images/testimonial-quote.svg" alt="Quote Icon">
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <div class="testimonial-content">
                                            <p>“The team at Compare Home Security truly knows what they’re doing. Their detailed breakdowns made it easy to compare installation costs, monitoring fees, and features — all in one place.”</p>
                                        </div>
                                        <div class="testimonial-author-content">
                                            <h3>Michael Thompson</h3>
                                            <p>Townhouse Owner, New York</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 5 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="testimonial-quote">
                                            <img src="/frontend/images/testimonial-quote.svg" alt="Quote Icon">
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <div class="testimonial-content">
                                            <p>“After reading their in-depth reviews, I switched from my old provider to a new one that costs less and offers better smart alerts. The comparisons are 100% unbiased and genuinely useful.”</p>
                                        </div>
                                        <div class="testimonial-author-content">
                                            <h3>Rachel Adams</h3>
                                            <p>Homeowner, Illinois</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slider-btn">
                            <div class="testimonial-button-prev"></div>
                            <div class="testimonial-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="hero" style="padding: 70px 0 100px !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-box">
                    <div class="hero-item-list">
                        <div class="hero-item box-1 dark-box wow fadeInUp">
                            <div class="hero-item-content">
                                <h3>“Security isn’t just about alarms — it’s about protecting what truly matters: your peace of mind.”</h3>
                                <p>— Olivia Grant, <span>Home Security Analyst at Compare Home Security</span></p>
                            </div>
                            <div class="hero-author-image">
                                <figure class="image-anime">
                                    <img src="/frontend/images/hero-author-image.jpg" alt="Olivia Grant - Home Security Expert">
                                </figure>
                            </div>
                        </div>
                        <div class="hero-item box-2 dark-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="hero-counter hero-item-content">
                                <h2><span class="counter">20</span>K+</h2>
                            </div>
                            <div class="hero-item-content">
                                <h3>Homeowners Guided</h3>
                                <p>We’ve helped over 20,000 families choose the safest and smartest home security solutions available.</p>
                            </div>
                        </div>
                        <div class="hero-item box-3 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="hero-client-box">
                                <div class="satisfy-client-images">
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="/frontend/images/author-1.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="/frontend/images/author-2.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="/frontend/images/author-3.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="/frontend/images/author-4.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="satisfy-client-image">
                                        <figure class="image-anime">
                                            <img src="/frontend/images/author-5.jpg" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="hero-client-content hero-item-content">
                                    <h3>Thousands of Satisfied Families</h3>
                                    <p>Our data-driven comparisons and expert insights have earned the trust of homeowners across the U.S.</p>
                                </div>
                            </div>

                            <div class="hero-item-content">
                                <h2><span class="counter">75</span>+</h2>
                                  <p>Leading security systems compared to ensure your home stays protected 24/7.</p>
                            </div>
                        </div>
                        <div class="hero-item box-4 dark-box wow fadeInUp" data-wow-delay="0.6s">
                            <div class="hero-item-content">
                                <h3>Helping families stay secure through transparent reviews, expert ratings, and side-by-side system comparisons.</h3>
                            </div>

                          <div class="hero-item-image" 
                              style="display:flex; justify-content:center; align-items:center; width:100%;">
                              <figure style="
                                  width:100%;
                                  max-width:263px;
                                  aspect-ratio:263/275;
                                  margin:0;
                                  background:#f9f9f9;
                                  border-radius:5px;
                                  overflow:hidden;
                                  display:flex;
                                  justify-content:center;
                                  align-items:center;">
                                  <img src="/frontend/my-img/security.jpg" 
                                      alt="Home Security Illustration"
                                      style="width:100%; height:100%; object-fit:cover; object-position:center top;">
                              </figure>
                          </div>

                          <style>
                          @media (max-width: 767px) {
                            .hero-item-image figure {
                              max-width: 90%;
                              border-radius: 10px;
                            }
                          }
                          </style>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection