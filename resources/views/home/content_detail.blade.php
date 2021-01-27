@extends('layouts.home')

@section('title',$data->title)

@section('description')

@endsection

@section('keywords')



@section('content')

    <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Content Detail</h2>
                        </div>
                    </div>
                </div>
            </div>
            <section class="property-single nav-arrow-b">

                <div class="container">
                    <div class="row">

                        <div class="col-sm-12">
                            <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                                <div class="carousel-item-b">
                                    <img src="{{Storage::url($data->image)}}" height="500" width="500" alt="">
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-md-5 col-lg-4">

                                    <div class="property-price d-flex justify-content-center foo">
                                        <div class="card-header-c d-flex">
                                            <div class="card-box-ico">
                                                <span class="ion-money">₺</span>
                                            </div>
                                            <div class="card-title-c align-self-center">
                                                <h5 class="title-c">{{$data->price}}</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="property-summary">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="title-box-d section-t4">
                                                    <h3 class="title-d">Quick Summary</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="summary-list">
                                            <ul class="list">
                                                <li class="d-flex justify-content-between">
                                                    <strong>Property ID:</strong>
                                                    <span>1134</span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <strong>Location:</strong>
                                                    <span>Chicago, IL 606543</span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <strong>Property Type:</strong>
                                                    <span>House</span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <strong>Status:</strong>
                                                    <span>Sale</span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <strong>Area:</strong>
                                                    <span>340m
                        <sup>2</sup>
                      </span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <strong>Beds:</strong>
                                                    <span>4</span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <strong>Baths:</strong>
                                                    <span>2</span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <strong>Garage:</strong>
                                                    <span>1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-7 section-md-t3">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="title-box-d">
                                                <h3 class="title-d">{{$data->title}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="property-description">
                                        <p class="description color-text-a">
                                            {!! $data->detail !!}

                                        </p>

                                    </div>
                                    <div class="row section-t3">
                                        <div class="col-sm-12">
                                            <div class="title-box-d">
                                                <h3 class="title-d">Aidata Dahil Hizmetler</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="amenities-list color-text-a">
                                        <ul class="list-a no-margin">
                                            <li>Temizlik</li>
                                            <li>Asansör Bakım</li>
                                            <li>Otopark</li>
                                            <li>Güvenlik</li>
                                            <li>Elektrik</li>
                                            <li>Internet</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </section>




@endsection
