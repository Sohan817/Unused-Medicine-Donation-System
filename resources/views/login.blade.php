<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color:aqua;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .button {
                  border: none;
                  color: black;
                  padding: 10px 14px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                  font-size: 16px;
                  margin: 4px 2px;
                  cursor: pointer;
                }

          .button1 {background-color: #0000FF;} 
          .button1 {border-radius: 16px;}

        </style>
        <style>          
                input[type=text] {
                background: transparent;
                border: none;
                border-bottom: 1px solid #000000  
                }
         </style>
              <style>          
          input[type=password] {
             background: transparent;
             border: none;
             border-bottom: 1px solid #000000  }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <style>
                body{
                    background-image:url(images/login.jpg);
                    background-size: 100% 100%;
                }
            </style>
                @if(Session::get('status'))
              <div class="alert alert-success" role="alert" style="text-align:center;color:green">
              {{Session::get('status')}}
              </div>
              @endif
            <div class="container box">
            <form action="{{URL::to('/logs')}}" method="post">
            <div class="form-group">
            <label style="color:white"><strong>Email</strong></Label><br>
            <input type="text" name="email" placeholder="Enter Email"value="">
            </div>  
            <br>
            <div class="form-group">
            <label style="color:white"><strong>Password</strong></label><br>
            <input type="password" name="password"placeholder="Enter Password"value="">
            </div>
            <br>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button class="button button1" type="submit"> <b>Login</b></button>
            </form>
            <h5 style="color:white"><strong class="b_bold"><b> Don't have an account?Click here to</b>
             <a href="/register "style="color:blue"><strong >Register</strong></a>
            </h5>
        
              @if(Session::get('status1'))
            <div class="alert alert-danger" role="alert" style="text-align:center;color:red">
              {{Session::get('status1')}}
              </div>
              @endif
             </div>
            </div>
        </div>
    </body>
</html>
