@extends('layouts.site')
@section('content')
    <div class="Centro_row-1">
        <div class="Centro_row-1_column-1">
            <h1>MISIÓN</h1>
            <p>{!!$data[0]['row1column1']!!}
            </p>
        </div>

        <div class="Centro_row-1_column-2">
            <h1>VISIÓN</h1>
            <p> {!!$data[0]['row1column2']!!} </p>
        </div>
    </div>

    <div class="Centro_row-2">
        <img src="./images/logo.png" alt="Mijares logo" width="40px" height="40px">
        <h3>VALORES</h3>
        <p>{!!$data[0]['row2column1']!!}
        </p>
    </div>

    <div class="Centro_row-3">
        <div class="Centro_row-3_column-1">
            <h4>RESPONSABILIDAD SOCIAL</h4>
            <p>{!!$data[0]['row3column1']!!}  </p>
        </div>
        <div class="Centro_row-3_column-2">
            <h4>FRATERNIDAD</h4>
            <p>{!!$data[0]['row3column2']!!}
            </p>

        </div>

        <div class="Centro_row-3_column-3">
            <h4>LIBERTAD</h4>
            <p>{!!$data[0]['row3column3']!!}
            </p>
        </div>
    </div>

    <div class="Centro_row-4">
        <div class="Centro_row-4_column-1">
            <h4>CORRESPONSABILIDAD</h4>
            <p>{!!$data[0]['row4column1']!!} </p>
        </div>
        <div class="Centro_row-4_column-2">
            <h4>SOLIDARIDAD</h4>
            <p>{!!$data[0]['row4column2']!!}</p>
        </div>
        <div class="Centro_row-4_column-3">
            <h4>CONSTANCIA</h4>
            <p>{!!$data[0]['row4column3']!!} </p>
        </div>
    </div>
@endsection