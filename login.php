<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/socialmedia/resource/php/class/core/init.php';

 ?>

 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css"  href="resource/css/login.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">

     <title>Happy Meet - Log In or Sign Up</title>
     <link rel="shortcut icon" href="resource/img/favicon.ico" type="image/x-icon">
     <link rel="icon" href="resource/img/favicon.ico" type="image/x-icon">

   </head>
   <body>
     <header class="bg">
       <div class="container">
         <div class="row">
           <div class="jumbotron jumbo bg-transparent col-md-6 pt-5 d-md-block p-1 my-5">
             <img class="peng pt-2" src="https://cdn.pixabay.com/photo/2013/07/13/12/31/penguin-159784_1280.png" alt="">
               <h1 class="pt-0 pb-1">Happy Meet</h1>
               <h4 class="pb-3 font-weight-normal">happily meet your family, friends, and loved ones online.</h4>
               <button class="btn btn-outline-dark btn-icon-text bg-dark text-light">
                 <i class="fa fa-apple btn-icon-prepend mdi-36px"></i>
                 <span class="d-inline-block text-left">
                   <small class="font-weight-light d-block">Available on the</small>App Store
                 </span>
               </button>
               <button class="btn btn-outline-dark bg-dark text-light btn-icon-text">
                 <i class="fa fa-android btn-icon-prepend mdi-36px"></i>
                 <span class="d-inline-block text-left">
                   <small class="font-weight-light d-block">Get it on the</small>Google Play
                 </span>
               </button>
           </div>
           <div class="col-md-1">

           </div>
           <div class="col-md-5 offset-md-3 mt-2 d-md-block m-0">
             <div class="card my-3">

               <form class="card-body cardbody-color p-lg-5 shadow-lg" action="" method="post">

                 <div class="text-center">
                   <img src="https://cdn.pixabay.com/photo/2016/03/31/19/57/avatar-1295404_1280.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                   width="200px" alt="profile">
                 </div>
                 <?php logd();?>
                 <div class="mb-3">
                   <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                   placeholder="User Name" name="username" required>
                 </div>
                 <div class="mb-3">
                   <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                 </div>
                 <div class="text-center">
                   <input type =hidden name="token" value="<?php echo Token::generate(); ?>">
                   <input  type="submit"  class="btn btn-color text-light px-5 mb-5 w-100 text-light fw-bold" value="Login"/>
                 <div>
                 <div id="emailHelp" class="form-text text-center mt-5 mb-2 text-dark">Not Registered?</div>
                 <div class="">
                   <a href="register.php" target="_blank" class="btn btn-color text-light px-5 mb-5 w-100 text-light fw-bold"> Create an Account</a>
                 </div>
               </form>

        <script src="vendor/js/jquery.js"></script>
        <script src="vendor/js/popper.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
    </body>
    </html>
