<?php
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Playful Park - Gallery</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
  <link rel="shortcut icon" type="image/x-icon" href="imgs/pp.png" />  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="style.css" rel='stylesheet' type='text/css'/>
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
            <li  class="active"><a href="gallery.php"><span class="f">G</span>allery</a></li>
            <li><a href="contact.php"><span class="k">C</span>ontact</a></li>
            <li><a href="logout.php"><span class="ll">L</span>ogout</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </nav>

<div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="container inner cover">
      <div class="inner cover">
        <h1 class="cover-heading"><u>Gallery</u></h1>
      </div><br>

      <div class="row form-group">
        <div class="col-md-6 mb-3 mb-md-0 inner">
          <img src="imgs/1.jpeg" alt="it cannot be displayed" width="500" height="333">
        </div> 
        <div class="col-md-6 inner">
          <img src="imgs/2.jpg" alt="it cannot be displayed" width="500" height="333">
        </div>
      </div> 
<br>
      <div class="row form-group">
        <div class="col-md-4 mb-3 mb-md-0 inner">
          <img src="imgs/3.jpg" alt="it cannot be displayed" width="380" height="250" class="responsive">
        </div> 
        <div class="col-md-4 inner">
          <img src="imgs/9.jpg" alt="it cannot be displayed" width="380" height="250" class="responsive">
        </div>
       <div class="col-md-4 inner">
          <img src="imgs/5.jpg" alt="it cannot be displayed" width="380" height="250" class="responsive">
        </div>
      </div> 
<br>
<div class="row form-group">
        <div class="col-md-4 mb-3 mb-md-0 inner">
          <img src="imgs/10.jpg" alt="it cannot be displayed" width="380" height="250" class="responsive">
        </div> 
        <div class="col-md-4 inner">
          <img src="imgs/8.jpg" alt="it cannot be displayed" width="380" height="250" class="responsive">
        </div>
       <div class="col-md-4 inner">
          <img src="imgs/4.jpg" alt="it cannot be displayed" width="380" height="250" class="responsive">
        </div>
      </div> 
<br>

<div class="row form-group">
        <div class="col-md-6 mb-3 mb-md-0 inner">
          <img src="imgs/6.jpg" alt="it cannot be displayed" width="500" height="333">
        </div> 
        <div class="col-md-6 inner">
          <img src="imgs/7.jpg" alt="it cannot be displayed" width="500" height="333">
        </div>
  </div> 
<br>


    </div>
  </div>
</div>
</body>
</html>
