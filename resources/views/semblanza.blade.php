@extends('layouts.site')
@section('content')
    <div class="Semblanza_row-1">
        <div class="Semblanza_row-1_column-1">
            <p><strong>Augusto Mijares</strong>{!!$data[0]['row1column1']!!}
            </p>
        </div>

        <div class="Semblanza_row-1_column-2">
            <img src="./images/Augusto_Mijares.jpg" alt="Augusto Mijares Image" height="560" width="470">
        </div>
    </div>

    <div class="Semblanza_row-2">
        <div class="Semblanza_row-2_column-1">
            <h4>APORTES PEDAGÓICOS DE AUGUSTO MIJARES</h4>
            <p>{!!$data[0]['row2column1']!!}</p>
        </div>

        <div class="Semblanza_row-2_column-2">
            <h4>Obras</h4>
            <p>{!!$data[0]['row2column2']!!} </p>
        </div>
    </div>
@endsection