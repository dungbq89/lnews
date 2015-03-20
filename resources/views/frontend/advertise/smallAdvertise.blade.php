@if($advertise)
    @foreach($advertise as $key => $value)
        <a href="{{$value["link"]}}" class="{{($key%2==0)?'lefter':'righter'}} mt" title="{{$value["name"]}}"><img src="{{$value["image_path"]}}" alt="#"></a>
    @endforeach
@endif