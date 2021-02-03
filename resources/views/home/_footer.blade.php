@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

<section class="section-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">Şirket Bilgilerimiz</h3>
                    </div>
                    <div class="w-body-a">
                        <strong>Company :</strong> {{$setting->company}}
                        <br>

                        <strong>Address :</strong> {{$setting->adress}}
                        <br>
                        <strong>Phone :</strong> {{$setting->phone}}
                        <br>
                        <strong>Email :</strong>{{$setting->email}}
                    </div>

                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">ApartAidat</h3>
                    </div>
                    <div class="w-body-a">
                        <div class="w-body-a">
                            <ul class="list-unstyled">
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="{{'aboutus'}}">About Us</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="{{'references'}}">References</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="{{'contact'}}">Contact</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">Destek</h3>
                    </div>
                    <div class="w-body-a">
                        <div class="w-body-a">
                            <ul class="list-unstyled">
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="/register">Yeni Üyelik</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="fa fa-angle-right"></i> <a href="{{'faq'}}">Sıkça Sorulan Sorular</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="socials-a">
                    <ul class="list-inline">
                        @if ($setting->facebook != null)
                        <li class="list-inline-item">
                            <a href="{{$setting->facebook}}" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li> @endif
                            @if ($setting->twitter != null)
                        <li class="list-inline-item">
                            <a href="{{$setting->twitter}}" target="_blank">
                                <i class="fa fa-twitter" aria-hidden="true" ></i>
                            </a>
                        </li>@endif
                                @if ($setting->instagram != null)
                        <li class="list-inline-item">
                            <a href="{{$setting->instagram}}" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>@endif

                    </ul>
                </div>
                <div class="copyright-footer">
                    <p class="copyright color-text-a">
                        &copy; Copyright
                        <span class="color-a">Omer Erdem Aydemir</span> All Rights Reserved.
                    </p>
                </div>
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
                    -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ Footer End /-->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="{{asset('assets')}}/lib/jquery/jquery.min.js"></script>
<script src="{{asset('assets')}}/lib/jquery/jquery-migrate.min.js"></script>
<script src="{{asset('assets')}}/lib/popper/popper.min.js"></script>
<script src="{{asset('assets')}}/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/lib/easing/easing.min.js"></script>
<script src="{{asset('assets')}}/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/lib/scrollreveal/scrollreveal.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="{{asset('assets')}}/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="{{asset('assets')}}/js/main.js"></script>
