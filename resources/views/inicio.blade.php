@extends('layouts.site')
@section('content')
<div id="row">
    <div class="column-1">
        <img src="./images/logo.png" alt="Mijares logo" width="50px" height="50px">
        <h1>CENTRO AUGUSTO<br> MIJARES​ </h1>
        <h3>DESARROLLO HUMANO<br> SUSTENTABLE</h3>
    </div>

    <div class="column-2">
        <h3>BIENVENIDA</h3>
        <p>{!!$data[0]['row1column2']!!}</p>

    </div>
</div>


<div class="row-2">
    <img src="./images/logo.png" alt="Mijares logo" width="30px" height="30px">
    <h3>PROPÓSITO</h3>
    <p>{!!$data[0]['row2column1']!!}</p>
</div>

<div id="row">
    <div class="row-3_column-1">
        <iframe width="400" height="200" src="https://www.youtube.com/embed/Kcl-T98Wtvo" frameborder="0"
            allowfullscreen></iframe>
    </div>
    <div class="row-3_column-2">
        <h3>OBJETIVOS</h3>
        <p>{!!$data[0]['row3column2']!!}</p>
    </div>
</div>
@endsection