@extends('home.index')
@section('activekarir','active')
@section('titlepage', 'Kesempatan Karir')
@section('content')
<section id="page-title" class="page-title-mini">
    <div class="container clearfix">
        <h1>Kesempatan Karir</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kesempatan Karir</li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 m-b-60 text-center">
                    <h1 class="about-title" style="color: #000; !important"><span class="ti-search"></span> Temukan
                        lowongan pekerjaanmu di <strong>BTSA LOGISTICS.</strong><br><a href="#">Apa yang ingin kamu
                            kerjakan?</a>
                    </h1>
                </div>
            </div>
            <div class="row justify-content-md-center">
                @if (count($jobs)>=1)
                @foreach ($jobs as $job)
                <div class="col-md-4 career">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title-strong">{{$job->title}}</h3>
                            <p class="card-text-black">{!!Str::limit($job->description, 150)!!}</p>
                            <a href="/karir/detail/{{$job->slug}}" class="card-link-karir mr-5">Lihat
                                Pekerjaan</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-md-12 text-center">
                    <p>No open career is found right now.</p>
                </div>
                @endif

            </div>
        </div>
    </div>
</section>
@endsection
