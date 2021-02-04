@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
@endphp

<div class="left-sidebar">
    <ul class="nav navbar-nav collapse navbar-collapse">

            <li>
                @foreach($parentCategories as $rs)
                <a data-toggle="collapse" data-parent="#accordian" href="#{{$rs->id}}">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    {{$rs->title}}
                </a>
                <ul>
                    <li>
                        <div id="{{$rs->id}}" class="panel-collapse collapse">
                            <div class="panel-body">
                            @if(count($rs->children))
                                @include('home.categorytree',['children'=>$rs->children])
                            @endif
                            </div>
                        </div>
                    </li>
                </ul>
                @endforeach
            </li>

    </ul>
</div>
