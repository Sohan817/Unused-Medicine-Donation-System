
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
                background-color:transparent;
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
          ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          }

      li {
        float: left;
        }

            li a {
             display: block;
             padding: 30px;
             background-color:;
            }
            body{
                    background-image:url(images/donate.jpg);
                    background-size: 100% 100%;
                }
        </style>
  <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.button3{
              float:center;
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
               @if (Session::get('user'))
              <ul class="menu-area-main">
              <li> <a href="/vrm"><b> <h3 style="color:black">View Requested Medicine</h3></b> </a> </li> 
               <li><a href="/vrn"><b><h3 style="color:black">View Registered NGO</h3></b></a> </li>
               <li><a href="/donatem"><b><h3 style="color:black">Donate Medicine</h3></b></a> </li>
               <li><a href="/hom"><b><h3 style="color:black">Back</h3></b></a> </li>
               <div class="dropdown">
                <a href=""> <b><h3 style="color:black"  >{{session('user')}}</h3></b></a>
                <div class="dropdown-content">
                 <a href="/profile">My Profile</a>
                 <a href="/md">My Donation</a>
                 <a href="/rm">Received</a>
                 <a href="/logout">Logout</a>
                </div>
                </div>    
               </ul>
               @else
               <button  class="button button3" ><a href="/hom" class="btn btn-default"
                style="color:white"><b>Back</b></a> </button> 
               <div class="" style="margin: auto; margin-top: 40vh; width: 50%; border: 3px solid green; padding: 10px; color: teal; text-align:center">
                <h1 styly="color:black">Please <a href="login">Login</a> to access this feature!</h1>
               </div>
              
                @endif
    </body>
</html>

