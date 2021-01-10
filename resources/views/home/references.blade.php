@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp


@section('title','References-', $setting->title)

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
                        <div class=" section-md-t8">
                            <div class="title-box-d">
                                <h3 class="title">
                                    <span class="color">References</span>
                                   </h3>
                            </div>

                                {!!$setting->references!!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection
