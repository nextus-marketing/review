@extends('layouts.frontend')
@section('title') Contact Us | Compare Home Security @endsection
@section('content')
  <!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Contact <span>us</span></h1>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
                <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
                <span><img src="/frontend/my-img/adt-logo.svg" alt=""></span>
                <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
                <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
                <span><img src="/frontend/my-img/adt-logo.svg" alt=""></span>
                <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
                <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
                <span><img src="/frontend/my-img/adt-logo.svg" alt=""></span>
            </div>

            <div class="scrolling-content">
                <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
                <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
                <span><img src="/frontend/my-img/adt-logo.svg" alt=""></span>
                <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
                <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
                <span><img src="/frontend/my-img/adt-logo.svg" alt=""></span>
                <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
                <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
                <span><img src="/frontend/my-img/adt-logo.svg" alt=""></span>
            </div>
        </div>
        <!-- Scrolling Ticker End -->
    </div>

    <!-- Page Contact Us Start -->
   <div class="page-contact-us">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <!-- Contact Info List Start -->
                <div class="contact-info-list" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 30px; text-align: center;">
                    
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" style="flex: 0 1 300px;">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-phone-white.svg" alt="">
                        </div>
                        <div class="contact-info-content">
                            <h3>Contact us</h3>
                            <p><a href="tel:+123456789">+(123) 456-789</a></p>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->

                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s" style="flex: 0 1 300px;">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-mail-white.svg" alt="">
                        </div>
                        <div class="contact-info-content">
                            <h3>Email us</h3>
                            <p><a href="mailto:info@comparehomesecurity.com">info@comparehomesecurity.com</a></p>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->

                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.6s" style="flex: 0 1 300px;">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-location-white.svg" alt="">
                        </div>
                        <div class="contact-info-content">
                            <h3>Address</h3>
                            <p>221 Baker Street </br>   
                                New York, NY 10001</p>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->

                </div>
                <!-- Contact Info List End -->
            </div>

            <div class="col-xl-5">
                <!-- Contact Us Content Start -->
                <div class="contact-content-box">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Get In Touch</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Contact us <span>today!</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Have questions or need expert cybersecurity support? Our team is ready to guide you with tailored solutions.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe wow fadeInUp" data-wow-delay="0.4s">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map IFrame End -->
                </div>
                <!-- Contact Us Content End -->
            </div>

            <div class="col-xl-7">
                <!-- Contact Us Form Start -->
                <div class="contact-us-form">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="text-anime-style-2">Fill up the <span>form</span></h2>
                        <p class="wow fadeInUp">Simply fill out the form below with your details and requirements, and our team will get back to you promptly with the right solutions for your needs.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact Form Start -->
                        <form action="{{ route('contact.enquiry.store') }}" method="POST" enctype="multipart/form-data" id="contactForm" class="wow fadeInUp" data-wow-delay="0.2s">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Your Full Name">
                                <div class="field_error" id="full_name-error" style="color:#f33838"></div>
                            </div>
    
                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Subject *</label>
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                                <div class="field_error" id="subject-error" style="color:#f33838"></div>
                            </div>
                            
                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name ="email" class="form-control" id="email" placeholder="Your Email Address">
                                <div class="field_error" id="email-error" style="color:#f33838"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <label class="form-label">Phone Number *</label>
                                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Your Phone Number">
                                <div class="field_error" id="mobile-error" style="color:#f33838"></div>
                            </div>
    
                            <div class="form-group col-md-12 mb-2">
                                <label class="form-label">Message</label>
                                <textarea name="message" class="form-control" id="message" rows="5" placeholder="Any Message..."></textarea>
                            </div>
    
                              <div class="col-12 mt-0 mb-0">
                                <div style="text-align: center; margin-top: 10px;">
                                <div class="g-recaptcha d-inline-block" data-sitekey="6Lc-MPYrAAAAAJDFMlYMbZwi9wsPm8tsrLWEgGZh"></div>
                                <div class="field_error" id="captcha-error" style="color:#ff0000; margin-top:5px;"></div>
                            </div>

                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

                            <div class="col-lg-12 mt-3">
                                <div class="contact-form-btn">
                                    <button type="submit" class="btn-default"><span>Submit Form</span></button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Page Contact Us End -->


     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contactForm').submit(function(e) {
                e.preventDefault();
                $('div[id$="-error"]').empty(); // Clear previous errors
                $('#sme_form_btn').prop('disabled', true).hide(); // Disable & hide button
                $('#form_loader').show(); // Show loader

                var form = $(this);
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $('#form_loader').hide();
                        $('#contactForm_btn').prop('disabled', false).show();

                        if (data.status === 'success') {
                            toastr.success(data.message, '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                            setTimeout(function() {
                                window.location.href = '/thankyou';
                            }, 1000);
                        }
                    },
                    error: function(xhr) {
                        $('#form_loader').hide();
                        $('#contactForm_btn').prop('disabled', false).show();

                        toastr.error(
                            'There are some errors in the form. Please check your inputs.',
                            '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                $('#' + key + '-error').html(value.join(', '));
                            });

                            const firstErrorKey = Object.keys(xhr.responseJSON.errors)[0];
                            const errorElement = $('#' + firstErrorKey + '-error');
                            if (errorElement.length) {
                                $('html, body').animate({
                                    scrollTop: errorElement.offset().top - 200
                                }, 500);
                            }
                        }
                    }
                });
            });
        });
    </script>
@endsection