
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
                    background-image:url(images/adminsp.jpg);
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
</style>
    </head>
    <body>
             <ul class="menu-area-main">
               <li><a href="/cont"><b><h3 style="color:#1c00b5">Contact Requests</h3></b></a> </li>
               <li><a href="/mu"><b><h3 style="color:#1c00b5">Manage Users</h3></b></a> </li>
               <li> <a href="/mnp"><b> <h3 style="color:#1c00b5">Manage NGOs/NPOs</h3></b> </a> </li> 
               <li> <a href="/apd"><b> <h3 style="color:#1c00b5">Donations</h3></b> </a> </li>
               <li> <a href="/apr"><b> <h3 style="color:#1c00b5">Requests</h3></b> </a> </li>
               <li> <a href="/feedb"><b> <h3 style="color:#1c00b5">Feedbacks</h3></b> </a> </li> 
               <li><a href="/admin"><b><h3 style="color:#1c00b5">Logout</h3></b></a> </li>
               </ul>    
                   
    </body>
</html>

