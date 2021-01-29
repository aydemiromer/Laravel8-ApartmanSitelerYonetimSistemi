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
                <br>
                <div class="col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                    <div class="title-box-d">
                        <h3 class="title-d">Comments </h3>
                    </div>
                    <div class="box-comments">
                        <ul class="list-comments">
                            <li>
                                @foreach($reviews as $rs)
                                <div class="comment-avatar">
                                    {{--<img src="img/author-2.jpg" alt="">--}}
                                </div>
                                <div class="comment-details">
                                    <h4 class="comment-author">{{$rs->user->name}}</h4>
                                    <span>{{$rs->created_at}}
                                   {{-- <div class="review-rating pull-right">
                                        <i class="fa fa-star" @if ($rs->rate<1) -o empty @endif></i>
                                        <i class="fa fa-star" @if ($rs->rate<2) -o empty @endif></i>
                                        <i class="fa fa-star" @if ($rs->rate<3) -o empty @endif></i>
                                        <i class="fa fa-star" @if ($rs->rate<4) -o empty @endif></i>
                                        <i class="fa fa-star" @if ($rs->rate<5) -o empty @endif></i>
                                    </div>--}}</span>

                                    <p class="comment-description">
                                        <strong>{{$rs->subject}}</strong>
                                        <p>
                                        {{$rs->review}}</p>
                                    </p>

                                </div>
                                @endforeach
                            </li>

                        </ul>
                        <div class="title-box-d">
                            <h3 class="title-d">Write Your Comment </h3>
                        </div>
                        <br>
                <div>
                    @livewire('review',['id'=> $data->id])
                </div>
                    </div>
                </div>
            </section>
        </div>
    </section>




@endsection
