@extends('home.index')
@section('activekarir','active')
@section('titlepage', 'Kesempatan Karir '.$jobs->title)
@section('content')
<section id="page-title" class="page-title-mini">
    <div class="container clearfix">
        <h1>{{$jobs->title}}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/karir">Karir</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$jobs->title}}</li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row career">
                <div class="col-lg-12">
                    <h2>{{$jobs->title}} di <span>BTSA LOGISTICS</span></h2>
                    <p>
                        Posisi pekerjaan: <strong>{{$jobs->title}}</strong><br>
                        Lokasi pekerjaan: <strong>{{$jobs->location}}</strong><br>
                        Tanggal buka: <strong>{{$jobs->created_at}}</strong>
                    </p>
                    <div>
                        <strong>Deskripsi pekerjaan:</strong>
                        {!!$jobs->description!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a href="/karir/daftar/{{$jobs->title}}/{{csrf_token()}}" class="btn btn-gradient-blue-btsa">Daftar
                        di posisi ini</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
