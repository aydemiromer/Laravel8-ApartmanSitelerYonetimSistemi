@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp


@section('title','References-' . $setting->title)

@section('description')
    {{ $setting->description}}
@endsection

@section('keywords', $setting->keywords)



@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a> </li>
            <br>
            <li class="active"> --> References </li>
        </ul>
    </div>

    <section class="property-grid grid">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            {!!$setting->references!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






@endsection
