@extends('layouts.frontend')
@section('title') Blogs | Compare Home Security @endsection
@section('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Blog - Compare Home Security",
  "url": "https://comparehomesecurity.org/blogs",
  "description": "Read expert blogs, tips, and guides to help homeowners choose the best home security systems.",
  "publisher": {
    "@type": "Organization",
    "name": "Compare Home Security",
    "logo": "https://comparehomesecurity.org/frontend/my-img/new-logo.png",
    "url": "https://comparehomesecurity.org/"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://comparehomesecurity.org/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Blog",
        "item": "https://comparehomesecurity.org/blogs"
      }
    ]
  },
  "mainEntityOfPage": "https://comparehomesecurity.org/blogs",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://comparehomesecurity.org/blogs?s={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
@endsection

@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Latest <span>Blogs</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Latest Blogs</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Scrolling Ticker Start -->
<div class="our-scrolling-ticker">
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
        </div>

        <div class="scrolling-content">
            <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
            <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
            <span><img src="/frontend/my-img/adt-logo.svg" alt=""></span>
            <span><img src="/frontend/my-img/vivint-black.png" alt=""></span>
            <span><img src="/frontend/my-img/simplisafe.png" alt=""></span>
            <span style="margin-top:22px"><img src="/frontend/my-img/Brinks_logo.png" alt=""></span>
            <span><img src="/frontend/my-img/adt-logo.svg" alt=""></span>
        </div>

    </div>
</div>
<!-- Scrolling Ticker End -->


<!-- Blog Section Start -->
<div class="page-blog pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">

            @forelse($blogs as $blog)

                @php
                    $content = json_decode($blog->description, true);
                    $previewText = isset($content['blocks'][0]['data']['text'])
                        ? strip_tags($content['blocks'][0]['data']['text'])
                        : strip_tags($blog->description);
                @endphp

                <div class="col-xl-4 col-md-6 mb-4">

                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">

                        <!-- FEATURED IMAGE + DATE BADGE -->
                        <div class="post-featured-image" style="position: relative;">
                            <a href="{{ route('blogs.details', $blog->slug) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img 
                                        src="{{ $blog->photo ? asset(Storage::url($blog->photo)) : asset('frontend/assets/img/default-blog.jpg') }}" 
                                        alt="{{ $blog->title }}" 
                                        style="width:100%; height:320px; object-fit:cover; border-radius:10px;"
                                    >
                                </figure>
                            </a>

                            <!-- DATE BADGE -->
                            <div style="
                                position:absolute;
                                top:15px;
                                left:15px;
                                background:#254e9e;
                                color:#fff;
                                padding:6px 12px;
                                font-size:14px;
                                border-radius:6px;
                                font-weight:600;
                                display:flex;
                                align-items:center;
                                gap:6px;
                            ">
                                <i class="fa-solid fa-calendar-days"></i>
                                {{ \Carbon\Carbon::parse($blog->publish_date)->timezone('Asia/Kolkata')->format('d M, Y') }}
                            </div>
                        </div>

                        <div class="post-item-body">
                            <div class="post-item-content">

                                <h2>
                                    <a href="{{ route('blogs.details', $blog->slug) }}">
                                        {{ \Illuminate\Support\Str::limit($blog->title, 80) }}
                                    </a>
                                </h2>

                                <p style="color:#555; font-size:15px;">
                                    {{ \Illuminate\Support\Str::limit($previewText, 150, '...') }}
                                </p>
                            </div>

                            <div class="post-item-btn">
                                <a href="{{ route('blogs.details', $blog->slug) }}" class="readmore-btn">Read More</a>
                            </div>

                        </div>

                    </div>

                </div>

            @empty
                <div class="col-12 text-center py-5">
                    <h4>No blogs available right now.</h4>
                </div>
            @endforelse


            @if($blogs->hasPages())
                <div class="col-lg-12">
                    <div class="page-pagination wow fadeInUp" data-wow-delay="1s">
                        <ul class="pagination justify-content-center">

                            {{-- Previous --}}
                            <li class="{{ $blogs->onFirstPage() ? 'disabled' : '' }}">
                                @if(!$blogs->onFirstPage())
                                    <a href="{{ $blogs->previousPageUrl() }}"><i class="fa-solid fa-angle-left"></i></a>
                                @else
                                    <span><i class="fa-solid fa-angle-left"></i></span>
                                @endif
                            </li>

                            {{-- Pages --}}
                            @for($i = 1; $i <= $blogs->lastPage(); $i++)
                                <li class="{{ $i == $blogs->currentPage() ? 'active' : '' }}">
                                    @if($i == $blogs->currentPage())
                                        <span>{{ $i }}</span>
                                    @else
                                        <a href="{{ $blogs->url($i) }}">{{ $i }}</a>
                                    @endif
                                </li>
                            @endfor

                            {{-- Next --}}
                            <li class="{{ $blogs->hasMorePages() ? '' : 'disabled' }}">
                                @if($blogs->hasMorePages())
                                    <a href="{{ $blogs->nextPageUrl() }}"><i class="fa-solid fa-angle-right"></i></a>
                                @else
                                    <span><i class="fa-solid fa-angle-right"></i></span>
                                @endif
                            </li>

                        </ul>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>

@endsection
