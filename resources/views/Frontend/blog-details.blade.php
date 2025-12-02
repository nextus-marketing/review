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

<style>
/* (keep your existing CSS unchanged) */
.blog__details--content h1,
.blog__details--content h2,
.blog__details--content h3,
.blog__details--content h4,
.blog__details--content h5,
.blog__details--content h6 {
    margin: 1.2em 0 0.5em;
    font-weight: 600;
    color: #1a1a1a;
}

.blog__details--content p {
    margin-bottom: 1rem;
    line-height: 1.7;
    color: #333;
    font-size: 16px;
}

.blog__details--content ul,
.blog__details--content ol {
    margin: 1rem 0 1rem 1.5rem;
    padding-left: 1.2rem;
    font-size: 16px;
}

.blog__details--content ul li,
.blog__details--content ol li {
    margin-bottom: 0.5rem;
    line-height: 1.6;
}

.blog__details--content ul.checklist {
    list-style: none;
    padding-left: 0;
}
.blog__details--content ul.checklist li {
    display: flex;
    align-items: center;
    margin-bottom: 0.8rem;
}
.blog__details--content ul.checklist li input[type="checkbox"] {
    margin-right: 10px;
    accent-color: #2e7d32;
}

.blog__details--content .image-container {
    text-align: center;
    margin: 1.5rem 0;
}
.blog__details--content .image-container img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}
.blog__details--content .image-container p.caption {
    font-size: 14px;
    color: #777;
    margin-top: 0.5rem;
    font-style: italic;
}

.blog__details--content table.editor-table {
    width: 100%;
    border-collapse: collapse;
    margin: 1.5rem 0;
}
.blog__details--content table.editor-table td,
.blog__details--content table.editor-table th {
    border: 1px solid #ddd;
    padding: 8px;
    font-size: 15px;
}
.blog__details--content table.editor-table tr:nth-child(even) {
    background-color: #f9f9f9;
}
.blog__details--content table.editor-table tr:hover {
    background-color: #f1f1f1;
}
.blog__details--content table.editor-table th {
    background-color: #f0f0f0;
    font-weight: bold;
}

.blog__details--content hr {
    border: none;
    border-top: 1px solid #ccc;
    margin: 2rem 0;
}

.blog__details--content a {
    color: #007bff;
    text-decoration: underline;
}
.blog__details--content a:hover {
    color: #0056b3;
}

.blog__details--content ul {
    list-style-type: disc !important;
    padding-left: 1.5rem;
    margin-bottom: 1rem;
    color: #333;
}

.blog__details--content ul li {
    margin-bottom: 1.9rem;
    line-height: 1.6;
}

.blog__details--content h6 {
  font-size: 17px;
  font-weight: 600;
  margin-top: 25px;
  margin-bottom: 8px;
  color: #0f2453;
  display: flex;
  align-items: center;
}

.blog__details--content h6 + p {
  font-size: 16px;
  line-height: 1.7;
  color: #333;
  margin-bottom: 18px;
  padding-left: 25px;
  position: relative;
}

.blog__details--content h6:not(:first-child) {
  padding-top: 20px;
}

@media (max-width: 576px) {
  .blog__details--content h6 {
    font-size: 16px;
  }
  .blog__details--content h6 + p {
    font-size: 15px;
    padding-left: 22px;
  }
}

@media (max-width: 768px) {
    .blog__details--content {
        font-size: 15px;
    }

    .blog__details--content ul,
    .blog__details--content ol {
        margin-left: 1rem;
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
