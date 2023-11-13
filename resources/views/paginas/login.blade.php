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

                <form action="{{ route('login.auth') }}" method="post">
                    @csrf
                    <div class="l-part">
                        <input type="text" placeholder="Email" class="input-1" name="email" id="email" value="{{ old('email') }}" />
                        @error('email')
                            <small style="color: red">
                                {{ $message }}
                            </small>
                        @enderror
                        <div class="overlap-text">
                            <input type="password" placeholder="Password" class="input-2" name="password" id="password" />
                            @error('password')
                            <small style="color: red">
                                {{ $message }}
                            </small>
                        @enderror
                        </div>

                        <button id="submit" type="submit" class="btn">Ingresar</button>
                        <br>
                        <br>

                    </div>
                </form>
            </div>
        </div>



    </body>

    </html>
@endsection
