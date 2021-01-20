@extends('layouts.site')
@section('content')

    <div class='center'>
            
        <img src='./images/logo.png' class="logoimg">

        <h2>Registro<h2>

        <div class='registrationForm'>
        <form name="myform" action="/register" method="post">

            <p>
                <span> <input type="text" class='registrationTextbox' placeholder="Nombre"  name="nombre" required ><span class="error">*</span></span>
                <span> <input type="email" required class='registrationTextbox' placeholder="Correo" name="correo" required><span class="error">*</span></span>
                @if(array_key_exists('correo',$errors))
                    <span class="error">{{$errors['correo'][0]}}</span>
                @endif
            </p>
            <p>
                <span> <input type="password" class='registrationTextbox' placeholder="Contrasena"
                        name="contrasena" required><span class="error">*</span></span>
                   
                <span> <input type="password" class='registrationTextbox' placeholder="Repeter Contrasena" name="contrasena_confirmation" required><span class="error">*</span></span>
                    @if(array_key_exists('contrasena_confirmation',$errors))
                        <span class="error">{{$errors['contrasena_confirmation'][0]}}</span>
                    @endif
                    @if(array_key_exists('contrasena',$errors))
                    <span class="error">{{$errors['contrasena'][0]}}</span>
                @endif
            </p>
            <p>
                <span> <input type="text" class='DireccionTextbox' placeholder="Direccion"
                        name="direccion"></span>
                    @if(array_key_exists('direccion',$errors))
                        <span class="error">{{$errors['direccion'][0]}}</span>
                    @endif
            </p>
            <p>
                <label for="role">Choose a role:</label>  
                <select name="role">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>                     
            </p>
                @if(array_key_exists('role',$errors))
                        <span class="error">{{$errors['role'][0]}}</span>
                @endif
            <p>
                <span> <input type="submit" class='Guardar'  value="Guardar" name="Guardar"></span>
            </p>
        </form>



        </div>

        <div class='registerationDescription'>
            <p>
                <img src='./images/logo.png'>
            </p>
            <p>
                <h2>CENTRO AUGUSTO MIJARES</h2>
            </p>

        </div>
    </div>
@endsection