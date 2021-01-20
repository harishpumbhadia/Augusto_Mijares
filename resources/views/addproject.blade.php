@extends('layouts.site')
@section('content')

    <div> 
        @if(Session::exists('user'))
            <h4>Welcome {{ Session::get('user')['firstname'] }} (You are a {{ Session::get('user')['role'] }}) </h4>
        @endif
    </div>
    <div>
        <h1>Add Project</h1>
    </div>

    <div>
    <form enctype="multipart/form-data" name="add_event" action="/addpojectdata" method="post" >
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
        <label>Add Video:</label>
            <input type="file" id="video" name = "video"><br><br>
            <input type="submit" name="submit" value="submit">
    </form>
    </div>
@endsection