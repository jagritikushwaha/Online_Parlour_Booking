<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--bootstarp css-->
<link rel="stylesheet" href="../css/bootstarp.min.css">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="../css/all.min.css">

    <title>Login</title>
    <style>

body{
  background-color: rgba(27,31,34,0.85);
}

                form#register{
                margin:40px;

      }
      label{
          font-family: sans-serif;
          font-size:18px;
          margin-top:10px;

           }
           input#name{
               width:80%;
               border: 1px solid #ddd;
               border-radius: 3px;
               outline: o;
               padding: 7px;
               background-color: #fff;
               box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3);
               margin-top:10px;
           }
           input#submit{
               width:140px;
               padding:8px;
               font-size: 16px;
               font-family: sans-serif;
               font-weight: 600;
               border:none;
               border-radius: 3px;
               background-color: rgb(249, 215, 93);
               color: #fff;
               cursor:pointer;
               border:1px solid
              rgba(255,255,255,0.3);
              box-shadow: 1px 1px 5px
               rgba(0,0,0,0.3);
               margin-bottom: 20px;
               margin-left:25px;
           }
           label,span,h2{
               text-shadow: 1px 1px 5px 
               rgba(0,0,0,0.3);
           }
          p{
             text-align:center;
             
             font-size: 15px;
           }
          .login-box{ 

            background-color: rgba(238, 225, 225, 0.904);

                      border-radius:15px;
                      width:300px;
                      height:310px;
                      margin:150px auto 0px auto;
                      margin-top:30px;
                      box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3);

                      

                    }
   </style>

</head>
<body  bg-color="green">
  <div class=" mt-5 text-center " style="font-size: 30px; margin-top:60px;  color:white; text-align:center">   
    <i class="fas fa-stethoscope" ></i>
    <span >Online Parlour Booking </span>
  </div>
    <p class="text-center" style="font-size: 20px; color:white; text-align:center "> <i class="fas fa-user-secret "></i> <span>Customer
      Area(Demo)</span>
    </p>
    

    <div class="login-box">
    <div class="col-sm-6 col-md-4">

         <form method="post" action="Userlogin.php" style="margin-top:20px; margin-left: 20px; padding:30px">
           <i class="fas fa-user"></i><label for="Email">Your Email :</label>
            <br>
            <input type="email" name="rEmail"
            id="name" placeholder="Enter your Valid Email">
            <br><br>
 
            <i class="fas fa-key"></i><label for="password">Your Password :</label>
            <br>
            <input type="password" name="rPassword"
            id="name" placeholder="Enter your Valid Password">
            <br><br>
             <input type="submit" value="Login"
             name="submit" id="submit"><br>
         </form>
         <div class="btn" style="margin-top:4px; text-align:center;"><a  href="home.html"><b>Back
            to Home</b></a></div>
            <?php if(isset($msg)) {echo $msg; } ?>

          </div>
          </div>



<!-- Boostrap JavaScript -->
<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>
</body>
</html>









