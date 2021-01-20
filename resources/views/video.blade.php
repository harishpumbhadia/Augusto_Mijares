@extends('layouts.site')
@section('content')
    <div class='videosWrapper center'>
        <div class='individualProfiles'>
            
                <iframe width="300" height="200" src="https://www.youtube.com/embed/44E6zSpaDwE">
                </iframe>
        
            <p>
                <h4>Dr. François Vallaeys</h4>
            </p>
            <p >{!!$data[0]['row1column1_1']!!}</p>
            <p class="Videotext">{!!$data[0]['row1column1_2']!!}</p>
        </div>

        <div class='individualProfiles'>
            
                <iframe width="300" height="200" src="https://www.youtube.com/embed/do9dIcEIiwU">
                </iframe>
            
            <p>
                <h4>Dr. François Vallaeys</h4>
            </p>
            <p>{!!$data[0]['row1column2_1']!!} </p>
            <p>{!!$data[0]['row1column2_2']!!}</p>
        </div>

        <div class='individualProfiles'>
            
                <iframe width="300" height="200" src="https://www.youtube.com/embed/h4juTFzNYcs">
                </iframe>
            <p>
                <h4>UNIVERSIDAD DEL PACÍFICO​</h4>
            </p>
            <p>{!!$data[0]['row1column3_1']!!}</p>
            <p>{!!$data[0]['row1column3_2']!!} </p>
        </div>
        <div class='individualProfiles'>
        
                <iframe width="300" height="200" src="https://www.youtube.com/embed/W7y83cZ_s7g">
                </iframe>
            <p>
                <h4>Dr. François Vallaeys</h4>
            </p>
            <p>{!!$data[0]['row2column1_1']!!}</p>
            <p>{!!$data[0]['row2column1_2']!!}</p>
        </div>
    </div>
@endsection