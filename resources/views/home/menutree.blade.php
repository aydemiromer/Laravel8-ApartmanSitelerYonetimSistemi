
@foreach($children as $submenu)
    <ul class="list-links">
        @if(count($submenu->children))

                {{$submenu->title}}
                <li>
                @include('home.menutree',['children'=>$submenu->children])
                </li>
            <hr>
        @else
                <a href="{{route('menucontents',['id'=>$submenu->id])}}">{{$submenu->title}}</a>
        @endif
    </ul>
@endforeach
