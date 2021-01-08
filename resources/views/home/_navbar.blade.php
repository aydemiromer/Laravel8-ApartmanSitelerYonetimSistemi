
@php
    $parentMenus = \App\Http\Controllers\HomeController::menulist()
@endphp
<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">

    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="">Estate<span class="color-b">Agency</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <div class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('aboutus')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="property-grid.html">Property</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('references')}}">References</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('fag')}}">Fag</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach($parentMenus as $rs)
                            <li class="dropdown side-dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$rs->title}}</a>
                                <div class="custom-menu">
                                    <div class="row">
                                        @if(count($rs->children))
                                            @include('home.categorytree',['children'=>$rs->children])
                                        @endif
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </li>



                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>
                        @auth


                                <strong class="text-uppercase">{{Auth::user()->name}}

                                </strong>

                        @endauth
                        @guest
                                <a href="#" class="text-uppercase">Login</a> /
                                <a href="#" class="text-uppercase">Join</a>

                        @endguest
                    </a>





                    <ul class="dropdown-menu" role="menu">

                        <ul class="custom-menu">
                            <li><a href="#"><i class="fa fa-user-o"></i> My Account </a> </li>
                            <li><a href="#"><i class="fa fa-user-o"></i> My Account </a> </li>
                            <li><a href="#"><i class="fa fa-user-o"></i> My Account </a> </li>
                            <li><a href="#"><i class="fa fa-user-o"></i> My Account </a> </li>
                            <li><a href="{{route('logout')}}"><i class="fa fa-user-o"></i> Logout </a> </li>
                        </ul>
                    </ul>
                </li>
            </ul>

        </div>

        {{--<div type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-user" aria-hidden="true"></span>
            <ul class="dropdown-toggle">
                <li class="header-account dropdown default-dropdown">
                    @auth
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <strong class="text-uppercase">My Account
                                <i class="fa fa-caret-down"></i>
                            </strong>
                        </div>
                    @endauth
                    <a href="#" class="text-uppercase">Login</a>

                    <ul class="custom-menu">
                        <li><a href="#"><i class="fa fa-user-o"></i> My Account </a> </li>
                        <li><a href="#"><i class="fa fa-user-o"></i> My Account </a> </li>
                        <li><a href="#"><i class="fa fa-user-o"></i> My Account </a> </li>
                        <li><a href="#"><i class="fa fa-user-o"></i> My Account </a> </li>
                        <li><a href="#"><i class="fa fa-user-o"></i> Logout </a> </li>
                    </ul>
                </li>

            </ul>
        </div>
--}}
      {{--  <div class="pull-right">
            <ul class="header-btns">
                <li class="header-account dropdown default-dropdown">
                    @auth
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                 <i class="fa fa-user-o"></i>
                            </div>
                            <strong class="text-uppercase">My Account
                            <i class="fa fa-caret-down"></i>
                            </strong>
                        </div>
                    @endauth
                    <a href="#" class="text-uppercase">Login</a>

                    <ul class="custom-menu">
                        <li><a href="#"><i class="fa fa-user-o"></i> My Account </a> </li>
                        <li><a href="#"><i class="fa fa-user-o"></i> My Account </a> </li>
                        <li><a href="#"><i class="fa fa-user-o"></i> My Account </a> </li>
                        <li><a href="#"><i class="fa fa-user-o"></i> My Account </a> </li>
                        <li><a href="#"><i class="fa fa-user-o"></i> Logout </a> </li>
                    </ul>
                </li>



            </ul>
        </div>
    </div>--}}
        </div>
    </div>
</nav>
<!--/ Nav End /-->
