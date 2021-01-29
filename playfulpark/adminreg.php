<!DOCTYPE html>
<html lang="en">
<head>
	<title>Playful Park - Signup</title>
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
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `admin` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='index.php'>Login</a></div>";
        }
    }else{
?>
require('db.php');
  <nav class="navbar navbarbg navbar-fixed-top">
    <div class="container">
      <div class="inner">
        <h2 class="masthead-brand"><span class="p">P</span><span class="l">L</span><span class="a">A</span><span class="y">Y</span><span class="f">F</span><span class="u">U</span><span class="ll">L</span> <span class="pp">P</span><span class="aa">A</span><span class="r">R</span><span class="k">K</span></h2>
        <nav>
          <ul class="nav masthead-nav">
            <li><a href="registration.php"><span class="p">H</span>ome</a></li>
            <li><a href="registration.php"><span class="a">B</span>ooking</a></li>
            <li><a href="registration.php"><span class="f">G</span>allery</a></li>
            <li  class="active"><a href="index.php"><span class="ll">L</span>ogin</a></li>
            <li><a href="registration.php"><span class="k">C</span>ontact</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </nav>

     <div class="site-wrapper">

      <div class="site-wrapper-inner">

      <div class="container inner cover">
          <div class="inner cover">
            <h1 class="cover-heading"><u>Sign Up</u></h1>
          </div><br>
           <form name="registration" action="" method="post" class="form" id="submit-form">  
            <div class="row form-group">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <label for="validationServer01"><i class="fas fa-key"></i> Name</label>
                <input type="text" class="form-control is-valid" id="validationServer01" name="username" placeholder="Username" required>
              </div>
              <div class="col-md-3"></div>
            </div>
            <div class="row form-group">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <label for="validationServer01"><i class="fas fa-envelope"></i> Username / EmailId </label>
                  <input type="email" class="form-control is-valid" id="validationServer01" name="email" placeholder="Enter your emailid" required>
                </div>
                <div class="col-md-3"></div>

              </div>
              <div class="row form-group">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <label for="validationServer01"><i class="fas fa-key"></i> Password</label>
                  <input type="password" class="form-control is-valid" id="validationServer01" name="password" placeholder="Password"required>
                </div>
                <div class="col-md-3"></div>
              </div>
              <input type="submit" class="btn btn-lg btn-default" name="signup" value="Sign Up">
            </form>
        </div>
      </div>
    </div>
<?php } ?>
</body>
</html>

