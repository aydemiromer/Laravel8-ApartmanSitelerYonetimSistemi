@extends('layouts.home')
@section('title')
@section('description')
@endsection
@section('keywords')

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
              <li class="active"><a href="{{$search}}">Contents</a> </li>
          </ul>
      </div>
  </div>

        <div class="container">

            <div class="row">
                @foreach($datalist as $rs)
                <div class="col-lg-3 col-sm-12">
                    <div class="single_product_item">
                        <img src="{{Storage::url($rs->image)}}" width="250" height="250" alt="">
                        <div class="single_product_text">
                            <h4>{{$rs->title}}</h4>
                            <h3>Aidat:{{$rs->price}}</h3>
                            <a href="{{route('content',['id' => $rs -> id])}}" class="add_cart">DETAY<i class="ti-heart"></i></a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>

        </div>


@endsection
