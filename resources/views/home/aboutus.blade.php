@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp


@section('title','About Us-', $setting->title)

@section('description')
    {{ $setting->description}}
@endsection

@section('keywords', $setting->keywords)



@section('content')

    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                </div>
                <div class="col-md-12 section-t8">
                    <div class="row">
                        <div class="col-md-6 col-lg-5">
                            <img src="{{asset('assets')}}/img/hero2.png" alt="" class="img-fluid">
                        </div>

                        <div class="col-md-6 col-lg-5 section-md-t3">
                            <div class="title-box-d">
                                <h3 class="title">
                                    <span class="color">About Us</span>
                                   </h3>
                            </div>
                            <p class="color-text-a">
                                {!!$setting->aboutus!!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection
