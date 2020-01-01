<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Read House</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('images/steamboat_glow_krak.jpg');
                color: #FFEBCD;
                font-family: 'Raleway', sans-serif;
                font-weight: bold;
                
                margin: 0;
                height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }

            .links > a {
                color: #FFEBCD;
                padding: 0 25px;
                font-size: 14px;
                font-weight: bold;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-shadow: 0 0 10px rgba(0,0,0,9.5);
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/info') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <!-- <a href="{{ route('register') }}">Register</a> -->
                    @endauth
                </div>
            @endif

            <div class="content">
               <!--  <img src="../images/steamboat.jpg" class="img-responsive" style="margin: 0 auto;"> -->
                <div class="title m-b-md" style="text-shadow: 0 0 10px rgba(0,0,0,9.5);">
                    Read Family House
                </div>
            </div>
        </div>
    </body>
</html>
