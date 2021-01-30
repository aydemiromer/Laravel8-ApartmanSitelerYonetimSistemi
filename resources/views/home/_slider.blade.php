

<section>
<!--/ Carousel Star /-->

<div class="intro intro-carousel" >
    <div id="carousel" class="owl-carousel owl-theme">
        @foreach($slider as $rs)
            <div class="carousel-item-a intro-item bg-image" style="background-image:{{Storage::url($rs->image)}}">
               {{-- <img src="{{Storage::url($rs->image)}}">--}}
                <div class="overlay overlay-a">
                    <img src="{{Storage::url($rs->image)}}">
                </div>
            <div class="intro-content display-table">

                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <h1 class="intro-title mb-4">
                                        <span class="color-b">
                                        <br> {{$rs->title}}</h1>
                                    <p class="intro-subtitle intro-price">
                                        <span class="price-a"> Aidat: {{$rs->price}}</span>
                                        <span class="price-a"><a href="{{route('content',['id' => $rs -> id])}}">Detay </a> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endforeach
</section>
