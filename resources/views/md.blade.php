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
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>

    
    </head>
    <body>
    <style>
                body{
                    background-image:url(images/md.jpg);
                    background-attachment: fixed;
                    background-size: 100% 100%;
                }
            </style>
        <h1 style=color:black><b>MY DONATION</b></h1>
        <table >
          <tr>
          <td style=color:black><b>Receiver's Name</b></td>
          <td style=color:black><b>Receiver's Address</b></td>
          <td style=color:black><b>Receiver's Mail</b></td>    
          <td style=color:black><b>Brand Name</b></td>
          <td style=color:black><b>Generic Name</b></td>
          <td style=color:black><b>Quantity</b></td>
          <td style=color:black><b>Donation Type</b></td>
          </tr>
          @foreach($userdonate as $data)
           <tr>
           <td style=color:black><b>{{$data->receiversname}}</b></td>
           <td style=color:black><b>{{$data->receiversad}}</b></td>
           <td style=color:black><b>{{$data->receiversmail}}</b></td>
           <td style=color:black><b>{{$data->brandname}}</b></td>
           <td style=color:black><b>{{$data->genericname}}</b></td>
           <td style=color:black><b>{{$data->quantity}}</b></td>
           <td style=color:black><b>{{$data->donationtype}}</b></td>
           </tr>
           @endforeach
        </table>
        
    </body>
</html>

