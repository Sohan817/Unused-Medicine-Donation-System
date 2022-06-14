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
                background-color: pink;
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
                position:center;
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

          .button1 {background-color: #00FF7F;} 
          .button1 {border-radius: 16px;}
          .button2 {background-color: #DC143C;} 
          .button2 {border-radius: 16px;}
        </style>
         <style>          
                input[type=text] {
                background: transparent;
                border: none;
                border-bottom: 1px solid #000000  
                }
         </style>
          <style>          
                input[type=integer]{
                background: transparent;
                border: none;
                border-bottom: 1px solid #000000  }
            </style>
             <style>          
                input[type=email]{
                background: transparent;
                border: none;
                border-bottom: 1px solid #000000  }
            </style>
             <style>          
                input[type=password]{
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
                background-image:url(images/register.jpeg);
            }
            </style>
         
            <div class="container">
             
              <form class=" " action="{{URL::to('/reg')}}" method="post">
              <label style="color:black"for="name"><strong>Name*</strong> </label> <br>
               <input type="text" name="name" value="">
               <br><br>
               <label style="color:black" for="gender"><strong>Gender* </label><br>
               <input type="radio" name="gender" id="optionsRadios1" value="Male" checked="">
               <label style="color:black" >Male</label>
               <input type="radio" name="gender" id="optionsRadios2" value="Female" checked="">
               <label style="color:black">Female</label>
               <br><br>
               <label style="color:black" for="age"><strong>Age*</strong></label><br> 
               <input type="integer" name="age" value="">
               <br><br>
               <label style="color:black" for="city"><strong>City*</strong></label><br> 
               <input type="text" name="city" value="">
               <br><br>
               <label style="color:black" for="phone"><strong>Phone*</strong></label><br> 
               <input type="integer" name="phone" value="">
               <br><br>
               <label style="color:black" for="name"><strong>Email*</strong></label> <br>
               <input type="text" name="email" value="">
               <br><br>
               <label style="color:black" for="name"><strong>Password*</strong></label> <br>
               <input type="password" name="password" value="">
               <br><br>
               <input type="hidden" name="_token" value="{{csrf_token()}}">
               <button class="button button1" type="submit" name="button"><strong>Register</strong></button>
               <button class="button button2" type="reset" value="Reset"><b>Cancel</b></button>
               @if(Session::get('status2'))
               <div class="alert alert-danger" role="alert" style="text-align:center;color:#006400">
              {{Session::get('status2')}}
              </div>
              @endif
                </form>

                </div>
            </div>
        </div>
    </body>
</html>
