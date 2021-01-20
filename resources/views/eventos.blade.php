@extends('layouts.site')
@section('content')

<div class="Eventos_row-1">
    <div class=Eventos_row-1_column-1>
        <h2>MAESTRÍA EN GERENCIA DEL</h2> 
        <h2>TURISMO SOSTENIBLE</h2>
    
            <p>{!!$data[0]['row1column1_1']!!}</p> 
            <p>{!!$data[0]['row1column1_2']!!} </p>
            <p> {!!$data[0]['row1column1_3']!!}</p>
            <p>{!!$data[0]['row1column1_4']!!}</p>
            <p>{!!$data[0]['row1column1_5']!!}</p>
            <p> {!!$data[0]['row1column1_6']!!}</p>
            <p>{!!$data[0]['row1column1_7']!!}</p>
        </div>
    <div class="Eventos_row-1_column-2">
        <img src='./images/evento.png'>
    </div>
</div>
@endsection