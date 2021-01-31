<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center user-image-back">
                <img src="{{asset('assets')}}/admin/assets/img/find_user.png" class="img-responsive" />

            </li>
            <div class="info">
                @auth
                    <a href="#" class="d-block">{{Auth:: user()->name}}</a>

                @endauth
            </div>


            <li>
                <a href="{{route('admin_menu')}}"><i class="fa fa-edit "></i>MENU<span class="fa arrow"></span></a>
                {{--<ul class="nav nav-second-level">
                    <li>
                        <a href="#">Notifications</a>
                    </li>
                    <li>
                        <a href="#">Elements</a>
                    </li>
                    <li>
                        <a href="#">Free Link</a>
                    </li>
                </ul> --}}
            </li>

            <li>
                <a href="{{route('admin_content')}}"><i class="fa fa-table "></i>Contents</a>
            </li>
            <li>
                <a href="{{route('admin_message')}}"><i class="fa fa-comment "></i>Contact Message </a>
            </li>
            <li>
                <a href="{{route('admin_review')}}"><i class="fa fa-comment "></i>Review </a>
            </li>
            <li>
                <a href="{{route('admin_faq')}}"><i class="fa fa-comment "></i>Faq </a>
            </li>


            <li>
                <a href="#"><i class="fa fa-sitemap "></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
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

                    </li>
                </ul>
            </li>
        </ul>


    </div>

</nav>
