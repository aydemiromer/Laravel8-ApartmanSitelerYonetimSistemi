@extends('layouts.home')
@section('title','Frequently Asked Question')
@section('content')

    <section class="section-services section-t8">
        <div id="breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">Home=></a> </li>
                    <br>
                    <li class="active">Frequently Asked Questions</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($datalist as $rs)
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="ion-ios-arrow-dropdown-circle"><h4>{{$rs->question}}</h4></a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" style="height: 0">
                                    <div class="panel-body">
                                        {!! $rs->answer !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
