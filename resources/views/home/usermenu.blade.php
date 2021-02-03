<div class="aside">
    <h3 class="aside-title">User Panel</h3>
    <ul class="list-links">
        <li><a href="{{route('profile')}}">My Profile</a> </li>
        <li><a href="{{route('myreviews')}}">My Reviews</a> </li>
        <li><a href="{{route('user_payment')}}">My Payments</a> </li>
        @php

            $userRoles = Auth::user()->roles->pluck('name');

        @endphp
        @if($userRoles->contains('admin'))
            <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
        @endif
        <li><a href="{{route('logout')}}">Logout</a> </li>
    </ul>
</div>
