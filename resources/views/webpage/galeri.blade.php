@extends('home.index')
@section('activegaleri','active')
@section('titlepage', 'Gallery')
@section('content')
<section id="page-title" class="page-title-mini">
    <div class="container clearfix">
        <h1>Galeri</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/galeri">Galleri</a></li>
        </ol>
    </div>
</section>
<section class="content">
    <div class="content-wrap">
        <div class="container clearfix">
            @foreach ($album as $album)
            <div class="divider"><i class="icon-circle"></i></div>
            <div class="col-lg-12 text-center">
                <h3>{{$album->nama_album}}</h3>
                <div class="masonry-thumbs grid-container grid-6" data-big="3" data-lightbox="gallery">
                    @foreach ($album->photo as $item)
                    <a class="grid-item" href="{!!asset('imagePublic/'.$item->file)!!}"
                        data-lightbox="gallery-item"><img src="{!!asset('imagePublic/'.$item->file)!!}"
                            alt="BTSA Logistics Album Documentation"></a>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
