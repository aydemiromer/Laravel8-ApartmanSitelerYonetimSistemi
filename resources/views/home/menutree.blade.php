
@foreach($children as $subcategory)
    <ul class="list-links">
        @if(count($subcategory->children))
            <li>
            <li style="color:#1087dd" >
                {{$subcategory->title}}
            </li>

           <li>
                @include('home.menutree',['children'=>$subcategory->children])
            </li>
            </ul>

            <hr>

        @else
                <a href="{{route('menucontents',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a>
        @endif


    </ul>
@endforeach
