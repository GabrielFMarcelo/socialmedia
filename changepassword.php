<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/socialmedia/resource/php/class/core/init.php';
isLogin();
$view = new view;
$user = new user();
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
   <link href="vendor/css/all.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css"  href="resource/css/cpass.css">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">

   <title>Change Password</title>
   <link rel="shortcut icon" href="resource/img/favicon.ico" type="image/x-icon">
   <link rel="icon" href="resource/img/favicon.ico" type="image/x-icon">

 </head>
 <body>
   <header class="bg">
     <img class="logo" src="https://cdn.pixabay.com/photo/2013/07/13/12/31/penguin-159784_1280.png" alt="">
     <h2 class=" p-3">Happy Meet</h2>
     <nav class="p-3 navbar navbar-expand-lg bg-transparent">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav mx-auto pr-5">
           <li class="nav-item mr-4">
             <a class="nav-link" href="template.php">Home</a>
           </li>
           <li class="nav-item mr-4 active">
             <a class="nav-link" href="updateprofile.php">Update Profile</a>
           </li>
           <li class="nav-item mr-4 font-weight-bold">
             <a class="nav-link" href="changepassword.php">Change Password</a>
           </li>
           <li class="nav-item mr-4">
             <a class="nav-link" href="logout.php">Log Out</a>
           </li>
         </ul>
       </div>
     </nav>
   </header>
   <section>

         <div class="container mt-5 puff-in-center">
             <div class="row">
               <img class="gif mx-auto mt-5 mb-3" src="https://www.animatedimages.org/data/media/218/animated-penguin-image-0189.gif" alt="">
                 <div class="col-md-12">
                   <?php changeP(); ?>
                     <h1 class="text-center mb-4">Change Password</h1>
                 </div>
            </div>
            <form action="" method="post">
                <table class="table ">
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-md-4">
                                 <label for = "password_current"> Enter Current Password:</label>
                                 <input type="password" class="form-control" name="password_current" id="password" value ="" autocomplete="off"required/>
                                </div>
                                <div class="form-group col-md-4">
                                 <label for = "password"> Enter New Password:</label>
                                 <input type="password" class="form-control" name="password" id="password" value ="" autocomplete="off"required/>
                                </div>
                                <div class="form-group col-md-4">
                                 <label for = "ConfirmPassword"> Confirm New Password:</label>
                                 <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" value ="" autocomplete="off"required/>
                                </div>
                             </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-md-7">
                                    <label  >&nbsp;</label>
                                <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                                 <input type="submit" value="Change password" class=" form-control btn btn-dark" />
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
             </form>
         </div>
       </section>
 <footer class="bg py-4 text-dark-50 slide-in-right">
   <div class="container text-center">
       <div class="row">
           <div class="col col-md-5 text-left">
               <small>Copyright &copy;Centro Escolar University-BSIT1-A     Group 3 2023</small>
           </div>
           <div class="col text-right">
               <small>Created by: Gabriel Marcelo, Heidel Berg Valerio, Bea Patrice Cortez, Jairo Garcia, Diane Hipolito, Adriel Motas</small>
           </div>
       </div>
   </div>
 </footer>
     <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     <script src="vendor/js/bootstrap-select.min.js"></script>
   </body>
 </html>
