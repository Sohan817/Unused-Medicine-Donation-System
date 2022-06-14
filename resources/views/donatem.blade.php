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
    <button  class="button button3" ><a href="/donate" class="btn btn-default"
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
                background-image:url(images/about1.jpg);
                background-size: 100% 100%;
                background-attachment: fixed;
            }
            </style>
             <style>          
                input[type=text] {
                background: transparent;
                border: none;
                border-bottom: 1px solid #000000  }
            </style>
             <style>          
                input[type=integer] {
                background: transparent;
                border: none;
                border-bottom: 1px solid #000000  }
            </style>
            
            <div  class="container">
              <form class=" " action="{{URL::to('/don')}}" method="post">
              <label style="color:black"for="name"><strong>Full Name:</strong> </label>
               <input type="text" name="name" value="">
               <br> <br>
               <label style="color:black" for="email"><strong>Email ID:</strong></label>&nbsp;&nbsp;&nbsp;
               <input type="text" name="email" value="">
               <br><br>
               <label style="color:black" for="address"><strong>Address:</strong></label>
               <input type="text" name="address" placeholder="City,Division,Country" value="">
               <br><br>
               <label style="color:black" for="brandname"><strong>Brand Name:</strong></label>&nbsp;&nbsp;&nbsp;
               <input type="text" name="brandname" value=" ">
               <br> <br>
               <label style="color:black" for="genericname"><strong>Generic Name:</strong></label>
               <input type="text" name="genericname" value="">
               <br> <br>
               <label style="color:black" for="quantity"><strong>Quantity:</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="integer" name="quantity" value="">
               <br> <br>
               <label style="color:black" for="expirydate"><strong>Expiry Date:</strong></label>
               <input type="text" name="expirydate" value="">
               <br> <br>
               <label style="color:black" for="phone"><strong>Mobile Number:</strong></label>
               <input type="integer" name="phone" value=""placeholder="+880">
               <br><br>
               <label style="color:black" for="medicinetype"><strong>Medicine Type:</strong></label>&nbsp;&nbsp;
               <input type="text" name="medicinetype" value="">
               <br> <br>
               <label style="color:black" for="donationtype"><strong>Donation Type: </label><br>
               <input type="radio" name="donationtype" id="optionsRadios1" value="NGO" checked="">
               <label style="color:black" >NGO</label>
               <input type="radio" name="donationtype" id="optionsRadios2" value="individual" checked="">
               <label style="color:black">Individual</label>
               <br>  <br>
               <label style="color:black" for="receiversname"><strong>Receiver's/NGO's Name:</strong></label>
               <input type="text" name="receiversname" value="">
               <br><br>
               <label style="color:black" for="receiversad"><strong>Receiver's Address:</strong></label>
               <input type="text" name="receiversad" value="">
               <br><br>
               <label style="color:black" for="receiversmail"><strong>Receiver's Mail:</strong></label>
               <input type="text" name="receiversmail" value="">
               <br><br>
               <input type="hidden" name="_token" value="{{csrf_token()}}">
               <button class="button button1" type="submit"> <b>Donate</b></button> &nbsp;&nbsp;
               <button class="button button2" type="reset" value="Reset"><b>Cancel</b></button>
               @if(Session::get('status4'))
               <div class="alert alert-danger" role="alert" style="text-align:center;color:#228B22">
               {{Session::get('status4')}}
              </div>
              @endif
               </form>
              
            </div>
            </div>
        </div>
    </body>
</html>
