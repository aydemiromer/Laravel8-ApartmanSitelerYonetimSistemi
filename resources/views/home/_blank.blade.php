@extends('layouts.home')

@section('title',$setting->title)

@section('description')
    {{ $setting->description}}
@endsection

@section('keywords', $setting->keywords)



@section('content')

    <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Our Services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-gamepad"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Lifestyle</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            İçerik Alanı
                        </div>
                        <div class="card-footer-c">
                            <a href="#" class="link-c link-icon">Read more
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection
