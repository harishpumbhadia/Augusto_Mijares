@extends('layouts.site')
@section('content')
    <div>
        <h1>Edit a Team</h1>
    </div>
    <div>
        <form name="edit_event" action="/editTeamdata" method="post">
            <label>Team ID:</label>
            <input type="text" name="input_ID"> 
            @if(array_key_exists('input_ID',$errors))
             <span class="error">{{$errors['input_ID'][0]}}</span>
            @endif<br><br>
            <label>Name:</label>
            <input type="text" name="input_name">
            @if(array_key_exists('input_name',$errors))
             <span class="error">{{$errors['input_name'][0]}}</span>
            @endif<br><br>
            <label>Description:</label>
            <textarea rows="4" cols="50" name="input_description" ></textarea> 
            @if(array_key_exists('input_description',$errors))
            <span class="error">{{$errors['input_description'][0]}}</span>
           @endif<br><br>
            
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
@endsection