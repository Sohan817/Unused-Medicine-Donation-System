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
    <button  class="button button3" ><a href="/buysell" class="btn btn-default"
    style="color:black"><b>Back</b></a> </button> 
    <style>
                body{
                    background-image:url(images/vrm.jpg);
                    background-attachment: fixed;
                    background-size: 100% 100%;
                }
            </style>
        <h1 style=color:black><b>SELL REQUESTS LIST</b></h1>
        <table border="2">
          <tr>
          <td style=color:black><b>Id</b></td>
          <td style=color:black><b>Name</b></td>
          <td style=color:black><b>Address</b></td>
          <td style=color:black><b>Brand Name</b></td>
          <td style=color:black><b>Generic Name</b></td>
          <td style=color:black><b>Quantity</b></td>
          <td style=color:black><b>Price</b></td>
          <td style=color:black><b>Medicine Type</b></td>
          <td style=color:black><b>Email</b></td>
          <td style=color:black><b>Phone</b></td>
          <td style=color:black><b>Buy</b></td>
          </tr>
           @foreach($seller as $seller)
           <tr>
           <td style=color:black>{{$seller['id']}}</td>
           <td style=color:black>{{$seller['fullname']}}</td>
           <td style=color:black>{{$seller['address']}}</td>
           <td style=color:black>{{$seller['brandname']}}</td>
           <td style=color:black>{{$seller['genericname']}}</td>
           <td style=color:black>{{$seller['quantity']}}</td>
           <td style=color:black>{{$seller['price']}}</td>
           <td style=color:black>{{$seller['medicinetype']}}</td>
           <td style=color:black>{{$seller['email']}}</td>
           <td style=color:black>{{$seller['phone']}}</td>
           <td> <button class="button button1" type="submit"> 
               <a href="{{ route('buy', $seller['id']) }}">
                   <b>BUY</b>
                </a>
            </button>
        </td>
           </tr>
           @endforeach
        </table>
        
    </body>
</html>

