@extends('layouts.site')
@section('content')
    <div>
        <h1>Edit an Event</h1>
    </div>
    <div>
        <form name="edit_event" action="/editeventdata" method="post">
            <label>ID:</label>
            <input type="text" name="input_ID"> 
            @if(array_key_exists('input_ID',$errors))
             <span class="error">{{$errors['input_ID'][0]}}</span>
            @endif<br><br>
            <label>Title:</label>
            <input type="text" name="input_title">
            @if(array_key_exists('input_title',$errors))
             <span class="error">{{$errors['input_title'][0]}}</span>
            @endif<br><br>
            <label>Description:</label>
            <textarea rows="4" cols="50" name="input_description" ></textarea> 
            @if(array_key_exists('input_description',$errors))
            <span class="error">{{$errors['input_description'][0]}}</span>
           @endif<br><br>
            <label>Event Date:</label>
                <input type="Date" value = "2000/05/18" name="input_eventdate">
            @if(array_key_exists('input_eventdate',$errors))
                <span class="error">{{$errors['input_eventdate'][0]}}</span>
            @endif<br><br>
            <label>Venue:</label>
            <input type="text" name="input_venue"> 
            @if(array_key_exists('input_venue',$errors))
                <span class="error">{{$errors['input_venue'][0]}}</span>
            @endif<br><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
@endsection