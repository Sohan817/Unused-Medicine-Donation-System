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
                    background-image:url(images/profile.jpg);
                    background-attachment: fixed;
                    background-size: 100% 100%;
                }
     </style>

    </head>
    <body>
    <div class="card">
    <form class=" " action="/update" method="post">
            @csrf
             @foreach($userp as $data)
              <input type="hidden"name="id"value="{{$data->id}}">
              <label style="color:black"for="name"><strong>Name*</strong> </label> <br>
               <input type="text" name="name" value="{{$data->name}}">
               <br><br>
               <label style="color:black" for="gender"><strong>Gender* </label><br>
               <input type="radio" name="gender" id="optionsRadios1" value="Male" checked="">
               <label style="color:black" >Male</label>
               <input type="radio" name="gender" id="optionsRadios2" value="Female" checked="">
               <label style="color:black">Female</label>
               <br><br>
               <label style="color:black" for="age"><strong>Age*</strong></label><br> 
               <input type="integer" name="age" value="{{$data->age}}">
               <br><br>
               <label style="color:black" for="city"><strong>City*</strong></label><br> 
               <input type="text" name="city" value="{{$data->city}}">
               <br><br>
               <label style="color:black" for="phone"><strong>Phone*</strong></label><br> 
               <input type="integer" name="phone" value="{{$data->phone}}">
               <br><br>
               <label style="color:black" for="name"><strong>Email*</strong></label> <br>
               <input type="text" name="email" value="{{$data->email}}">
               <br><br>
               <label style="color:black" for="name"><strong>Password*</strong></label> <br>
               <input type="password" name="password" value="{{$data->password}}">
               <br><br>
               <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
               <button class="button button1" type="submit"> <b>Update</b></button> <br><br>
               <a href="/profile"><b>Cancel</b></a> 
                </form>
                @endforeach
          </div>
    </body>
</html>


