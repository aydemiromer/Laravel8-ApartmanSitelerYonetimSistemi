
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
        <a class="navbar-brand text-brand" href="{{route('home')}}">Apart<span class="color-b">Aidat</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <div class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('aboutus')}}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('references')}}">References</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('faq')}}">Faq</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach($parentMenus as $rs)

                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">{{$rs->title}}</a>
                                    <li>
                                        @if(count($rs->children))
                                            @include('home.menutree',['children'=>$rs->children])
                                        @endif
                                    </li>

                        @endforeach
                    </ul>
                </li>



                <li class="nav-item dropdown">
                    @auth
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>
                                <strong class="text-uppercase">{{Auth::user()->name}}</strong>

                    </a>

                        <ul class="dropdown-menu" role="menu">
                            <ul class="custom-menu">
                                <li><a href="{{route('profile')}}"><i class="fa fa-user-o"></i> My Account </a> </li>
                                <li><a href="{{route('myreviews_list',['status'=>'true'])}}"><i class="fa fa-user-o"></i> Reviews </a> </li>
                                <li><a href="{{route('user_payment')}}"><i class="fa fa-user-o"></i> Payments </a> </li>
                                @php
                                    $userRoles = Auth::user()->roles->pluck('name');
                                @endphp
                                @if($userRoles->contains('admin'))
                                    <li><a href="{{route('admin_home')}}" ><i class="fa fa-user-o">Admin Panel</i></a></li>
                                @endif
                                <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Logout </a> </li>
                            </ul>
                        </ul>
                    @endauth
                </li>
                <li class="nav-item">
                      @guest
                        <a href="/login" class="btn btn-success"><i class="fa fa-sign-in"> Login</i></a>
                        <a href="/register" class="btn btn-danger"> Register</a>
                    @endguest
                </li>

            </ul>

        </div>

        </div>

    </div>

        <form class="form-inline" action="{{route('getcontent')}}" method="post">
            @csrf
            @livewire('search')
            <button class="search-btn" type="submit"><i class="fa fa-search"></i> </button>
        </form>
    @section('footerjs')
        @livewireScripts
    @endsection

</nav>
<!--/ Nav End /-->
