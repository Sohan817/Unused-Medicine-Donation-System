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
                background-color: black;
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
            .button1 {
                  border: none;
                  color: #fff;
                  padding: 10px 14px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                  background-color: #1c00b5;
                  border-radius: 16px;
                  font-size: 16px;
                  height:35px;
                  width:170px;
                  margin: 4px 2px;
                  cursor: pointer;
                  box-shadow:0px 5px 15px 0px rgba(28,0,181,0.3);
                }
                .button2{
                  border: none;
                  color: #fff;
                  padding: 10px 14px;
                  text-align: center;
                  background-color: #DC143C;
                  text-decoration: none;
                  display: inline-block;
                  border-radius: 16px;
                  font-size: 16px;
                  height:35px;
                  width:90px;
                  margin: 4px 2px;
                  cursor: pointer;
                  box-shadow:0px 5px 15px 0px rgba(28,0,181,0.3);
                }
       
        </style>
         <style>
.container {
  position: relative;
  text-align: center;
  color: white;
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

/* Top left text */
.top-left {
  position: absolute;
  top: 8px;
  right:16px;
  left: 16px;
}

/* Top right text */
.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

/* Bottom right text */
.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}

/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.center {
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.center1 {
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
    
    </head>
    <body>
    <div>
    <span>
    @foreach($events as $data)
    <div class="container">
    <img src="{{ asset('uploads/'.$data->image)}}" style="width:90%;" height="600px" alt="image">
  <div class="top-left"><h2 style=color:black><b>{{$data->ngoname}}</b></h2></div>
  <div class="centered"><h3 style=color:black><b><marquee behavior="" direction="">{{$data->eventsname}}</marquee> </b></h3></div>
  <div class="center1"><h4 style=color:black>{{$data->articles}}</h4></div>
  </div>
    @endforeach   
    </body>
</html>

