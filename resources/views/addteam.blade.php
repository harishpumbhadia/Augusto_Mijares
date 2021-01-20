@extends('layouts.site')
@section('content')

<div> 
        @if(Session::exists('user'))
            <h4>Welcome {{ Session::get('user')['firstname'] }} (You are a {{ Session::get('user')['role'] }}) </h4>
        @endif
    </div>

    <div>
        <h1>Add a Team</h1>
    </div>
     <div>
         <form enctype="multipart/form-data" name="add_event" action="/addTeamdata" method="post" >
                     <label>Project ID:</label>
                     <input type="text" name="input_projectid"> 
                     @if(array_key_exists('input_projectid',$errors))
                     <span class="error">{{$errors['input_projectid'][0]}}</span>
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