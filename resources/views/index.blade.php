@extends('layouts.site')
@section('content')
    <div>
        @if(Session::exists('user'))
            <h4>Welcome {{ Session::get('user')['firstname'] }} (You are a {{ Session::get('user')['role'] }}) </h4>
        @endif
    </div>

    <div class="Events_data_row-1">
        <div class="Events_data_row-1_column-1">    
        <ul class = "Vertical">
            <li><a href="/projects">Project</a></li>
            <li><a href="/events">Events</a></li>
            <li><a href="/teams">Team</a></li>
        </ul>
        </div>
    </div>
@endsection