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
        </style>
         <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 4px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    
    </head>
    <body>
    <style>
                body{
                    background-image:url(images/regadmin.jpg);
                    background-attachment: fixed;
                    background-size: 100% 100%;
                }
            </style>
        <h1 style=color:black><b>ADMINS LIST</b></h1>
        <table border="2">
          <tr>
          <td style=color:black><b>ID</b></td>
          <td style=color:black><b>Name</b></td>
          <td style=color:black><b>Address</b></td>
          <td style=color:black><b>Gender</b></td>
          <td style=color:black><b>Phone</b></td>
          <td style=color:black><b>Age</b></td>
          <td style=color:black><b>Email</b></td>
          </tr>
           @foreach($admins as $admins)
           <tr>
           <td style=color:black>{{$admins['id']}}</td>
           <td style=color:black>{{$admins['name']}}</td>
           <td style=color:black>{{$admins['address']}}</td>
           <td style=color:black>{{$admins['gender']}}</td>
           <td style=color:black>{{$admins['phone']}}</td>
           <td style=color:black>{{$admins['age']}}</td>
           <td style=color:black>{{$admins['email']}}</td>
           </tr>
           @endforeach
        </table>
        
    </body>
</html>

