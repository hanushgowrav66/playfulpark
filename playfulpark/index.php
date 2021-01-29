<!DOCTYPE html>
<html lang="en">
<head>
	<title>Playful Park - Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="shortcut icon" type="image/x-icon" href="imgs/pp.png" />	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="style.css" rel='stylesheet' type='text/css'/>
  <script src="https://kit.fontawesome.com/cd91169417.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php
require('db.php');
session_start();
if (isset($_POST['email'])){
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE email='$email'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['email'] = $email;
     header("Location: home.php");
         }else{
 echo "<div class='form'>
<h3>Email/password is incorrect!</h3>
<br/>Click here to <a href='index.php'>Login</a></div>";
 }
    }else{
?>
  <nav class="navbar navbarbg navbar-fixed-top">
    <div class="container">
      <div class="inner">
        <h2 class="masthead-brand"><span class="p">P</span><span class="l">L</span><span class="a">A</span><span class="y">Y</span><span class="f">F</span><span class="u">U</span><span class="ll">L</span> <span class="pp">P</span><span class="aa">A</span><span class="r">R</span><span class="k">K</span></h2>
        <nav>
          <ul class="nav masthead-nav">
            <li><a href="index.php"><span class="p">H</span>ome</a></li>
            <li><a href="index.php"><span class="a">B</span>ooking</a></li>
            <li><a href="index.php"><span class="f">G</span>allery</a></li>
            <li  class="active"><a href="index.php"><span class="ll">L</span>ogin</a></li>
            <li><a href="index.php"><span class="k">C</span>ontact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </nav>

     <div class="site-wrapper">

      <div class="site-wrapper-inner">

      <div class="container inner cover">
          <div class="inner cover">
            <h1 class="cover-heading"><u>Login</u></h1>
          </div><br>

      <form action="" method="post" name="login" class="form" id="submit-form" >  
              <div class="row form-group">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <label for="validationServer01"><i class="fas fa-envelope"></i> Email </label>
                  <input type="text" class="form-control is-valid" id="validationServer01" name="email" required>
                </div>
                <div class="col-md-3"></div>

              </div>
              <div class="row form-group">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <label for="validationServer01"><i class="fas fa-key"></i> Password</label>
                  <input type="password" class="form-control is-valid" id="validationServer01" name="password" required>
                </div>
                <div class="col-md-3"></div>
              </div>
              <input type="submit" class="btn btn-lg btn-default" name="submit" value="Login">
              <br><br>
              <p class="lead">Not registered yet? <a href='registration.php' class="btn btn-lg btn-default">Register Here</a></p>
            </form>
            <a href="admin.php"><input type="submit" class="btn btn-lg btn-default" name="submit" value="Admin Login"></a>
        </div>
      </div>
    </div>
<?php } ?>
</body>
</html>
