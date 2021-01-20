@extends('layouts.site')
@section('content')
    <div>
        <h1>Edit Project</h1>
    </div>
    <div>
        <form name="edit_project" action="/editprojectdata" method="post">
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
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
@endsection