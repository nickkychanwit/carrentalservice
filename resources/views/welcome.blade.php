<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title >Carrental Service</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
        <link href="{{asset('css/welcomestyle.css')}}" rel="stylesheet">
        <!-- Styles -->

    </head>
    <body>
        <div class="">
            @if (Route::has('login'))
            <ul>
                <div class="top-right links">
                    @if (Auth::check())
                      <a href="{{ url('/home') }}">Home</a>
                    @else
                      <a href="{{ url('/login') }}">Login</a>
                      <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            </ul>

            @endif

            <div class="content">
                <div class="title m-b-md">
                    Car Rental Service
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
    </body>
</html>
