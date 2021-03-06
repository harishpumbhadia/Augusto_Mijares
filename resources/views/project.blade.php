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
        
        <div class="Events_data_row-1_column-2">
        <table class="Eventsdata">
            <tr>
                <th>USER ID</th>
                <th>PROJECT ID</th>
                <th>TITLE</th>
                <th>DESCRIPTION</th>
            </tr>
            @if(!empty($data) && count($data) > 0)
                @foreach ($data as $row)
                    <tr><td>{{$row["user_id"]}}</td><td>{{$row["id"]}}</td><td>{{$row["title"]}}</td><td>{{$row["desc"]}}</td></tr>
                @endforeach
            @else
                {{ "No data found" }}
            @endif
        </table>
        <div class="Eventdata_addbutton">
                <input class= "addbutton"  onclick="document.location.href='/addproject'" value="Add New Project" type="button"{{ (Session::get('user')['role']=='user') ? 'disabled = "disabled"' :'' }}>
                <input class= "addbutton"  onclick="document.location.href='editproject'" value="Edit Project" type="button"{{ (Session::get('user')['role']=='user' ) ? 'disabled = "disabled"' :'' }}>
                <input class= "addbutton"  onclick="document.location.href='/deleteproject'" value="Delete Project" type="button"{{ (Session::get('user')['role']=='user' ) ? 'disabled = "disabled"' :'' }}>
        <a href="/logout">logout</a>
        </div>
        </div>
        </div>
@endsection