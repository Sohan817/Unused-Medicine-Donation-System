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
                background-color: #1f2937;
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

          .button1 {background-color: #0000FF;} 
          .button2 {background-color: #00FF00;} 
          .button1 {border-radius: 16px;}
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
                input[type=integer] {
                background: transparent;
                border: none;
                border-bottom: 1px solid #000000  
                }
                .button3{
              float:right;
              background-color:#1E90FF;
              border-radius: 16px;
              padding: 10px 25px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
          }
         </style>
    </head>
    <body>
    <button  class="button button3" ><a href="/buysell" class="btn btn-default"
    style="color:white"><b>Back</b></a> </button> 
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
          
            </style>
            @if (Session::get('user'))
            <div  class="container">
             <form class=" " action="{{URL::to('/sell')}}" method="post">
              <label style="color:white"for="fullname"><strong>Full Name:</strong> </label> <br>
               <input type="text" style="color:white"name="fullname" value="">
               <br><br>
               <label style="color:white" for="email"><strong>Email ID:</strong></label> <br>
               <input type="text"style="color:white" name="email" value="">
               <br> <br>
               <label style="color:white" for="address"><strong>Address:</strong></label><br> 
               <input type="text"style="color:white" name="address" value=""> <br><br>
               <label style="color:white" for="brandname"><strong>Brand Name:</strong></label><br> 
               <input type="text"style="color:white" name="brandname" value="">
               <br><br>
               <label style="color:white" for="genericname"><strong>Generic Name:</strong></label> <br>
               <input type="text"style="color:white" name="genericname" value="">
               <br><br>
               <label style="color:white" for="quantity"><strong>Quantity:</strong></label> <br>
               <input type="integer"style="color:white" name="quantity" value="">
               <br><br>
               <label style="color:white" for="price"><strong>Price:</strong></label> <br>
               <input type="text"style="color:white" name="price" value="">
               <br><br>
               <label style="color:white" for="phone"><strong>Mobile Number:</strong></label> <br>
               <input type="text"style="color:white" name="phone" value="">
               <br><br>
               <label style="color:white"for="medicinetype"><strong>Medicine Type:</strong></label> <br>
               <input type="text"style="color:white" name="medicinetype" value="">
               <br><br>
               <input type="hidden" name="_token" value="{{csrf_token()}}">
               <button class="button button1" type="submit"> <b>Send Request</b></button> &nbsp;&nbsp;
               <button class="button button2" type="reset" value="Reset"><b>Clear</b></button>
               @if(Session::get('status5'))
               <div class="alert alert-danger" role="alert" style="text-align:center;color:#228B22">
               {{Session::get('status5')}}
              </div>
              @endif
                </form>
                @else
                <div class="" style="margin: auto; background-color:#FFA07A; margin-top: 40vh; width: 50%; border: 3px solid green; padding: 10px; color: black; text-align:center">
                <h1 styly="color:black">Please <a href="login">Login</a> to access this feature!</h1>
               </div>
                 @endif
                </div>
            </div>
        </div>
    </body>
</html>
