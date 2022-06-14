<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Roboto:wght@400;500&display=swap" 
        rel="stylesheet">
        <!-- Styles -->
        <style>
           *{
               margin:0;
               padding:0;
           }
           body{
               background: #55ffe5;
               font-size: 14px;
               font-family: 'Roboto', sans-serif;
           }
           .container{
               width:80%;
               margin: 50px auto;
           }
           .contact-box{
               background:#fff;
               display:flex;
           }
           .contact-left{
               flex-basis:60%;
               padding:40px 60px;
           }
           .contact-right{
               flex-basis:40%;
               padding:40px;
               background:#1c00b5;
               color:#fff;
           }
           h1{
               margin-bottom:10px;
           }
           .container p{
            margin-bottom:40px;
           }
           .input-row{
               display:flex;
               justify-content:space-between;
               margin-bottom:20px;
           }
           .input-row .input-group{
               flex-basis:45%;
           }
           input{
               width:100%;
               border:none;
               border-bottom:1px solid #ccc;
               outline:none;
               padding-bottom:5px;
           }
           textarea{
               width:100%;
               border:1px solid #ccc;
               outline:none;
               padding:10px;
               box-sizing:border-box;
           }
           label{
               margin-bottom:6px;
               display:block;
              color:#1c00b5;
           }
           button{
               background:#1c00b5;
               width:100px;
               outline:none;
               border:none;
               color:#fff;
               height:35px;
               border-radius:30px;
               margin-top:20px;
               box-shadow:0px 5px 15px 0px rgba(28,0,181,0.3);
           }
           .contact-left h3{
            color:#1c00b5;
            font-weight:600;
            margin-bottom:30px;
           }
           .contact-right h3{
            font-weight:600;
            margin-bottom:30px;
           }
           tr td:first-child{
               padding-right:20px;

           }
           tr td{
               padding-top:20px;
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
    <button  class="button button3" ><a href="/hom" class="btn btn-default"
    style="color:black"><b>Back</b></a> </button> 
     <div class="container">
     <form action="/contacta"method="post">
     @csrf
         <h1>Connect With us</h1>
         <p>We would love to respond to your queries and help you succeed. <br> Feel free to get in
         touch with us.</p>
         <div class="contact-box">
      
          <div class="contact-left">
          <style>
                body{
                    background-image:url(images/contact.jpg);
                    background-attachment: fixed;
                    background-size: 100% 100%;
                }
     </style>
          <h3>Sent Your Request</h3>
        
            <div class="input-row">
                 <div class="input-group">
                   <label ><b>Name</b></label>
                   <input type="text"name="name" value=""placeholder="Enter Name">
                 </div>
                 <div class="input-group">
                   <label ><b>Phone</b></label>
                   <input type="text"name="phone" value=""placeholder="+880">
                 </div>
             </div>
             <div class="input-row">
                 <div class="input-group">
                   <label ><b>Email</b></label>
                   <input type="text"name="email" value="" placeholder="Enter Email">
                 </div>
                 <div class="input-group">
                   <label ><b>Subject</b></label>
                   <input type="text"name="subject" value=""placeholder="Type Subject">
                 </div>
             </div>
             <label><b>Message</b></label>
             <textarea  rows="5" name="message" value=""placeholder="Your Message"></textarea>
             <button type="submit">SEND</button>
          </form>
          </div>
          <div class="contact-right">
            <h3>Reach Us</h3>
            <table>
              <tr>
              <td>Email</td>
              <td>hsohan509@gmail.com</td>
              </tr>
               <tr>
               <td>Phone  </td>
               <td>+8801718010341</td>
               </tr>
             <td>Address</td>
             <td>Naogaon Sadar,Naogaon <br>
             Rajshahi,Bangladesh</td>
            </table>
          </div>
         </div>
       </div>
     </div>
     </form>
    </body>
</html>
