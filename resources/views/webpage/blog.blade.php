@extends('home.index')
@section('activeblog','active')
@section('titlepage', 'Blog')
@section('content')
<section id="page-title" class="page-title-mini">
    <div class="container clearfix">
        <h1>Blog</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div id="posts" class="post-grid row gutter-30 justify-content-md-center" data-layout="fitRows">
                @foreach ($blogs as $blog)
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-title">
                            <h2><a href="/blog/v/{{$blog->title}}">{{$blog->title}}</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-calendar3"></i> {!!$blog->created_at!!}</li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            @php
                            echo substr($blog->description,0, 100).'...';
                            @endphp
                            <a href="#" class="more-link">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
