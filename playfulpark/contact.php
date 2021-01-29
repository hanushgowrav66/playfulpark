<?php
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Playful Park - Contact</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
  <link rel="shortcut icon" type="image/x-icon" href="imgs/pp.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="style.css" rel='stylesheet' type='text/css'/>
    <script src="https://kit.fontawesome.com/cd91169417.js" crossorigin="anonymous"></script>

</head>


<body>
  <nav class="navbar navbarbg navbar-fixed-top">
    <div class="container">
      <div class="inner">
        <h2 class="masthead-brand"><span class="p">P</span><span class="l">L</span><span class="a">A</span><span class="y">Y</span><span class="f">F</span><span class="u">U</span><span class="ll">L</span> <span class="pp">P</span><span class="aa">A</span><span class="r">R</span><span class="k">K</span></h2>
        <nav>
          <ul class="nav masthead-nav">
            <li><a href="home.php"><span class="p">H</span>ome</a></li>
            <li><a href="booking.php"><span class="a">B</span>ooking</a></li>
            <li><a href="gallery.php"><span class="f">G</span>allery</a></li>
            <li  class="active"><a href="contact.php"><span class="k">C</span>ontact</a></li>
            <li><a href="logout.php"><span class="ll">L</span>ogout</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </nav>

<div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="container inner cover">
      
      <div class="row form-group">
<!-- /  Contact  /  -->
        <div class="col-md-6 mb-3 mb-md-0">
          <div class="inner cover">
            <h1 class="cover-heading"><u>Contact Us</u></h1>
          </div><br>

          <form class="form" id="submit-form" method="post" action="conctfeed.php" >
            <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="validationServer01"><i class="fas fa-user"></i> First name</label>
                  <input type="text" class="form-control is-valid" id="myInput" name="Firstname" required>
                </div>
                <div class="col-md-6">
                  <label for="validationServer01"><i class="fas fa-user"></i> Last name</label>
                  <input type="text" class="form-control is-valid" id="validationServer01" name="Lastname" required>
                </div>
              </div>  
              <div class="row form-group">
                <div class="col-md-12">
                  <label for="validationServer01"><i class="fas fa-envelope"></i> Email</label>
                  <input type="email" class="form-control is-valid" id="validationServer01" name="Email" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label for="validationServer01"><i class="fas fa-calendar-week"></i> Subject</label>
                  <input type="text" class="form-control is-valid" id="validationServer01" name="Subject" required>
                </div>
              </div>
            
        </div>

<!-- Feedback -->
        <div class="col-md-6">
          <div class="inner cover">
            <h1 class="cover-heading"><u>Feedback</u></h1>
          </div><br>

          <form class="form" id="submit-form" method="post" action="conctfeed.php" >  
              <div class="row form-group">
                <div class="col-md-12">
                  <label for="validationServer01"><i class="fas fa-star"></i> Give Rate <i class="fas fa-smile"></i> </label>
                  <input type="number" min="1" max="5"class="form-control is-valid" id="validationServer01" name="Rate" required>
                </div>
              </div> 
              <div class="row form-group">
                <div class="col-md-12">
                  <label for="validationServer01" class="text-black" ><i class="fas fa-sticky-note"></i> Message</label>
                  <textarea name="Message" rows="5" class="form-control is-valid" id="validationServer01" required
                    placeholder="Write your feedback here..."></textarea>
                </div>
              </div>
        </div>
       </div>
       <input type="submit" class="btn btn-lg btn-default" name="submit" value="Submit">
       </form>
       </form>
      </div>
    </div>
  </div>
</body>
</html>
