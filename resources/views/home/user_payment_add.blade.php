@extends('layouts.home')

@section('title','PAYMENT')

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
                            <form class="contactform" action="{{route('user_payment_store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="comment-form-name">
                                            <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control form-control-lg form-control-a" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="comment-form-email">
                                            <input name="email" type="email" value="{{Auth::user()->email}}" class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="comment-form-name">
                                            <input type="number" name="year" class="form-control form-control-lg form-control-a" placeholder="Year" data-rule="maxlen:4" data-msg="Please enter at least 4 chars of subject">
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="comment-form-name">
                                            <input type="number" name="month" class="form-control form-control-lg form-control-a" placeholder="Month" data-rule="maxlen:2" data-msg="Please enter at least 1 chars of subject">
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="comment-form-name">
                                            <input type="text" name="location" class="form-control form-control-lg form-control-a" placeholder="Location" data-rule="minlen:4" data-msg="Please enter at least 4 chars of subject">
                                            <div class="validation"></div>
                                        </div>
                                    </div><div class="col-md-6 mb-3">
                                        <div class="comment-form-name">
                                            <input type="number" name="flatnumber" class="form-control form-control-lg form-control-a" placeholder="Flatnumber">
                                            <div class="validation"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="comment-form-name">
                                            <textarea name="adminnote" class="form-control" name="message" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="For AdminMessage"></textarea>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                </div>
                        <div class="col-md-5 section-md-t3">
                            <div class="icon-box section-b2">
                                <div class="icon-box-icon">
                                    <span class="ion-ios-paper-plane"></span>
                                </div>
                                <div class="icon-box-content table-cell">
                                    <div class="icon-box-title">
                                        <h4 class="icon-title">Card Detail {{$price}}</h4>
                                    </div>
                                    <div class="icon-box-content">
                                        <div class="col-md-12 mb-3">
                                            <div class="comment-form-name">
                                                <input type="text" name="CardName" class="form-control form-control-lg form-control-a" placeholder="CardName" data-rule="minlen:4" data-msg="Please enter at least 4 chars of subject">
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="comment-form-name">
                                                <input type="number" name="cardnumber" class="form-control form-control-lg form-control-a" placeholder="cardnumber" data-rule="minlen:12" data-msg="Please enter at least 16 chars of subject">
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="comment-form-name">
                                                <input type="number" name="dates" class="form-control form-control-lg form-control-a" placeholder="Card Year/Card Month" data-rule="maxlen:5" data-msg="Please enter at least 4 chars of subject">
                                                <div class="validation"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <div class="comment-form-name">
                                                <input type="number" name="monthcard" class="form-control form-control-lg form-control-a" placeholder="Card CCV" data-rule="minlen:3" data-msg="Please enter at least 1 chars of subject">
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="comment-form-name">
                                                <input type="number" name="payment" class="form-control form-control-lg form-control-a" placeholder="Payment " data-rule="minlen:3" data-msg="Please enter at least 1 chars of subject">
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="form-submit">Payment</button>
                                                   </div>
                                              </div>
                                         </div>
                                     </div>
                                 </div>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection
