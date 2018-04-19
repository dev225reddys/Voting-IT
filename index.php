<!DOCTYPE html>
<html>
<head>
  <!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->
  <link rel="stylesheet" href="bootstrap/4.0.0/bootstrap.min.css">
  <script src="bootstrap/4.0.0/jquery-3.2.1.slim.min.js"></script>
  <script src="bootstrap/4.0.0/popper.js/popper.min.js"></script>
  <script src="bootstrap/4.0.0/bootstrap.min.js"></script>

  <title>Login Page for Voter</title>
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Presidecny Elections</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="admin/index.php">Admin</a></li>

    </ul>
  </div>
</nav>
<center>
  <div class="container">
      <div class="col-lg-5 col-offset-6 centered">

     <form class="form-signin" action="login.php" method="post">
       <br>
       <br>

       <h4 class="form-signin-heading">Please sign in to VOTE</h4>
       <?php if(isset($_GET['w'])){
         if($_GET['w']=='wrong'){
           echo '<div class="alert alert-danger">
  <strong>Wrong Username or Password!</strong> Please Input correct ones.
</div>';
         }
       }
       ?>
       <br>

       <label for="username" class="sr-only">Username</label>
       <input type="text" id="username" class="form-control" placeholder="Username" name="unm" required autofocus>
       <label for="inputPassword" class="sr-only">Password</label>
       <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="psw" required>
       <div class="checkbox">
         <label>
           <input type="checkbox" value="remember-me"> Remember me
         </label>
       </div>
       <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
     </form>
</div>
   </div> <!-- /container -->
</center>
</body>
</html>

</body>
