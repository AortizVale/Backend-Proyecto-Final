@extends('layout_app.auth')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link rel="stylesheet" href="css/log.css">
    </head>

    <body>
        <div id="wrapper">
            <div class="main-content flex flex-col">
                <div class="d-flex justify-content-center mb-3">
                    <img src="img/logo_optica.jpg" style="width: 150px; height: auto;" alt="clawlogo" />
                </div>

                <div class="l-part">
                    <input type="text" placeholder="Email" class="input-1" />
                    <div class="overlap-text">
                        <input type="password" placeholder="Password" class="input-2" />

                    </div>
                    <input type="button" value="Entrar" class="btn" />
                    <br>
                    <br>
                    
                    <br>
                    <br>

                    <a class="forgot-password-link" href="#" role="link" tabindex="0">
                        <span class="forgot-password-text">¿Has olvidado la contraseña?</span>
                    </a>

                </div>
            </div>
            <div class="sub-content">
                <div class="s-part">
                    ¿No tienes una cuenta? <a href={{ route('registro') }}> Registrate</a>
                </div>
            </div>
        </div>



    </body>

    </html>
@endsection
