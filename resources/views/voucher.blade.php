<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carrental Service</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 50vh;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .box{
              -webkit-border-radius: 4px;
              -moz-border-radius: 4px;
              -ms-border-radius: 4px;
              -o-border-radius: 4px;
              border-radius: 4px;
              -webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.2);
              -moz-box-shadow: 0 1px 5px rgba(0,0,0,0.2);
              -ms-box-shadow: 0 1px 5px rgba(0,0,0,0.2);
              -o-box-shadow: 0 1px 5px rgba(0,0,0,0.2);
              box-shadow: 0 1px 5px rgba(0,0,0,0.2);
              background: #fff;
              margin-top: 20px;
              margin-left: 20px;
              margin-right: 20px;
              margin-bottom: 20px;

              text-align: center;
              position relative;
              cusor: pointer;
              font-weight: 600;
              width: 200px;
              height: 215px;
              padding: 20px 15px;
              right: 10px;

            }

            .box:hover{
              -webkit-box-shadow: 0 4px 10px rgba(0,0,0,0.4);
              -moz-box-shadow; 0 4px 10px rgba(0,0,0,0.4);
              -o-box-shadow; 0 4px 10px rgba(0,0,0,0.4);
              box-shadow: 0 4px 10px rgba(0,0,0,0.4);
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Carrental Service
                </div>

                <div class="links">
                  @if(Auth::check())
                   <a href="http://carrentalservice.dev/edit">Edit User</a>
                    @if(Auth::user()->rule!="Admin")<a href="http://carrentalservice.dev/rental">Reserve</a>@endif
                    @if(Auth::user()->rule=="Admin")  <a href="http://carrentalservice.dev/receive">Receive</a>
                   <a href="http://carrentalservice.dev/return">Return</a>
                       <a href="http://carrentalservice.dev/bookingall">data booking</a>

                       @endif
                    @if(Auth::user()->rule=="Customer")  <a href="https://carrentalservice.dev/voucher">Voucher</a>@endif

                  @else <a href="http://carrentalservice.dev/rental">Reserve</a>
                  @endif
                    <a href="http://carrentalservice.dev/promotion">Promotion</a>
                  <a href="https://carrentalservice.dev/contact-us">Contact Us</a>
                    <a href="https://github.com/nickkychanwit/carrentalservice">GitHub</a>
                </div>
            </div>

          </div>
          <div class="flex-center position-ref full-height">
          <div class="box">
            <h2>500 Discount Voucher</h2>
            Discount 500 Bath<br>
            Consume 10 point<br>
            <br>
            <br>
            <button class="" type="button">Change</button>
          </div>

          </div>

    </body>
</html>
