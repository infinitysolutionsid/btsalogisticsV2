@extends('home.index')
@section('titlepage','Trace & Track')
@section('content')
<section id="content" style="margin-top:50px;">
    <div class="content-wrap searchtrack">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Trace your delivery?</h1>
                </div>
            </div>
            <div class="">
                <form id="searchform" action="/result" method="GET">
                    {{ csrf_field() }}
                    <div class="input-group input-group-lg mx-auto" style="max-width:600px;">
                        <input type="text" name="trackid" class="form-control" placeholder="Enter your Track ID number"
                            required pattern=".{16,}"
                            oninvalid="setCustomValidity('Minimal character track id adalah 16 abjad/angka. ')"
                            onchange="try{setCustomValidity('')}catch(e){}">
                        <div class="input-group-append">
                            <button form="searchform" class="btn btn-secondary" type="submit"><span><i
                                        class="fal fa-search"></i></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
