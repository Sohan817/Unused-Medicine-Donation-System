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
                background-color: #F0E68C;
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
    <button  class="button button3" ><a href="/adminspage" class="btn btn-default"
    style="color:black"><b>Back</b></a> </button> 
    <style>
            </style>
        <h1 style=color:#1f2937><b>USERS LIST</b></h1>
        <table border="2">
          <tr>
          <td style=color:black><b>ID</b></td>
          <td style=color:black><b>Name</b></td>
          <td style=color:black><b>Address</b></td>
          <td style=color:black><b>Gender</b></td>
          <td style=color:black><b>Phone</b></td>
          <td style=color:black><b>Age</b></td>
          <td style=color:black><b>Email</b></td>
          <td style=color:black><b>Remove Users</b></td>
          </tr>
           @foreach($userstables as $data)
           <tr>
           <form action="/deleteu" method="post">
           @csrf 
          <input type="hidden"name="id"value="{{$data->id}}">
           <td style=color:black>{{$data->id}}</td>
           <td style=color:black>{{$data->name}}</td>
           <td style=color:black>{{$data->gender}}</td>
           <td style=color:black>{{$data->age}}</td>     
           <td style=color:black>{{$data->city}}</td>     
           <td style=color:black>{{$data->phone}}</td>
           <td style=color:black>{{$data->email}}</td>  
           <td><button type="submit"class=" button2">Remove</button></td>
           </form>
           </tr>
           @endforeach
        </table>    
    </body>
</html>

