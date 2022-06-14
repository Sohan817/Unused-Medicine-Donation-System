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
table, th, td {
  border: 3px solid white;
  border-collapse: collapse;
}
th, td {
  padding: 10px;
}
th {
  text-align: left;
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
    <button  class="button button3" ><a href="/donate" class="btn btn-default"
    style="color:black"><b>Back</b></a> </button> 
    <style>
                body{
                    background-image:url(images/vrn.jpg);
                    background-attachment: fixed;
                    background-size: 100% 100%;
                }
            </style>
        <h1 style=color:white><b>REGISTERED NGO/NPO</b></h1>
        
        <table border="2">
          <tr>
          <td style=color:white><b>Id</b></td>
          <td style=color:white><b>Name</b></td>
          <td style=color:white><b>Email</b></td>
          <td style=color:white><b>Address</b></td>
          <td style=color:white><b>Contact</b></td>
          <td style=color:white><b>Establised</b></td>
          <td style=color:white><b>Donate</b></td>
          </tr>
           @foreach($ngors as $ngors)
           <tr>
           <td style=color:white><b>{{$ngors['id']}}</b></td>
           <td style=color:white><b>{{$ngors['name']}}</b></td>
           <td style=color:#6495ED><b>{{$ngors['email']}}</b></td>
           <td style=color:white><b>{{$ngors['address']}}</b></td>
           <td style=color:white><b>{{$ngors['mobile']}}</b></td>
           <td style=color:white><b>{{$ngors['establish']}}</b></td>
           <td> <a href="/donatem"><button class="button button1" type="submit"> <b>DONATE</b></button></a></td>
           </tr>
           @endforeach
        </table>
        
    </body>
</html>

