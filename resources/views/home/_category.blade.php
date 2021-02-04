@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
@endphp

<div class="menu">
    <ul class="nav navbar-nav collapse navbar-collapse">
        @foreach($parentCategories as $rs)
            <li class="dropdown">
                <a class="menu-toggle">{{$rs->title}}</a>
                <ul class="dropdown">
                    <li class="dropdown">
                        <div>
                            @if(count($rs->children))
                                @include('home.categorytree',['children'=>$rs->children])
                            @endif
                        </div>
                    </li>
                </ul>
            </li>
        @endforeach
    </ul>
</div>
