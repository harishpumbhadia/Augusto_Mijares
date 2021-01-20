@extends('layouts.site')
@section('content')
<div class='center'>
    <img src='./images/logo.png' alt='Logo' class="logoimg">
    <p>
        <h2>Iniciar Sesion</h2>
    </p>

     <form name = "login" method="post" action= "logindata" >
    <p>
        <span> <input type="email" class="username"  placeholder="Nombre de Usuario o Correo" name="correo" required>
                <span class="error">*</span>
        </span>
        <span> <input type="password" class="passwordtextBox" placeholder="Contrasena" name="contrasena" required>
             <span class="error">*</span>
        </span>
        @if(array_key_exists('contrasena',$errors))
            <span class="error">{{$errors['contrasena'][0]}}</span>
        @endif
        @if(array_key_exists('contrasena',$errors))
            <span class="error">{{$errors['correo'][0]}}</span>
        @endif
        @if(array_key_exists('userdata',$errors))
            </p>
                <p class="error">{{$errors['userdata']}}</p>
            <p>
        @endif

    
        <input type='Submit' class="signinButton" value="Entrar"  placeholder="Entrar"
            name='Entrar'>
    </p>
     </form>
</div>
@endsection