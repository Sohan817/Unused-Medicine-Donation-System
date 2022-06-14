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
<style>          
                input[type=integer]{
                background: transparent;
                border: none;
                border-bottom: 1px solid #000000  }
            </style>
             <style>          
                input[type=text]{
                background: transparent;
                border: none;
                border-bottom: 1px solid #000000  }
            </style>
             <style>          
                input[type=password]{
                background: transparent;
                border: none;
                border-bottom: 1px solid #000000  }
            </style>
<style>
                body{
                    background-image:url(images/ngoprp.jpg);
                    background-attachment: fixed;
                    background-size: 100% 100%;
                }
     </style>

    </head>
    <body>
    <div class="card">
    <form class=" " action="/ngoupdate" method="post">
            @csrf
              @foreach($ngoe as $data)
              <input type="hidden"name="id"value="{{$data->id}}">
              <label style="color:black"for="name"><strong>Name:</strong> </label> <br>
               <input type="text" name="name" value="{{$data->name}}">
               <br><br>
               <label style="color:black" for="address"><strong>Address:</strong></label><br> 
               <input type="integer" name="address" value="{{ $data->address}}">
               <br><br>
               <label style="color:black" for="mobile"><strong>Mobile:</strong></label> <br>
               <input type="text" name="mobile" value="{{ $data->mobile}}">
               <br><br>
               <label style="color:black" for="establish"><strong>Established:</strong></label> <br>
               <input type="text" name="establish" value="{{ $data->establish}}">
               <br><br>
               <label style="color:black" for="ntam"><strong>Name Of The Members::</strong></label> <br>
               <input type="text" name="ntam" value="{{ $data->ntam}}">
               <br><br>
               <label style="color:black" for="email"><strong>Email:</strong></label><br> 
               <input type="integer" name="email" value="{{ $data->email}}">
               <br><br>
               <label style="color:black" for="password"><strong>Password:</strong></label><br> 
               <input type="password" name="password" value="{{ $data->password}}">
               <br><br>
               <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
               <button class="button button1" type="submit"> <b>Update</b></button> <br><br>
              <a href="/ngopro"><b>  <button>Cancel</button></b></a> 
                </form>
                @endforeach
          </div>
    </body>
</html>


