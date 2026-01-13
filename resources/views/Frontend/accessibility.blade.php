@extends('layouts.frontend')
@section('title') Accessibility | Compare Home Security @endsection
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
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span>Accessibility</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Accessibility</li>
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
            </div>
        </div>
        <!-- Scrolling Ticker End -->
    </div>
<section class="pt-5" style="padding-top: 100px;">
  <div class="container" style="max-width:100%; word-wrap:break-word;">
</br>
    <h2 style="font-size:26px; font-weight:700; margin-bottom:10px;">ACCESSIBILITY</h2>
      <p style="font-size: 13px;" class="wow fadeInUp" data-wow-delay="1s">of a comparehomesecurity.org and all related websites
      </br>
      7340 Lee Hwy, Falls Church, </br> VA, 22046
      </p>
    <p style="font-size: 13px;">comparehomesecurity.org is committed to making our website's content accessible and user friendly to everyone. If you are having difficulty viewing or navigating the content on this website, or notice any content, feature, 
        or functionality that you believe is not fully accessible to people with disabilities, please call our Customer Service team at <a href="tel:+15715008149">+1(571) 500-8149</a> or email our team at <a href="mailto:offers@comparehomesecurity.org">offers@comparehomesecurity.org</a>
        with "Disabled Access" in the subject line and provide a description of the specific feature you feel is not fully accessible or a suggestion for improvement. 
        We take your feedback seriously and will consider it as we evaluate ways to accommodate all of our customers and our overall accessibility policies. Additionally, while we do not control such vendors, 
        we strongly encourage vendors of third-party digital content to provide content that is accessible and user friendly.</p>
  </div>
</section>
@endsection