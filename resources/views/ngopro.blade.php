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
                    background-image:url(images/ngoprp.jpg);
                    background-attachment: fixed;
                    background-size: 100% 100%;
                }
     </style>
         
           @foreach($ngodata as $data)
    
            <div class="card">
            <img src="/w3images/team2.jpg" alt="{{$data->name}}" style="width:100%">
            <h2>{{$data->name}}</h2>
            <span><b>Email:</b></span><a>{{$data->email}}</a><br><br>
            <span><b>Address:</b> </span><a>{{$data->address}}</a> <br><br>
            <span><b>Phone:</b></span><a>{{$data->mobile}}</a><br><br>
            <span><b>Establish:</b></span><span><b>{{$data->establish}}</b></span>
            <h4><b>Name of Members:</b></h4><h4><a href="">{{$data->ntam}}</a></h4>
            <span><b>Password:</b></span><a>{{$data->password}}</a><br>
            <p><a href="/ngoedit"><button>Edit</button>  </a></p>
            <a href="/ngoi"><button><b>Back</b></button></a> 
           @endforeach 
    </body>
</html>


