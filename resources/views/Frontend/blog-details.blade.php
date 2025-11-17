@extends('layouts.frontend')

@section('title')
    {{ $blog->title }} | Compare Home Security
@endsection

@section('meta_description')
    {{ $blog->meta_description }}
@endsection

{{-- ===========================
    ARTICLE SCHEMA
=========================== --}}
@section('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "{{ addslashes($blog->title) }}",
  "url": "{{ url('blogs/' . $blog->slug) }}",
  "description": "{{ addslashes(strip_tags($blog->meta_description ?? '')) }}",
  "datePublished": "{{ \Carbon\Carbon::parse($blog->publish_date)->toDateString() }}",
  "dateModified": "{{ \Carbon\Carbon::parse($blog->updated_at)->toDateString() }}",
  "image": "{{ asset(Storage::url($blog->photo)) }}",
  "mainEntityOfPage": "{{ url('blogs/' . $blog->slug) }}",
  "publisher": {
    "@type": "Organization",
    "name": "Compare Home Security",
    "logo": {
      "@type": "ImageObject",
      "url": "{{ asset('frontend/my-img/new-logo.png') }}"
    },
    "url": "{{ url('/') }}"
  },
  "author": {
    "@type": "Person",
    "name": "{{ addslashes($blog->author ?? 'Admin') }}"
  }
}
</script>
@endsection

{{-- ===========================
     BLOG PAGE CONTENT
=========================== --}}
@section('content')

<style>
.post-entry h3 { font-size: 26px; }
.post-entry h6 { font-size: 16px; }
.post-entry h2 { font-size: 20px; }
</style>

<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $blog->title }}</h1>

                    <div class="post-single-meta wow fadeInUp">
                        <ol class="breadcrumb">
                            <li><i class="fa-regular fa-user"></i> {{ $blog->author }}</li>
                            <li><i class="fa-solid fa-calendar-days"></i>
                                {{ \Carbon\Carbon::parse($blog->publish_date)->timezone('Asia/Kolkata')->format('d M, Y') }}
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scrolling Brand Logos -->
<div class="our-scrolling-ticker">
    <div class="scrolling-ticker-box">
        <div class="scrolling-content">
            <span><img src="/frontend/my-img/vivint-black.png"></span>
            <span><img src="/frontend/my-img/simplisafe.png"></span>
            <span style="margin-top:22px"><img src="/frontend/my-img/Brinks_logo.png"></span>
            <span><img src="/frontend/my-img/adt-logo.svg"></span>
        </div>
        <div class="scrolling-content">
            <span><img src="/frontend/my-img/vivint-black.png"></span>
            <span><img src="/frontend/my-img/simplisafe.png"></span>
            <span style="margin-top:22px"><img src="/frontend/my-img/Brinks_logo.png"></span>
            <span><img src="/frontend/my-img/adt-logo.svg"></span>
        </div>
    </div>
</div>

<!-- Blog Single -->
<div class="page-single-post py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Blog Image -->
                <div class="post-image mb-4">
                    <figure class="image-anime reveal">
                        <img src="{{ asset(Storage::url($blog->photo)) }}"
                            alt="{{ $blog->title }}"
                            class="img-fluid rounded-3 w-100"
                            style="object-fit: cover; max-height: 500px;">
                    </figure>
                </div>

                <!-- Blog Content -->
                <div class="post-content wow fadeInUp">
                    <div class="post-entry">
                        @php
                            $description = json_decode($blog->description, true);

                            if (!empty($description['blocks'])) {
                                foreach ($description['blocks'] as $d) {
                                    switch ($d['type']) {

                                        case 'header':
                                            $level = $d['data']['level'] ?? 2;
                                            echo "<h{$level}>{$d['data']['text']}</h{$level}>";
                                            break;

                                        case 'paragraph':
                                            echo "<p>{$d['data']['text']}</p>";
                                            break;

                                        case 'delimiter':
                                            echo "<hr>";
                                            break;

                                        case 'image':
                                            if (!empty($d['data']['file']['url'])) {
                                                $url = $d['data']['file']['url'];
                                                echo "<img src='{$url}' class='img-fluid my-3'>";
                                            }
                                            break;

                                        case 'list':
                                            $items = $d['data']['items'];
                                            if ($d['data']['style'] === 'ordered') {
                                                echo "<ol>";
                                                foreach ($items as $i) echo "<li>{$i['content']}</li>";
                                                echo "</ol>";
                                            } else {
                                                echo "<ul>";
                                                foreach ($items as $i) echo "<li>{$i['content']}</li>";
                                                echo "</ul>";
                                            }
                                            break;

                                        case 'table':
                                            echo "<table class='editor-table'>";
                                            foreach ($d['data']['content'] as $row) {
                                                echo "<tr>";
                                                foreach ($row as $cell) echo "<td>{$cell}</td>";
                                                echo "</tr>";
                                            }
                                            echo "</table>";
                                            break;

                                    }
                                }
                            }
                        @endphp
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Related Posts -->
<div class="related-posts-section py-5" style="background-color:#f8f9fa;">
    <div class="container">
        <div class="section-title text-center mb-4">
            <h3 class="wow fadeInUp">More Related Posts</h3>
        </div>

        <div class="row">
            @foreach($latestBlogs as $latest)
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="post-item wow fadeInUp">
                        <div class="post-featured-image">
                            <a href="{{ route('blogs.details', $latest->slug) }}">
                                <img src="{{ asset(Storage::url($latest->photo)) }}"
                                     style="width:100%; height:320px; object-fit:cover;">
                            </a>
                        </div>

                        <div class="post-item-body">
                            <h2>{{ \Str::limit($latest->title, 80) }}</h2>
                            <a href="{{ route('blogs.details', $latest->slug) }}" class="readmore-btn">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>

@endsection

{{-- ===========================
    FAQ SCHEMA (DOES NOT OVERRIDE)
=========================== --}}
@if(!empty($blog->faqs))
@push('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    @foreach($blog->faqs as $faq)
    {
      "@type": "Question",
      "name": "{{ addslashes($faq['question']) }}",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "{{ addslashes($faq['answer']) }}"
      }
    }@if(!$loop->last),@endif
    @endforeach
  ]
}
</script>
@endpush
@endif
