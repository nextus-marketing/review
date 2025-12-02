@extends('layouts.frontend')

@section('title')
    {{ $blog->title }} | Compare Home Security
@endsection

@section('meta_description')
    {{ $blog->meta_description }}
@endsection
@section('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "{{ addslashes($blog->title) }}",
  "url": "{{ url('blogs/' . $blog->slug) }}",
  "description": "{{ addslashes(strip_tags($blog->meta_description ?? '')) }}",
  "datePublished": "{{ \Carbon\Carbon::parse($blog->publish_date)->toDateString() }}",
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

@section('content')

<style>
.post-entry h3 {
font-size: 26px;
}
.post-entry h6 {
    font-size: 16px;
}
.post-entry h2 {
    font-size: 20px;
}
@media (min-width: 1200px) {
    .h2, h2 {
        font-size: 20px;
    }
}

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
                            <li>
                                <i class="fa-solid fa-calendar-days"></i>
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
                            if (!empty($description['blocks']) && is_array($description['blocks'])) {
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
                                            echo '<hr>';
                                            break;
                                        case 'image':
                                            if (!empty($d['data']['file']['url'])) {
                                                $url = htmlspecialchars($d['data']['file']['url']);
                                                $caption = $d['data']['caption'] ?? '';
                                                $align = $d['data']['alignment'] ?? 'center';
                                                echo "<div class='image-container {$align}'><img src='{$url}' alt='".strip_tags($caption)."'>";
                                                if ($caption) echo "<p class='caption'>{$caption}</p>";
                                                echo "</div>";
                                            }
                                            break;
                                        case 'list':
                                            $items = $d['data']['items'] ?? [];
                                            $style = $d['data']['style'] ?? 'unordered';
                                            if ($style === 'ordered') {
                                                echo "<ol>";
                                                foreach ($items as $item) echo "<li>{$item['content']}</li>";
                                                echo "</ol>";
                                            } elseif ($style === 'unordered') {
                                                echo "<ul>";
                                                foreach ($items as $item) echo "<li>{$item['content']}</li>";
                                                echo "</ul>";
                                            } elseif ($style === 'checklist') {
                                                echo "<ul class='checklist'>";
                                                foreach ($items as $item) {
                                                    $checked = !empty($item['meta']['checked']) ? 'checked' : '';
                                                    echo "<li><input type='checkbox' disabled {$checked}> {$item['content']}</li>";
                                                }
                                                echo "</ul>";
                                            }
                                            break;
                                        case 'table':
                                            if (!empty($d['data']['content'])) {
                                                echo '<table class="editor-table">';
                                                foreach ($d['data']['content'] as $row) {
                                                    echo '<tr>';
                                                    foreach ($row as $cell) echo "<td>{$cell}</td>";
                                                    echo '</tr>';
                                                }
                                                echo '</table>';
                                            }
                                            break;
                                        case 'linkTool':
                                            if (!empty($d['data']['link'])) {
                                                $href = htmlspecialchars($d['data']['link']);
                                                $text = $d['data']['meta']['title'] ?? $href;
                                                echo "<a href='{$href}' target='_blank'>{$text}</a>";
                                            }
                                            break;
                                    }
                                }
                            } else {
                                echo '<p>No description available.</p>';
                            }
                        @endphp
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Related (Latest) Blogs -->
<div class="related-posts-section py-5" style="background-color:#f8f9fa;">
    <div class="container">
        <div class="section-title text-center mb-4">
            <h3 class="wow fadeInUp">More Related Posts</h3>
        </div>
        <div class="row">
            @foreach($latestBlogs as $latest)
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="post-featured-image">
                            <a href="{{ route('blogs.details', $latest->slug) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img 
                                        src="{{ $latest->photo ? asset(Storage::url($latest->photo)) : asset('frontend/assets/img/default-blog.jpg') }}" 
                                        alt="{{ $latest->title }}" 
                                        style="width:100%; height:320px; object-fit:cover; border-radius:10px;">
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content mt-3">
                                <h2>
                                    <a href="{{ route('blogs.details', $latest->slug) }}">
                                        {{ \Illuminate\Support\Str::limit($latest->title, 80) }}
                                    </a>
                                </h2>
                            </div>
                            <div class="post-item-btn mt-2">
                                <a href="{{ route('blogs.details', $latest->slug) }}" class="readmore-btn">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            @if($latestBlogs->isEmpty())
                <div class="col-lg-12 text-center">
                    <p class="text-muted">No related posts available.</p>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection

{{-- ✅ Add FAQ structured data if available --}}
@if(!empty($blog->faqs))
@section('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    @foreach($blog->faqs as $index => $faq)
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
@endsection
@endif
