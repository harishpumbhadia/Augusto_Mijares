@extends('layouts.site')
@section('content')
<div>
     <div> 
        @if(Session::exists('user'))
            <h4>Welcome {{ Session::get('user')['firstname'] }} (You are a {{ Session::get('user')['role'] }}) </h4>
        @endif
    </div>
</div>
 <div>
    <h1>Delete Project</h1>
 </div>
 <div>
    <form name="add_event" action="deleteeventdata"  method="post">
        <label>ID:</label>
        <input type="text" name="input_ID"> 
        @if(array_key_exists('input_ID',$errors))
             <span class="error">{{$errors['input_ID'][0]}}</span>
        @endif<br><br>
        <input type="submit" name="submit" value="submit">
   </form>
 </div>
 @endsection