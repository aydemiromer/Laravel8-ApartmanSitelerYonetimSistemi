@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp


@section('title', 'ContactUs-' . $setting->title)

@section('description')
    {{ $setting->description}}
@endsection

@section('keywords', $setting->keywords)



@section('content')



    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                </div>
                <div class="col-sm-12 section-t8">
                    <div class="row">
                        <div class="col-md-7">
                            @include('home.message')
                            <form class="contactform" action="{{route('sendmessage')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="comment-form-name">
                                            <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="comment-form-email">
                                            <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="comment-form-name">
                                            <input type="number" name="phone" class="form-control form-control-lg form-control-a" placeholder="Phone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="comment-form-name">
                                            <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="comment-form-name">
                                            <textarea name="message" class="form-control" name="message" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="form-submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-5 section-md-t3">
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="ion-ios-paper-plane"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Contact</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <p class="mb-1">
                                            <span class="color-a"> {!!$setting->contact!!}</span>
                                        </p>

                                    </div>
                                </div>
                            </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection
