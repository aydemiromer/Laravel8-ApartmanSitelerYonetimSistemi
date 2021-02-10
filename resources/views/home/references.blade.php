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

                            {!!$setting->references!!}

            </div>
        </div>
    </section>






@endsection
