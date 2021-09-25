@extends('home.index')
@section('titlepage','Trace Result')
@section('content')
<section id="content" style="margin-top:50px;">
    <div class="content-wrap searchtrack">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Trace result<br>
                        @if(!$result->isEmpty())
                        @foreach ($result as $itemN)
                        <abbr title="Track ID">{{$itemN[0]->trackorderId}}</abbr></h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row headresult">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div>
                                <h4>From</h4>
                                <h2>{{$itemN[0]->sender_city}}</h2>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div>
                                <h4>To</h4>
                                <h2>{{$itemN[0]->receiver_city}}</h2>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div>
                                <h4>Track Number</h4>
                                <h2>{{$itemN[0]->trackorderId}}</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 text-center">
                            <div>
                                <a href="#"
                                    class="button button-rounded button-reveal button-large button-white button-light text-right"><i
                                        class="fad fa-print"></i><span>Print</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="toggle toggle-border toggle-custom">
                        <div class="toggle-header">
                            <div class="toggle-icon">
                                <i class="toggle-closed icon-angle-down"></i>
                                <i class="toggle-open icon-angle-up"></i>
                            </div>
                            <div class="toggle-title">
                                <div class="row">
                                    <div class="col-md-3">
                                        <span id="title-toggle"><i class="far fa-file-alt"></i> Track
                                            ID</span><br>
                                        <span id="desc-toggle">{{$itemN[0]->trackorderId}}</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span id="title-toggle"><i class="fal fa-box"></i> Delivery
                                            Type</span><br>
                                        <span id="desc-toggle"
                                            style="margin-left: 17px;">{{$itemN[0]->container_type_system}}</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span id="title-toggle"><i class="fal fa-calendar-day"></i>
                                            Estimated Arrival
                                            Date</span><br> <span
                                            id="desc-toggle">{{$itemN[0]->estimated_arrival_date}}</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span id="title-toggle"><i class="fal fa-map-marker-alt"></i> Last
                                            Location</span><br> <span
                                            id="desc-toggle">{{$itemN[0]->current_location}}</span>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <h1>
                                    <abbr title="Track ID">No data founded on databases!</abbr>
                                </h1>
                                @endif
                            </div>
                        </div>
                        <div class="toggle-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        @foreach ($results as $getDet)
                                        <tr>
                                            <td><span style="color:@if($getDet->status!='Delivered')#c4c3d4 @else #292562
                                                    @endif;"><i class="fal fa-circle"></i></span></td>
                                            <td>Location <br><strong>{{$getDet->current_location}}</strong></td>
                                            <td>Date & Time <br><strong>{{$getDet->updated_at}}</strong></td>
                                            <td>Status <br><strong>{{$getDet->status}}</strong></td>
                                            <td>Description <br><strong>{!!$getDet->activity!!}</strong></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
