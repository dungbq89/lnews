@if($advertise)
    <div class="ads">
        <a href="{{$advertise->link}}" title="{{$advertise->name}}" target="_new"><img src="{{$advertise->image_path}}" alt="ADS"></a>
    </div><!-- /ads -->
@endif