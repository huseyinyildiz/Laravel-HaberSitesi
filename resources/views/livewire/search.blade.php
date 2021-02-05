<div>
    {{-- Success is as dangerous as failure. --}}

    <input wire:model="search" name="search" type="text" class="input search-input" list="mylist" placeholder="Search News..." />
    <button type="submit" class="btn btn-info" ><i class="fa fa-search"></i></button>

@if(!empty($query))
    <datalist id="mylist">
       @foreach($datalist as $rs)

            <option value="{{$rs->title}}">{{$rs->category->title}}</option>
        @endforeach

    </datalist>
    @endif

</div>
