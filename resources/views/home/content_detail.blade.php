@extends('layouts.home')

@section('title',$data->title . '-Detail')

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
                                @foreach($images as $rs)
                                    <div class="carousel-item-b">
                                        <img src="{{Storage::url($rs->image)}}" height="500" width="500" alt="">
                                    </div>
                                @endforeach
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-md-5 col-lg-4">

                                    <div class="property-price d-flex justify-content-center foo">
                                        <div class="card-header-c d-flex">
                                            <div class="card-box-ico">
                                                <span class="ion-money">₺</span>
                                            </div>
                                            <div class="card-title-c align-self-center">
                                                <h5 class="title-c">Öde:<a href="{{route('user_payment_add')}}"> {{$data->price}}</a></h5>
                                            </div>
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
                        </div>
                    </div>
                </div>
                    </div>
                </div>


                <section class="section-testimonials section-t8 nav-arrow-a">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title-wrap d-flex justify-content-between">
                                    <div class="title-box">
                                        <h2 class="title-a">Comments</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="testimonial-carousel" class="owl-carousel owl-arrow">
                            @foreach($reviews as $rs)
                                <div class="carousel-item-a">
                                    <div class="testimonials-box">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="testimonial-ico">
                                                    <span >{{$rs->subject}}</span>
                                                </div>
                                                <div class="testimonials-content">
                                                    <p class="testimonial-text">
                                                        {{$rs->review}}
                                                    </p>
                                                </div>
                                                <div class="testimonial-ico">
                                                    <h5 class="testimonial-author">{{$rs->user->name}}</h5>
                                                    <h5 class="testimonial-author">{{$rs->created_at}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <div class="title-box-d">
                    <h3 class="title-d">Write Your Comment </h3>
                </div>
                <br>
                <div>
                    @livewire('review',['id'=> $data->id])
                </div>

            </section>
        </div>
    </section>




@endsection
