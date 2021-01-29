
@foreach($children as $submenu)
    <ul class="list-links">
        @if(count($submenu->children))
            <li>
            <li style="color:#1087dd" >
                {{$submenu->title}}
            </li>

           <li>
                @include('home.menutree',['children'=>$submenu->children])
            </li>
            </ul>

            <hr>

        @else
                <a href="{{route('menucontents',['id'=>$submenu->id])}}">{{$submenu->title}}</a>
        @endif


    </ul>
@endforeach
