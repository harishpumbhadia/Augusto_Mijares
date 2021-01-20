@extends('layouts.site')
@section('content')
    <div class='center'>
        <img src='./images/logo.png' alt='Logo' class="logoimg">
        <p>
            <h2>UN ESPACIO PARA DEBATIR A PARTIR DEL VÍDEO</h2>
        </p>
    </div>
    <div class='row'>
        <div class="profile__row">
            <div class='equipo_individualProfiles'>
                <div class='center img_margin'>
                    <img src='./images/foto1.png'>
                    <h4>ALEX RODRÍGUEZ D.</h4>
                </div>
                <div class="center description_margin">
                    <p>{!!$data[0]['row1column1_1']!!} </p>
                    <p>{!!$data[0]['row1column1_2']!!} </p>
                    <p>{!!$data[0]['row1column1_3']!!}</p>
                </div>
            </div>
            <div class='equipo_individualProfiles'>
                <div class='center img_margin'>
                    <img src='./images/foto2.png'>

                    <h4>GISELA QUINTERO B.</h4>
                </div>
                <div class="center description_margin">
                    <p>{!!$data[0]['row1column2_1']!!} </p>
                    <p>{!!$data[0]['row1column2_2']!!}</p>
                    <p>{!!$data[0]['row1column2_3']!!} </p>
                </div>
            </div>
            <div class='equipo_individualProfiles'>
                <div class='center img_margin'>
                    <img src='./images/foto3.png'>
                    <h4>JUDITH P. ALVARADO J.</h4>
                </div>
                <div class="center description_margin">
                    <p>{!!$data[0]['row1column3_1']!!} </p>
                    <p>{!!$data[0]['row1column3_2']!!} </p>
                    <p>{!!$data[0]['row1column3_3']!!}</p>
                </div>
            </div>
        </div>

        <div class="profile__row">

            <div class='equipo_individualProfiles'>
                <div class='center img_margin'>
                    <img src='./images/foto4.png'>
                    <h4>MARÍA AUGUSTA BERROTERÁN</h4>
                </div>
                <div class="center description_margin">
                    <p>{!!$data[0]['row2column1_1']!!}</p>
                    <p>{!!$data[0]['row2column1_2']!!} </p>
                    <p>{!!$data[0]['row2column1_3']!!} </p>
                </div>
            </div>
            <div class='equipo_individualProfiles'>
                <div class='center img_margin'>

                    <img src='./images/foto5.png'>
                    <h4>TAMARA MALAVER</h4>
                </div>
                <div class="center description_margin">
                    <p>{!!$data[0]['row2column2_1']!!} </p>
                    <p>{!!$data[0]['row2column2_2']!!} </p>
                    <p>{!!$data[0]['row2column2_3']!!} </p>
                </div>
            </div>
            <div class='equipo_individualProfiles'>
                <div class='center img_margin'>

                    <img src='./images/foto6.png'>
                    <h4>TERESITA GONZÁLEZ</h4>
                </div>
                <div class="center description_margin">
                    <p>{!!$data[0]['row2column3_1']!!} </p>
                    <p>{!!$data[0]['row2column3_2']!!} </p>
                    <p>{!!$data[0]['row2column3_3']!!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection