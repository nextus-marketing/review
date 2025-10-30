@extends('layouts.frontend')
@section('title')
    Disclosure | Compare Home Security
@endsection
@section('content')
<style>
/* Default (desktop/tablet) */
.container,
.container-fluid,
.container-lg,
.container-md,
.container-sm,
.container-xl,
.container-xxl {
  padding-right: 70px;
  padding-left: 70px;
}

/* ===== Responsive Fixes ===== */
@media (max-width: 991px) {
  .container,
  .container-fluid,
  .container-lg,
  .container-md,
  .container-sm,
  .container-xl,
  .container-xxl {
    padding-right: 40px;
    padding-left: 40px;
  }
}

@media (max-width: 576px) {
  .container,
  .container-fluid,
  .container-lg,
  .container-md,
  .container-sm,
  .container-xl,
  .container-xxl {
    padding-right: 10;
    padding-left: 10;
  }
}
</style>
<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Disclosure</h1>
                       <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                        </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
                <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
                <span style="margin-top:22px"><img src="/frontend/my-img/Brinks_logo.png" alt=""></span>
                <span><img src="/frontend/my-img/adt-logo.svg" alt=""></span>
                <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
                <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
                <span style="margin-top:22px"><img src="/frontend/my-img/Brinks_logo.png" alt=""></span>
                <span><img src="/frontend/my-img/adt-logo.svg" alt=""></span>
                <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
                <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
                <span><img src="/frontend/my-img/adt-logo.svg" alt=""></span>
                <span style="margin-top:22px"><img src="/frontend/my-img/Brinks_logo.png" alt=""></span>
                <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
            </div>

            <div class="scrolling-content">
                <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
                <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
                <span><img src="/frontend/my-img/adt-logo.svg" alt=""></span>
                <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
                <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
                <span style="margin-top:22px"><img src="/frontend/my-img/Brinks_logo.png" alt=""></span>
                <span><img src="/frontend/my-img/adt-logo.svg" alt=""></span>
                <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
                <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
                <span><img src="/frontend/my-img/adt-logo.svg" alt=""></span>
                <span style="margin-top:22px"><img src="/frontend/my-img/Brinks_logo.png" alt=""></span>
                <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
            </div>
        </div>
        <!-- Scrolling Ticker End -->
    </div>
 <section class="pt-5" style="padding-top: 100px;">
  <div class="container" style="max-width:100%; word-wrap:break-word;">
</br>
    <h2 class="wow fadeInUp" data-wow-delay="0.8s">Earnings Disclosure</h2>
</br>
</br>
    <p>The comparehomesecurity.org editorial team is committed to delivering the most current resources in home and personal security. We want to keep offering our services for free and without ads, so at times, we do link to products and include phone numbers of service providers we review. We may earn compensation when you purchase a product or service from certain advertising partners. We may also earn commissions from clicks or inquiries on certain partners.</p>

    <p>comparehomesecurity.org is committed to making our website's content accessible and user friendly to everyone. If you are having difficulty viewing or navigating the content on this website, or notice any content, feature, 
        or functionality that you believe is not fully accessible to people with disabilities, please call our Customer Service team at 855-957-4069 or email our team at info@comparehomesecurity.org 
        with "Disabled Access" in the subject line and provide a description of the specific feature you feel is not fully accessible or a suggestion for improvement. 
        We take your feedback seriously and will consider it as we evaluate ways to accommodate all of our customers and our overall accessibility policies. Additionally, while we do not control such vendors, 
        we strongly encourage vendors of third-party digital content to provide content that is accessible and user friendly.</p>

         <h2 style="font-size:26px; font-weight:700; margin-bottom:10px;">Our Partners</h2>
            <p><b>Compare Home Security</b> maintains partnerships with leading security providers and technology companies.
</br>
        However, we maintain complete editorial independence in all our reviews. We don’t always receive compensation for recommended products, and the compensation we do make helps us sustain our website. It allows us to continue offering valuable services to our readers for free, while also keeping our website free from distracting ads.
        </br>    
        </br>
            Our team follows strict editorial guidelines to ensure every review, guide, and article we publish remains objective and trustworthy. We only share recommendations that we genuinely believe could benefit our readers. If you return a product/service, any compensation we’ve earned could be reversed. If you purchase through our links, the price you pay is not affected.
        </br>
        </br>   
        If you’ve had a positive or negative experience with any of the products or services we have shared, please reach out to us. Your feedback helps us remain a trusted authority in the security industry. It’s one of the ways we ensure our ongoing reviews and updates reflect the real-world experience of customers.
        </br>   
        </br>
        comparehomesecurity.org does not include all home security systems available to consumers in the marketplace.
        </br>   
        </br>
        Finally, if you have any questions, comments, or concerns about this disclosure, please don’t hesitate to email us at <a href="mailto:comparehomesecurity@gmail.com">comparehomesecurity@gmail.com</a>.
</p>
  </div>
</section>
@endsection