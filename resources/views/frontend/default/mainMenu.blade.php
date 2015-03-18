YYYYYYYYYY
@session('main_menu')
xxxxxxxxxxxxxxxx
<br />xxxxxxxxxxxxxxxx
<br />xxxxxxxxxxxxxxxx
<br />
@foreach($mainCategory as $n)
    <p>{{ $n->name_en }}</p>
@endforeach
@stop