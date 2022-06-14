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
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: black;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
ul {
    list-style-type:none;
}
li span {
    display:inline-block;
    width:100px;
}
</style>
    
    </head>
    <body>
    <style>
                body{
                    background-image:url(images/profile.jpg);
                    background-attachment: fixed;
                    background-size: 100% 100%;
                }
     </style>
         
           @foreach($userdata as $data)
            <div class="card">
            <img src="/w3images/team2.jpg" alt="{{$data->name}}" style="width:100%">
            <h2>{{$data->name}}</h2>
            <span ><b>Age:</b> </span><a>{{$data->age}}</a> <br><br>
            <span><b>Gender:</b> </span><a>{{$data->gender}}</a><br><br>
            <span><b>Address:</b> </span><a>{{$data->city}}</a> <br><br>
            <span><b>Email:</b></span><a>{{$data->email}}</a><br><br>
            <span><b>Phone:</b></span><a>{{$data->phone}}</a><br><br>
            <span><b>Password:</b></span><a>{{$data->password}}</a><br><br>
            <a href="/useredit"><button class="button button1"> <b>Edit</b></button></a> <br><br>
            <a href="/donate"><button><b>Back</b></button></a> 
         @endforeach 
    </body>
</html>


