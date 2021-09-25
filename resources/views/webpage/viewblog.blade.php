@extends('home.index')
@section('activeblog','active')
@section('titlepage', 'Blog - '.$blog->title)
@section('content')
<section id="page-title" class="page-title-mini">
    <div class="container clearfix">
        <h1>Blog - {{$blog->title}}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row gutter-40 col-mb-80">
                <div class="postcontent col-lg-12">
                    <div class="single-post mb-0">
                        <div class="entry clearfix">
                            <div class="entry-title">
                                <h2>{{$blog->title}}</h2>
                            </div>

                            <!-- Entry Meta
									============================================= -->
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> {{$blog->created_at}}</li>
                                    <li><a href="#"><i class="icon-user"></i> {{$blog->user->name}}</a></li>
                                    <li><i class="icon-folder-open"></i> <a href="#">{{$blog->category}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="entry-content mt-0">
                                {!!$blog->description!!}
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
