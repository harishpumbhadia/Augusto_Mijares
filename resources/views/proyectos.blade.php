@extends('layouts.site')
@section('content')

    <div class="Proyectos_row-1">
        <img src="./images/logo.png" alt="Mijares logo" width="40px" height="40px">
        <h4>RESPONSABILIDAD SOCIAL UNIVERSITARIA​ Y DESARROLLO SUSTENTABLE ¿QUÉ Y PARA QUÉ?</h4>
    </div>

    <div class="Proyectos_row-2">
        <div class="Proyectos_row-2_column-1">
            <img src="./images/graduandos.jpg" alt="graduandos Image" height="420" width="500">
        </div>

        <div class="Proyectos_row-2_column-2">
            <h4>Por el Centro AuguSto Mijares: Mgtr. Tamara Malaver</h4>
            <p>{!!$data[0]['row2column2_1']!!}<br>
                <B>Propósito:</B>{!!$data[0]['row2column2_2']!!}<br>
                <B>Valores:</B>{!!$data[0]['row2column2_3']!!}<br>
                <B>Métodos:</B>{!!$data[0]['row2column2_4']!!}</p><br>


        </div>
    </div>

    <div class="Proyectos_row-3">
        <div class="Proyectos_row-3_column-1">
            <p><B>Investigación:</B> {!!$data[0]['row3column1_1']!!}<br>
                <B>Asociación:</B> {!!$data[0]['row3column2_2']!!}<br>
                <B>Diálogo:</B>{!!$data[0]['row3column2_3']!!}<br>
                <button class="button-1">Leer Mas</button>
        </div>

        <div class="Proyectos_row-3_column-2">
            <img src="./images/descarga.jpg" alt="graduandos Image" height="400" width="650">
        </div>
    </div>
@endsection