@extends('home.index')
@section('activekarir','active')
@section('titlepage', 'Lamaran '.$jobs->title.' berhasil kami terima!')
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
            <div class="card">
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-12 text-center">
                            <img src="{!!asset('storage/img/kingdom-4.png')!!}" class="imgserved-done"
                                alt="BTSA Apply Complete">
                            <h3>Lamaran kamu berhasil kita terima!</h3>
                            <p>Kami akan menyeleksi lamaran ini dan menghubungi anda lewat email ataupun telepon untuk
                                mengundang anda menghadiri tahap
                                interview.<br>
                                <a href="/"><i class="fal fa-caret-left"></i> Back to home</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
