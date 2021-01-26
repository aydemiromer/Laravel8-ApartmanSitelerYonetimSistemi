@extends('layouts.home')
@section('title')
@section('description')
@endsection
@section('keywords')

@section('content')

  <div id="breadcrumb">
      <div class="container">
          <ul class="breadcrumb">
              <li><a href="{{route('home')}}">Home</a> </li>
              <li class="active">{{ \App\Http\Controllers\Admin\MenuController::getParentsTree($data,$data->title) }} Contents </li>
          </ul>
      </div>
  </div>

        <div class="container">
            @foreach($datalist as $rs)
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_product_item">
                        <img src="{{Storage::url($rs->image)}}" width="250" height="250" alt="">
                        <div class="single_product_text">
                            <h4>{{$rs->title}}</h4>
                            <h3>Aidat: {{$rs->price}}</h3>
                            <a href="#" class="add_cart">Ödeme<i class="ti-heart"></i></a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>


@endsection
