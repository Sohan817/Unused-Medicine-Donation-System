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
                background-color:#1f2937;
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
          .dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
    float:right;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
        </style>
    </head>
    <body>
    <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"style="color:black">Payment</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home"><b>Bksah</b> </a>
    <a href="#about"><b>Nagad</b></a>
    <a href="#contact"><b>Roket</b></a>
    <a href="#contact"><b>Upay</b></a>
  </div>
</div>
<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script> 
    <button  class="button button3" ><a href="/vsr" class="btn btn-default"
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
              <div  class="container" style="">
               <form class=" " action="{{URL::to('/buym')}}" method="post">
               <label style="color:white"for="fullname"><strong>Full Name:</strong> </label>
               <input type="text" style="color:white" name="fullname" value="">
               <br> <br> <br>
               <label style="color:white" for="email"><strong>Email ID:</strong></label>&nbsp;&nbsp;&nbsp;
               <input type="text" style="color:white"name="email" value="">
               <br><br> <br>
               <label style="color:white" for="address"><strong>Address:</strong></label>
               <input type="text" style="color:white"name="address" placeholder="City,Division,Country" value="">
               <br><br> <br>
               <label style="color:white" for="phone"><strong>Mobile Number:</strong></label>
               <input type="integer" style="color:white"name="phone" placeholder="+880"value="">
               <br><br> <br>
               <label style="color:white" for="brandname"><strong>Brand Name:</strong></label>&nbsp;&nbsp;&nbsp;
               <input type="text" style="color:white"name="brandname" value="{{$seller['brandname']}}">
               <br> <br> <br>
               <label style="color:white" for="genericname"><strong>Generic Name:</strong></label>
               <input type="text" style="color:white"name="genericname" value="{{$seller['genericname']}}">
               <br> <br> <br>
               <label style="color:white" for="quantity"><strong>Qunatity:</strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="integer"style="color:white" name="quantity" value="{{$seller['quantity']}}">
               <br> <br> <br>
               <label style="color:white" for="medicinetype"><strong>Medicine Type:</strong></label>&nbsp;&nbsp;
               <input type="text"style="color:white" name="medicinetype" value="{{$seller['medicinetype']}}">
               <br> <br> <br>
               <label style="color:white" for="sellername"><strong>Seller Name:</strong></label>
               <input type="text"style="color:white" name="sellername" value="{{$seller['fullname']}}">
               <br><br> <br>
               <label style="color:white" for="selleraddress"><strong>Seller Address:</strong></label>
               <input type="text"style="color:white" name="selleraddress" value="{{$seller['address']}}">
               <br><br> <br>
               <label style="color:white" for="semail"><strong>Seller Email:</strong></label>
               <input type="text"style="color:white" name="semail" value="{{$seller['email']}}">
               <br><br> <br>
               <input type="hidden" name="_token" value="{{csrf_token()}}">
               <button class="button button1" type="submit"> <b>BUY</b></button> &nbsp;&nbsp;
               <button class="button button2" type="reset" value="Reset"><b>Cancel</b></button>
               </form>
            </div>
            </div>
        </div>
    </body>
</html>
