@extends('layouts.frontend')

@section('title')
    {{ $blog->title }} | Compare Home Security
@endsection

@section('meta_description')
    {{ $blog->meta_description }}
@endsection

@section('structured_data')
<script type="application/ld+json">
{!! json_encode([
    "@context" => "https://schema.org",
    "@graph" => [

        // ARTICLE SCHEMA
        [
            "@type" => "Article",
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id" => url()->current()
            ],
            "headline" => $blog->meta_title ?: $blog->title,
            "description" => $blog->meta_description
                ?: Str::limit(strip_tags($blog->content ?? ''), 160),
            "image" => asset(Storage::url($blog->photo)),
            "datePublished" => \Carbon\Carbon::parse($blog->publish_date)
                ->timezone('Asia/Kolkata')
                ->toIso8601String(),
            "dateModified" => $blog->updated_at->toIso8601String(),
            "author" => [
                "@type" => "Person",
                "name" => $blog->author_name ?? "Admin"
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => "Compare Home Security",
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => url('/frontend/my-img/new-logo-243.webp')
                ]
            ]
        ],

        // FAQ SCHEMA
        !empty($blog->faqs) && count($blog->faqs) > 0 ? [
            "@type" => "FAQPage",
            "mainEntity" => array_map(function($faq) {
                return [
                    "@type" => "Question",
                    "name" => $faq['question'],
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => strip_tags($faq['answer'])
                    ]
                ];
            }, $blog->faqs)
        ] : null
    ]
], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) !!}
</script>
@endsection

@section('content')

<style>
.page-header-box h1 {
    display: inline-block;
    font-size: 40px;
    font-weight: 400;
    letter-spacing: -0.02em;
    margin-bottom: 10px;
    cursor: none;
}

.post-entry h3 {
font-size: 20px;
}
.post-entry h6 {
    font-size: 16px;
}
.post-entry h2 {
    font-size: 26px;
}
@media (min-width: 1200px) {
    .h2, h2 {
        font-size: 25px;
    }
}

/* Editor Table Styling */
.editor-table {
    width: 100%;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 15px;
    background: #ffffff;
}

.editor-table th,
.editor-table td {
    border: 1px solid #d7d7d7;
    padding: 12px 14px;
    text-align: left;
    vertical-align: middle;
}

.editor-table th {
    background: #f1f4f7;
    font-weight: 600;
    color: #0c1b33;
}

.editor-table tr:nth-child(even) {
    background: #fafafa;
}

/* Make table scrollable on mobile */
.editor-table-wrapper {
    width: 100%;
    overflow-x: auto;
}

.editor-table td p {
    margin: 0; /* Removes double spacing created by <p> tags inside cells */
}
/* Wrapper for horizontal scrolling */
.editor-table-wrapper {
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

/* Table styling */
.editor-table {
    width: 100%;
    min-width: 600px; /* optional, ensures scroll on very small screens */
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 15px;
    background: #ffffff;
}

.editor-table th,
.editor-table td {
    border: 1px solid #d7d7d7;
    padding: 12px 10px;
    text-align: left;
    vertical-align: middle;
    white-space: nowrap; /* prevents breaking text in cells */
}

.editor-table th {
    background: #f1f4f7;
    font-weight: 600;
    color: #0c1b33;
}

.editor-table tr:nth-child(even) {
    background: #fafafa;
}

/* Optional: reduce font size on small screens */
@media (max-width: 768px) {
    .editor-table th,
    .editor-table td {
        font-size: 14px;
        padding: 8px 6px;
    }
}

.post-entry p:last-child {
    margin-bottom: 0;
    display: none;
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
                                                echo '<div class="editor-table-wrapper">'; // Add wrapper
                                                echo '<table class="editor-table">';
                                                foreach ($d['data']['content'] as $row) {
                                                    echo '<tr>';
                                                    foreach ($row as $cell) echo "<td>{$cell}</td>";
                                                    echo '</tr>';
                                                }
                                                echo '</table>';
                                                echo '</div>'; // Close wrapper
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

