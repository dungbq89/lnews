@if(isset($categories) && count($categories))
    @foreach($categories as $key=>$value)
        <li class="color{{$key+2}}"><a href="category.html">{{$value->name_vi}}</a></li>
    @endforeach
@endif
