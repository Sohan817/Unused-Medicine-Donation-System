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

          .button1 {background-color:  #DC143C;} 
          .button1 {border-radius: 16px;}
        </style>
         </style>
             <style>          
                input[type=text] {
                background: transparent;
                border: none;
                border-bottom: 1px solid #000000  }
            </style>
             </style>
             <style>          
                input[type=password] {
                background: transparent;
                border: none;
                border-bottom: 1px solid #000000  }
            </style>
             </style>
             <style>          
                input[type=integer] {
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
                background-image:url(images/ngor.jpg);
                background-size: 100% 100%;
                background-attachment: fixed;
            }
            </style>

            <div class="container">
            <form class=" " action="{{URL::to('/ngoreg')}}" method="post">
            <h2 style="color:black"><b>Hello NGOs/NPOs.....</b></h>
            <h4 style="color:black"><i>You are really doing a great job.Getting smiles on the faces of people is one of the difficult and brilliant work.. <br>
                                     You are working for a humanitarian cause by helping them in their day to day life,by providing them the 
                                     essentials they can't afford.....</i></h4>
               <h4 style="color:black"><b>This website aims for NGOs like youto connect with us and help you achieve your goal. <br>
               Your goal is "Our GOAL".So connect with us by following the simple steps given below:</b></h4>
               <h5 style="color:black"><i>You need to mail the Admin your scanned copy of the registration certificate of the NGO,financial statement
               and audit statements at</i> <a href="">hsohan509@gmail.com</a></h5>
               <h4 style="color:black"> <b>After Getting Confirmation Mail,Fill up the Following Registration Form:</b></h4>
              <form class=" " action="{{URL::to('/reg')}}" method="post">
              <label style="color:black"for="name"><strong>Name Of The NGO/NPO:</strong> </label>
               <input type="text" name="name" value="">
               <br><br>
               <label style="color:black" for="email"><strong>Authorized Email:</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;
               <input type="text" name="email" value="">
               <br><br>
               <label style="color:black" for="password"><strong>Password:</strong></label>
               <input type="password" name="password" value="">
               <br><br>
               <label style="color:black" for="address"><strong>Address:</strong></label>
               <input type="text" name="address" value=""style="width:180px">
               <h5 style="color:black"><b>[The address should include the house/building number,area name,city and state name]</b></h5>
               <label style="color:black" for="mobile"><strong>Contact Number:</strong></label> 
               <input type="integer" name="mobile" value=""style="width:120px">
               <br><br>
               <label style="color:black" for="establish"><strong>Year of Establishment:</strong></label> 
               <input type="text" name="establish" value="" style="width:80px">
               <br><br>
               <label style="color:black" for="ntam"><strong>Name of The Authoritative Members:</strong></label>
               <input type="text" name="ntam" value="" style="width:200px">
               <br><br>
               <input type="hidden" name="_token" value="{{csrf_token()}}">
               <button class="button button1" type="submit" name="button">
               <strong>Register</strong></button>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>
