<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/socialmedia/resource/php/class/core/init.php';

$user = new User();
 ?>

 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" type="text/css"  href="resource/css/template.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">

     <title>Home</title>
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
             <li class="nav-item mr-4 active font-weight-bold">
               <a class="nav-link" href="template.php">Home</a>
             </li>
             <li class="nav-item mr-4">
               <a class="nav-link" href="updateprofile.php">Update Profile</a>
             </li>
             <li class="nav-item mr-4">
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
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-3 mt-4">
           <?php profilePic(); ?>
           <?php echo $user->data()->name; ?>
           <br><hr>
           <button class="ml-3 bg-transparent" type="button" name="button"><i class="sideic material-icons" style="font-size:36px">people</i>Friends</button>
           <br><hr>
           <button class="ml-3 bg-transparent" type="button" name="button"><i class="sideic material-icons" style="font-size:36px">groups</i>Groups</button>
           <br><hr>
           <button class="ml-3 bg-transparent" type="button" name="button"><i class="sideic material-icons" style="font-size:36px">schedule</i>Most Recent</button>
           <br><hr>
           <button class="ml-3 bg-transparent" type="button" name="button"><i class="sideic material-icons" style="font-size:36px">store</i>Marketplace</button>
           <br><hr>
           <button class="ml-3 bg-transparent" type="button" name="button"><i class="sideic material-icons" style="font-size:36px">tv</i>Watch Later</button>
           <br><hr>
           <button class="ml-3 bg-transparent" type="button" name="button"><i class="sideic material-icons" style="font-size:36px">bookmark</i>Memories</button>
           <hr>
           <h4 class="pt-5 pl-4 text-muted">Your shortcuts</h4>
           <hr>
           <button class="pl-3 bg-transparent" type="button" name="button"><i class="sideic material-icons" style="font-size:36px">person</i>Profile</button>
         </div>
         <div class="card p-3 col-md-5 mt-4 h-25">
           <div class="text-center pb-4">
             <button class="stor bg-transparent d-inline w-25 mr-5 text-muted">Stories</button>
             <button class="stor bg-transparent d-inline w-25 ml-5 text-muted">Reels</button>
           </div>
           <div class="jum col-md-12 d-inline ml-2">
             <div class="row mx-auto">
               <div class="jumbotron mr-2">

               </div>
               <div class="jumbotron mr-2">

               </div>
               <div class="jumbotron mr-2">

               </div>
               <div class="jumbotron mr-2">

               </div>
               <div class="jumbotron mr-2">

               </div>
               <div class="jumbotron mr-2">

               </div>
               <div class="jumbotron mr-2">

               </div>
               <div class="jumbotron mr-2">

               </div>

             </div>
           </div>
           <?php
           insertS();
           deleteS();
           ?>
           <form class="mt-4" action="template.php" method="get">
             <div class="row">
               <div class="col-md-9 form-group">
                 <?php profilePic(); ?>
                 <input class="d-inline stat form-control" type="text" name="items" placeholder="How are you feeling?"/>
               </div>
               <div class="col-md">
                 <input class="d-inline statsub btn btn-dark" type="submit" name="submit" value="Add status" />
               </div>
             </div>
           </form>
           <?php
           $view = new view();
           echo $user->data()->name;
           $view->viewData();
           ?>
         </div>
         <div class="col-md-3 card ml-5 mt-4 mx-auto chtbx" id="chat">
          <div class="card-header d-flex justify-content-between align-items-center p-3">
            <h5 class="mb-0">Chat</h5>
            <button type="button" class="btn btn-dark btn-sm" data-mdb-ripple-color="dark">Let's Chat
              App</button>
          </div>
          <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
            <div class="divider d-flex justify-content-center align-items-center mb-4">
              <p class="mb-0" style="color: #a2aab7;">Today</p>
            </div>
            <?php
            insertCht();
            ?>
            <div class="d-flex flex-row justify-content-start">
              <img class="rounded-circle pr-3 p-1" src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397_1280.png"
                alt="avatar 1" style="width: 45px; height: 100%;">
              <div>
                <?php
                $view = new view();
                $view->viewChat();
                ?>
              </div>
            </div>


          </div>
          <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
            <form class="mt-4" action="template.php" method="get">
              <div class="row">
                <div class="col-md-12 form-group">
                  <?php profilePic(); ?>
                  <input class="d-inline statcht form-control" type="text" name="chats" placeholder="How are you feeling?"/>
                  <input class="d-inline statsubcht btn btn-dark" type="submit" name="submit" value="Add chat" />
                </div>

              </div>
            </form>
          </div>
        </div>
       </div>
     </div>
     </div>
   </section>
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>
