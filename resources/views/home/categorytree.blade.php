@foreach($children as $subcategory)
    <ul>
        @if(count($subcategory->children))
            <li>{{$subcategory->title}}</li>
            <ul>
                <li>
                @include('home.categorytree',['children'=>$subcategory->$children])
                </li>
            </ul>
            <hr>
        @else
            <li><a href="{{route('categorynews',['id'=>$subcategory->id,'slug'=>$subcategory->title,'status'=>'true'])}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
