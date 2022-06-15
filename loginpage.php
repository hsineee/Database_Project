<?php
   session_start();
   session_unset();
   session_destroy();
?>
 
<!DOCTYPE html>
   <html class="no-js">
 
   <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Minimal and Clean Sign up / Login and Forgot Form by FreeHTML5.co</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
   <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
   <meta name="author" content="FreeHTML5.co" />
   <meta property="og:title" content=""/>
   <meta property="og:image" content=""/>
   <meta property="og:url" content=""/>
   <meta property="og:site_name" content=""/>
   <meta property="og:description" content=""/>
   <meta name="twitter:title" content="" />
   <meta name="twitter:image" content="" />
   <meta name="twitter:url" content="" />
   <meta name="twitter:card" content="" />
   <link rel="shortcut icon" href="favicon.ico">
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>   
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet" href="css/style.css">
   <script src="js/modernizr-2.6.2.min.js"></script>
   </head>
 
   <body>
       <div class="container">
           <div class="row">
               <div class="col-md-4 col-md-offset-4">
                   <form action="login.php" method="post" class="fh5co-form animate-box" data-animate-effect="fadeIn">
                       <h2>Sign In</h2>
                       <div class="form-group">
                           <label for="Account" class="sr-only">Account</label>
                           <input type="text" class="form-control" id="Account" name="Account" placeholder="Account" autocomplete="off">
                       </div>
                       <div class="form-group">
                           <label for="password" class="sr-only">Password</label>
                           <input type="password" class="form-control" id="password" name="Password" placeholder="Password" autocomplete="off">
                       </div>
                       <div class="form-group">
                           <p>Not registered? <a href="registerpage.php">Sign Up</a> </p>
                       </div>
                       <div class="form-group">
                           <input type="submit" value="Sign In" class="btn btn-primary">
                       </div>
                   </form>
               </div>
           </div>
           <div class="row" style="padding-top: 60px; clear: both;">
               <div class="col-md-12 text-center"><p><small>&copy; All Rights Reserved. Designed by <a href="https://freehtml5.co">FreeHTML5.co</a></small></p></div>
           </div>
       </div>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.placeholder.min.js"></script>
   <script src="js/jquery.waypoints.min.js"></script>
   <script src="js/main.js"></script>
   </body>
  
</html>
