@extends('layouts.frontend')
@section('title') Compare Home Security @endsection
@section('content')
  <div class="hero hero-small-mobile" style="height:320px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-box">
                    <div class="hero-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp"><span>Welcome!</span> To Compare Home Security</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque">
                                Find the <span>Best Home Security Systems</span></br> for Your Family
                            </h1>
                           
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

      <!-- Card 1: Automation Security System -->
      <div class="col-xl-5 col-md-6 d-flex">
        <div class="service-card" 
             style="background: #fff; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; overflow: hidden; height: 100%; display: flex; flex-direction: column;">

          <!-- Header Label -->
          <div style="background: #0f2453; color: #fff; padding: 18px 25px; font-size: 18px; font-weight: 700; letter-spacing: 0.5px; display: flex; align-items: center; gap: 20px;">
            <a href="#0">
              <img src="/frontend/my-img/RatingBadge.png" alt="Rating Badge" style="width: 40px;">
            </a>
            Best Automation Security System
          </div>

          <div style="padding: 30px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
            
            <!-- Top Content -->
            <div>
              <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
                <img src="/frontend/my-img/vivint-black.png" alt="Vivint Logo" class="vivint-logo" style="height: 45px; width: auto; gap:10px;">
                <div class="testimonial-google-review" style="display: flex; align-items: center; gap: 8px; background: #f7f9fc; padding: 8px 12px !important; border-radius: 8px;">
                  <h6 style="color:#ffff; margin-bottom:5px;">Ratings</h6>
                  <div style="display: flex; align-items: center; gap: 6px;">
                    <div style="color: #fbbc05;">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <p style="line-height:0px; margin-bottom:0px; color:#ffff;">(<span>4.9</span>)</p>
                  </div>
                </div>
              </div>

              <!-- Feature List -->
              <ul style="list-style: none; padding: 0; margin: 0 0 10px;">
                <li style="display: flex; align-items: center; gap: 10px; font-size: 16px; color: #0f2453;">
                  <span style="color:#2a4fa5; font-size: 20px;"><i class="fa-solid fa-check-circle" style="color:#2a4fa5;"></i></span> Smart home features
                </li>
                <li style="display: flex; align-items: center; gap: 10px; font-size: 16px; color: #0f2453;">
                  <span style="color:#2a4fa5; font-size: 20px;"><i class="fa-solid fa-check-circle" style="color:#2a4fa5;"></i></span> Robust equipment
                </li>
                <li style="display: flex; align-items: center; gap: 10px; font-size: 16px; color: #0f2453;">
                  <span style="color:#2a4fa5; font-size: 20px;"><i class="fa-solid fa-check-circle" style="color:#2a4fa5;"></i></span> Month-to-month option
                </li>
              </ul>

              <!-- Promo Text -->
              <div style="background:#f2f6ff; border-left:4px solid #2a4fa5; padding:15px 18px; border-radius:8px; font-size:15px; color:#333; margin-bottom:25px;">
              <strong style="color:#2a4fa5;">Special Offer:</strong> Get 3 FREE months of monitoring + FREE installation using code <b>THREEFREE</b>.
            </div>
            </div>

            <!-- Buttons -->
            <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-top: 25px;">
              <a href="#0" 
                 style="background: #0f2453; color: #fff; padding: 12px 22px; border-radius: 8px; font-weight: 600; text-decoration: none;">
                View Packages <i class="fa-solid fa-arrow-up-right-from-square"></i>
              </a>
              <a href="tel:8552869128" 
                 style="border: 2px solid #0f2453; color: #0f2453; padding: 10px 14px; border-radius: 8px; font-weight: 600; text-decoration: none;">
                <i class="fa-solid fa-phone"></i> Enquire Now
              </a>
            </div>

          </div>
        </div>
      </div>

      <!-- Card 2: ADT Security -->
      <div class="col-xl-5 col-md-6 d-flex">
        <div class="service-card" 
             style="background: #fff; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; overflow: hidden; height: 100%; display: flex; flex-direction: column;">

          <div style="padding: 30px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
            
            <!-- Top Content -->
            <div>
              <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; margin-top: 30px;">
                <!-- ADT Logo -->
                <img src="/frontend/my-img/adt-logo.svg" alt="ADT Logo" style="height: 90px; width: auto;">

                <!-- Customer Review Box -->
                <div class="testimonial-google-review" style="display: flex; align-items: center; gap: 8px; background: #f7f9fc; padding: 8px 12px !important; border-radius: 8px;">
                  <h6 style="color:#ffff; margin-bottom:5px;">Ratings</h6>
                  <div style="display: flex; align-items: center; gap: 6px;">
                    <div style="color: #fbbc05;">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star-half-stroke"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
                    <p style="line-height:0px; margin-bottom:0px; color:#ffff;">(<span>4.5</span>)</p>
                  </div>
                </div>
              </div>

              <!-- Feature List -->
              <ul style="list-style: none; padding: 0; margin: 0 0 30px;">
                <li style="display: flex; align-items: center; gap: 10px; font-size: 16px; color: #0f2453;">
                  <span style="color:#2a4fa5; font-size: 20px;"><i class="fa-solid fa-check-circle" style="color:#2a4fa5;"></i></span> Advanced features
                </li>
                <li style="display: flex; align-items: center; gap: 10px; font-size: 16px; color: #0f2453;">
                  <span style="color:#2a4fa5; font-size: 20px;"><i class="fa-solid fa-check-circle" style="color:#2a4fa5;"></i></span> 15 Years of experience
                </li>
                <li style="display: flex; align-items: center; gap: 10px; font-size: 16px; color: #0f2453;">
                  <span style="color:#2a4fa5; font-size: 20px;"><i class="fa-solid fa-check-circle" style="color:#2a4fa5;"></i></span> Professionally installed
                </li>
              </ul>

              <!-- Promo Text -->
              <p style="font-size: 15px; color: #333; line-height: 1.6;">
               
              </p>
               <div style="background:#f2f6ff; border-left:4px solid #2a4fa5; padding:15px 18px; border-radius:8px; font-size:15px; color:#333; margin-bottom:25px;">
              <strong style="color:#2a4fa5;">Special Offer:</strong> Get a <b>$100 ADT Visa®</b> Reward Card with a newly installed ADT system.
            </div>
            </div>

            <!-- Buttons -->
            <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-top: 25px;">
              <a href="#0" 
                 style="background: #0f2453; color: #fff; padding: 12px 22px; border-radius: 8px; font-weight: 600; text-decoration: none;">
                View Packages <i class="fa-solid fa-arrow-up-right-from-square"></i>
              </a>
              <a href="tel:8552869128" 
                 style="border: 2px solid #0f2453; color: #0f2453; padding: 10px 14px; border-radius: 8px; font-weight: 600; text-decoration: none;">
                <i class="fa-solid fa-phone"></i> Enquire Now
              </a>
            </div>

          </div>
        </div>
      </div>

      <!-- Bottom Description -->
      <div class="col-lg-10 mt-4">
        <p class="wow fadeInUp" data-wow-delay="0.2s" style="text-align: center; color: #0f2453; font-size: 16px; line-height: 1.7;">
          Compare Home Security is your trusted resource for honest, expert reviews of today’s leading home security providers.
          We help you compare features, prices, and performance so you can protect your home with confidence.
          Our comparisons are unbiased, detailed, and designed to make your decision simple and secure.
        </p>
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

<div class="our-pricing dark-section" id="pricing">
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

    <div class="row">
      <div class="col-lg-12">
        <div class="our-pricing-box" data-wow-delay="0.2s">
          <div class="pricing-tab-item" id="monthly">
            <div class="row">
             <div class="col-xl-3 col-md-6 mb-4 d-flex">
            <div class="card shadow-sm text-center w-100 d-flex flex-column h-100">

              <!-- Header Section -->
              <div style="background-color: #ffffffff; color: #fff; width: 100%; padding: 0px 10px; display: flex; align-items: center; justify-content: center; border-top-left-radius: 8px; border-top-right-radius: 8px; gap: 10px;">
                <img src="/frontend/my-img/special-offer.png" alt="Special Offer"
                    style="width: 260px; height: auto; margin-top: -25px;">
                <!-- <span style="font-size: 1rem; font-weight: 600;">Automation Security System</span> -->
              </div>

              <!-- Product Image -->
              <img src="/frontend/my-img/vivint-product.png" alt="vivint-product"
                  class="img-fluid mb-3" style="max-height: 180px; object-fit: contain; border-radius: 8px;">

              <!-- Card Body -->
              <div class="card-body p-0 d-flex flex-column justify-content-between flex-grow-1">
                <div class="card-content">
                  <h5 class="card-title mb-3" style="font-size: 1.2rem; color: #333;">What we like about Vivint</h5>
                  <ul class="text-start ps-3" style="font-size: 0.95rem; color: #444; margin-bottom: 16px;">
                    <li>Free professional installation</li>
                    <li>Lifetime warranty on devices & car guard</li>
                    <li>Advanced Home Automation</li>
                  </ul>
                  <p class="text-muted" style="font-size: 0.9rem; margin-bottom: 20px;">
                    Get up to <strong>3 FREE months</strong> of monitoring plus FREE installation with 
                    <strong>Promo code (THREEFREE)</strong>
                  </p>

                  <div class="d-flex flex-wrap justify-content-center gap-2 mb-3">
                    <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill bg-light text-primary small fw-medium">
                      <i class="bi bi-tools me-2"></i>Professional Installation
                    </span>
                    <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill bg-light text-primary small fw-medium">
                      <i class="bi bi-shield-lock me-2"></i>24x7 Monitoring
                    </span>
                    <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill bg-light text-primary small fw-medium">
                      <i class="bi bi-phone me-2"></i>Mobile App
                    </span>
                    <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill bg-light text-primary small fw-medium">
                      <i class="bi bi-exclamation-triangle me-2"></i>Fire Monitoring
                    </span>
                  </div>

                  <div class="text-center">
                    <a href="https://www.vivint.com/" class="see-more-btn">
                      See More Features <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </br>
                <!-- Bottom Buttons -->
                <div class="d-grid gap-2 mt-auto">
                  <a href="#0" class="custom-btn" style="background-color: #0f2453; color: #fff; border-radius: 8px; padding: 10px 0; font-weight: 600;">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i> View Packages
                  </a>
                  <a href="tel:+844-262-6777" class="custom-btn-outline" style="background-color: transparent; color: #0f2453; border: 2px solid #0f2453; border-radius: 8px; padding: 10px 0; font-weight: 600;">
                    <i class="fa-solid fa-phone"></i> Call for FREE Quote
                  </a>
                </div>
              </div>
            </div>
          </div>


              <div class="col-xl-3 col-md-6 mb-4 d-flex">
                <div class="card shadow-sm text-center w-100">
                  <img src="/frontend/my-img/Adt.png" alt="vivint-product"
                    class="img-fluid mb-3" style="max-height: 180px; object-fit: contain; border-radius: 8px;">
                  
                  <div class="card-body p-0 d-flex flex-column">
                    <div class="card-content">
                      <h5 class="card-title mb-3" style="font-size: 1.2rem; color: #333;">What we like about ADT</h5>
                      <ul class="text-start ps-3" style="font-size: 0.95rem; color: #444; margin-bottom: 16px;">
                        <li>
                              6-month, money-back guarantee. Certain restrictions apply. 
                              <a href="#" class="open-modal" data-modal="modal1" style="text-decoration: underline; color: #1e549bff; font-size:12px;">See Details</a>
                          </li>
                          <li>
                              Up to $500 theft protection guarantee. Certain restrictions apply. 
                              <a href="#" class="open-modal" data-modal="modal2" style="text-decoration: underline; color: #1e549bff; font-size:12px;">See Details</a>
                          </li>
                           <li>24/7 ADT monitoring</li>
                      </ul>
                      <p class="text-muted" style="font-size: 0.9rem; margin-bottom: 20px;">
                       Get a <strong> $100 ADT Visa®</strong> Reward Card with a newly installed <strong>ADT system</strong>
                      </p>
                        <div class="d-flex flex-wrap justify-content-center gap-2 mb-3">
                          <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill bg-light text-primary small fw-medium">
                            <i class="bi bi-tools me-2"></i>DIY Installation
                          </span>
                          <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill bg-light text-primary small fw-medium">
                            <i class="bi bi-shield-lock me-2"></i>Professional Installation
                          </span>
                          <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill bg-light text-primary small fw-medium">
                            <i class="bi bi-phone me-2"></i>24x7 Monitoring
                          </span>
                          <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill bg-light text-primary small fw-medium">
                            <i class="bi bi-exclamation-triangle me-2"></i>Mobile App
                          </span>
                        </div>
                          <div class="text-center">
                              <a href="https://www.adt.com/" class="see-more-btn">
                                  See More Features <i class="fa-solid fa-circle-arrow-right"></i>
                              </a>
                          </div>
              </br>
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
                        <li>24/7 professional monitoring</li>
                        <li>Customized security systems tailored for your home</li>
                        <li>Control your system via Google Home, Amazon Alexa, Apple TV and more</li>
                      </ul>
                      <p class="text-muted" style="font-size: 0.9rem; margin-bottom: 20px;">
                       Get a free Video Doorbell with your new security system
                      </p>
                      <div class="d-flex flex-wrap justify-content-center gap-2 mb-3">
                          <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill bg-light text-primary small fw-medium">
                            <i class="bi bi-tools me-2"></i>Professional Installation
                          </span>
                          <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill bg-light text-primary small fw-medium">
                            <i class="bi bi-shield-lock me-2"></i>24x7 Monitoring
                          </span>
                          <span class="d-inline-flex align-items-center px-3 py-1 rounded-pill bg-light text-primary small fw-medium">
                            <i class="bi bi-phone me-2"></i>Mobile App
                          </span>
                        </div>
                         <div class="text-center">
                              <a href="https://brinkshome.com/" class="see-more-btn">
                                  See More Features <i class="fa-solid fa-circle-arrow-right"></i>
                              </a>
                          </div>
                    </div>
              </br>

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
                      <h5 class="card-title mb-3" style="font-size: 1.2rem;">What we like about SimpliSafe</h5>
                      <ul class="text-start ps-3" style="font-size: 0.95rem; color: #333; margin-bottom: 16px;">
                        <li>60-Day Trial for equipment</li>
                        <li>Self Monitoring Option</li>
                        <li>Award-winning company</li>
                      </ul>
                      <!-- <p class="text-muted" style="font-size: 0.9rem; margin-bottom: 20px;">
                        Get up to <strong>4 FREE months</strong> of monitoring plus FREE installation with 
                        <strong>Promo code (4FREE)</strong>
                      </p> -->
                        <div class="d-flex flex-wrap justify-content-center gap-2 mb-3">
                              <span class="d-inline-flex align-items-center px-3 py-2 rounded-pill bg-light text-primary small fw-medium">
                                <i class="bi bi-wrench-adjustable me-2"></i>DIY Installation
                              </span>
                              <span class="d-inline-flex align-items-center px-3 py-2 rounded-pill bg-light text-primary small fw-medium">
                                <i class="bi bi-truck me-2"></i>Professional Installation
                              </span>
                              <span class="d-inline-flex align-items-center px-3 py-2 rounded-pill bg-light text-primary small fw-medium">
                                <i class="bi bi-shield-check me-2"></i>24x7 Monitoring
                              </span>
                              <span class="d-inline-flex align-items-center px-3 py-2 rounded-pill bg-light text-primary small fw-medium">
                                <i class="bi bi-phone me-2"></i>Mobile App
                              </span>
                          </div>
                          <!-- Small Button -->
                          <div class="text-center">
                              <a href="https://simplisafe.com/" class="see-more-btn">
                                  See More Features <i class="fa-solid fa-circle-arrow-right"></i>
                              </a>
                          </div>

 </br>

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


<style>
.see-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 4px 12px;
    font-size: 0.875rem; /* small size like btn-sm */
    font-weight: 500;
    border: 1px solid #0f2453;
    color: #0f2453;
    background: transparent;
    border-radius: 6px;
    text-decoration: none;
    transition: 0.3s;
}

.see-more-btn:hover {
    background-color: #0f2453;
    color: #fff;
    text-decoration: none;
}
</style>
   <style>
  .text-primary {
    color: #044ab3ff !important; /* deeper blue */
  }
  .bg-light {
    background-color: #9fc7e7ff !important;
  }
  .bi {
    font-size: 1rem;
  }
  .rounded-pill {
    border-radius: 50px !important;
  }
</style>


<!-- Modal 1 -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3>6-Months Money-Back Guarantee</h3>
        </br>
        <p>
            Money Back guarantee only applies after ADT has made attempts to resolve a system related issue and has not been able to resolve that issue within the first six months of your contract. Equipment must be fully removed before a refund will be processed. Conditions preventing normal system operation cannot be caused by the customer.
        </p>
    </div>
</div>

<!-- Modal 2 -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3>Theft Protection Guarantee</h3>
              </br>
        <p>
            Customer may receive reimbursement of up to five hundred dollars ($500) of Customer’s homeowner’s insurance deductible (if any) if, and only if, ALL requirements for Theft Protection Guarantee are met to ADT’s reasonable satisfaction. Customer must request reimbursement within 60 days of property loss. Request must be mailed to ADT and include: Theft Protection Guarantee certificate signed by Customer, a letter from Customer requesting reimbursement, a copy of the police report, and a copy of the accepted insurance claim. ADT reserves the right to reject any application for reimbursement that does not comply with all of the requirements.
        </p>
    </div>
</div>

<!-- Styles -->
<style>
.modal {
    display: none; 
    position: fixed; 
    z-index: 1000; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgba(0,0,0,0.5); 
}
.modal-content {
    background-color: #fff;
    margin: auto;
    padding: 20px;
    border-radius: 10px;
    max-width: 600px;
    position: relative;
}
.close {
    color: #aaa;
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}
.close:hover {
    color: #000;
}
</style>

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


<div class="our-faqs">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="our-faqs-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Frequently Asked Questions</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Everything you want to <span>know Home security</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">From service details to protection strategies, we provide clear explanations to help you make informed decisions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="faq-accordion" id="accordion">
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    Q1: How do I choose the best home security system for my needs?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Start by identifying your home’s size, entry points, and budget. We compare top-rated brands and products so you can easily find the right mix of cameras, sensors, and smart features for your home.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Q2: Are wireless security cameras better than wired ones?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Wireless cameras are easier to install and connect to Wi-Fi, while wired systems offer more stable connections and power reliability. Our reviews highlight the pros and cons of both to help you decide.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Q3: Do home security systems require a monthly subscription?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Some brands offer free self-monitoring through mobile apps, while others require a monthly fee for 24/7 professional monitoring. Our comparison tables clearly show which plans fit your budget.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Q4: Can I install a home security system myself?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Yes, many modern systems are DIY-friendly and come with step-by-step mobile guidance. We review which brands offer the easiest installation experience versus those requiring professional setup.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Q5: What features should I look for in a smart home security system?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Key features include HD video recording, motion detection, mobile alerts, night vision, two-way audio, and integration with Alexa or Google Home. We break down these features in each product review for easy comparison.</p>
                                </div>
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