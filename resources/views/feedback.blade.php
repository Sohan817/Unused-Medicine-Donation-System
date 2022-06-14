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
          .button2 {background-color: #DC143C;} 
          .button1 {border-radius: 16px;}
          .button2 {border-radius: 16px;}
          textarea{
               width:100%;
               border:1px solid #ccc;
               outline:none;
               padding:10px;
           }
        </style>
         <style>          
          input[type=text] {
             background: transparent;
             border: none;
             text-decoration: bold;
             border-bottom: 1px solid #000000  }
        </style>
         <style>          
          input[type=name] {
             background: transparent;
             border: none;
             border-bottom: 1px solid #000000  }
        </style>
        <style>
        textarea{
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
    <button  class="button button3" ><a href="/hom" class="btn btn-default"
    style="color:black"><b>Back</b></a> </button> 
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
                background-image:url(images/feedback.jpg);
                background-size: 100% 100%;
                background-attachment: fixed;
            }
            </style>

            <div  class="container">      
              <form class=" " action="/feed" method="post">
              {{csrf_field()}}
              <label style="color:black"for="name"><b>Name:</b></label><br>
              <input type="text"name="name"value="">
              <br><br>
              <label style="color:black"for="email"><b>Gmail:</b></label><br>
              <input type="text"name="email"value="">
              <br><br>
              <label style="color:black"for="feedback"><b> Feedback:</b></label><br><br>
              <textarea  rows="4" name="feedback"placeholder="Enter Feedbacks"></textarea>
               <br><br>
               <input type="hidden" name="_token" value="{{csrf_token()}}">
               <button class="button button1" type="submit"> <b>SEND FEEDBACK</b></button> &nbsp;&nbsp;
               <button class="button button2" type="reset" value="Reset"><b>CLEAR</b></button>
                </form>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
