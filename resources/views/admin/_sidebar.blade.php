<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center user-image-back">
                @if(Auth:: user()->profile_photo_path)
                    <img src="{{Storage::url(Auth:: user()->profile_photo_path)}}" height="260" alt="">
                @endif

            </li>
            <li>
                @auth
                    <a href="#" class="success"><i class="fa fa-user "></i>{{Auth:: user()->name}}</a>
                @endauth
            </li>


            <li>
                <a href="{{route('admin_menu')}}"><i class="fa fa-edit "></i>MENU</a>
            </li>

            <li>
                <a href="{{route('admin_content')}}"><i class="fa fa-bars "></i>Contents</a>
            </li>
            <li>
                <a href="{{route('admin_message')}}"><i class="fa fa-comments "></i>Contact Message </a>
            </li>
            <li>
                <a href="{{route('admin_review')}}"><i class="fa fa-comment "></i>Comment </a>
            </li>
            <li>
                <a href="{{route('admin_faq')}}"><i class="fa fa-question "></i>Faq </a>
            </li>
            <li>
                <a href="{{route('admin_users')}}"><i class="fa fa-users "></i>Roles </a>
            </li>


            <li>
                <a href="#"><i class="fa fa-credit-card "></i>Payment Control<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin_payment_list',['status'=>'new'])}}"><i class="fa fa-money "></i>New Payments </a>
                    </li>
                    <li>
                        <a href="{{route('admin_payment_list',['status'=>'paid'])}}"><i class="fa fa-star "></i>Paid Payments </a>
                    </li>
                    <li>
                        <a href="{{route('admin_payment_list',['status'=>'canceled'])}}"><i class="fa fa-ban "></i>Cancel Payments </a>
                    </li>
                  {{--  <li>
                        <a href="#">Second Level Link<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>

                        </ul>

                    </li>--}}
                </ul>
            </li>
        </ul>


    </div>

</nav>
