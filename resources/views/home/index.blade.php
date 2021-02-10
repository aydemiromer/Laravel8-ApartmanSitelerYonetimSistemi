@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@section('title',$setting->title)

@section('description')
    {{$setting->description}}

@endsection

@section('keywords', $setting->keywords )

@section('content')
    @include('home._slider')
    <!--/ Services Star /-->
    <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <h1 class="aps_hero">Apartman, Site Yönetim Yazılımı</h1>
                    <p class="hero-big-text">Yöneticiler için <span class="underline">kolay yönetim,</span> sakinler<br> için <span class="underline">rahat yaşam!</span></p>
                    <h3> ApartAidat; çok üyeli yaşam alanlarının yöneticilerine dijital asistanlık yapan, konut sakinlerine şeffaflık sunan bir apartman, site yönetim yazılımıdır.</h3>

                </div>
                <div class="col-xs-12 col-sm-6 big-hero-img">
                    <img sizes="(max-width: 1000px) 100vw, 1000px" loading="lazy" srcset="https://cdn.apsiyon.com/V5/dist/img/blog/index-hero.png 360w, https://cdn.apsiyon.com/V5/dist/img/blog/index-hero@2x.png 480w, https://cdn.apsiyon.com/V5/dist/img/blog/index-hero@3x.png 760w, https://cdn.apsiyon.com/V5/dist/img/blog/index-hero@4x.png 1000w" alt="Apartman, Site Yönetim Yazılımı" width="602px" height="483px">
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!--/ Services End /-->

    <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                <div class="container-wrap" data-aos="fade-up">
                    <h2 class="center">ApartAidat’lu Olmanın Avantajları</h2>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="aps_card fixed-left">
                                <div class="card-icon"><img src="https://cdn.apsiyon.com/V5/dist/img/ui/vad-1.svg" alt="İhtiyaca Yönelik Ürünler" width="46px" height="46px"></div>
                                <h3 class="card-title">İhtiyaca Yönelik Ürünler</h3>
                                <p class="text-tiny card-text">Sektörü ve ihtiyaçlarınızı biliyoruz. Tek ekran üzerinden, uçtan uca yöneticilik yapmanızı sağlayacak ürünler geliştiriyoruz.</p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="aps_card fixed-left">
                                <div class="card-icon"><img src="https://cdn.apsiyon.com/V5/dist/img/ui/vad-2.svg" alt="Yenilikçi Çözümler" width="46px" height="46px"></div>
                                <h3 class="card-title">Yenilikçi Çözümler</h3>
                                <p class="text-tiny card-text">Her zaman daha iyisi için çalışıyoruz. Apartman, site yöneticilerin ve sakinlerin ihtiyaçlarına yönelik çözümler üretiyoruz.</p>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="aps_card fixed-left">
                                <div class="card-icon"><img src="https://cdn.apsiyon.com/V5/dist/img/ui/vad-3.svg" alt="Kesintisiz Müşteri Desteği" width="46px" height="46px"></div>
                                <h3 class="card-title">Kesintisiz Müşteri Desteği</h3>
                                <p class="text-tiny card-text">Özel müşteri yöneticiniz ve 30 kişilik destek ekibi ile apartman, site yönetimine dair sorunlarınızı çözmek için her zaman yanınızdayız.</p>

                            </div>
                        </div>
                        <br>
                        <div class="col-xs-12 col-sm-6">
                            <div class="aps_card fixed-left">
                                <div class="card-icon"><img src="https://cdn.apsiyon.com/V5/dist/img/ui/vad-4.svg" alt="Sektörel Eğitimler ve Workshoplar" width="46px" height="46px"></div>
                                <h3 class="card-title">Sektörel Eğitimler ve Workshoplar</h3>
                                <p class="text-tiny card-text">Alanında uzman eğitmenlerimiz ile sertifikalı Bina ve Site Yöneticiliği Eğitimi’nin yanı sıra birçok eğitim ve danışmanlık ile katkı sağlıyoruz.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-news section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Son Eklenenler</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="new-carousel" class="owl-carousel owl-theme">
                @foreach($latest as $rs)
                    <div class="carousel-item-c">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="{{Storage::url($rs->image)}}" alt="" height="250" >
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="{{Storage::url($rs->image)}}" class="category-b">Detay</a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="">{{$rs->title}}
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b">Aidat: {{$rs->price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
