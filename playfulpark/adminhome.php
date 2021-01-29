<?php
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Playful Park - Admin Home</title>
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
            <li class="active"><a href="home.php"><span class="p">H</span>ome</a></li>
            <li><a href="adminbook.php"><span class="a">B</span>ooking <span class="f">D</span>etails</a></li>
            <!-- <li><a href="gallery.php"><span class="f">G</span>allery</a></li> -->
            <!-- <li><a href="contact.php"><span class="k">C</span>ontact</a></li> -->
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

        <h1 class="cover-heading">Welcome <span class="a">A</span><span class="y">D</span><span class="f">M</span><span class="u">I</span><span class="ll">N</span> to <span class="p">P</span><span class="l">L</span><span class="a">A</span><span class="y">Y</span><span class="f">F</span><span class="u">U</span><span class="ll">L</span> <span class="pp">P</span><span class="aa">A</span><span class="r">R</span><span class="k">K</span></h1>
      </div><br>


      <div class="row row-group">
        <div class="col-md-6 inner">
          <img src="imgs/3.jpg" alt="Nature" class="responsive" width="600" height="400">          
        </div>
        <div class="col-md-6 mb-3 mb-md-0 inner">
         <h2><span class="d5"> Amusement waterparks generally feature a few water rides, such as the log flume,</span><span class="d4">  bumper boats, & rowing boats. Such rides are usually gentler</span><span class="d3">  and shorter than roller coasters & many are suitable</span><span class="d1">  for all ages. Water rides are especially popular on hotdays. Amusement &</span><span class="d6">  Water Parks are spread across the geography of our country &</span><span class="d7"> attracts around 70million visitors pa.</span></h2>
        </div>
      </div>

      <div class="row row-group">
        <div class="col-md-6 mb-3 mb-md-0 inner">
         <h2><span class="d1">A water park is one of the most visited places when</span><span class="d2"> it comes to leisure and entertainment. Waterparks want to offer</span><span class="d3"> the most attractive, exciting, and appealingrides. Ideally, a water</span><span class="d4"> park has attractions ranging from Thrillrides to family slides to kids play</span><span class="d5"> area making it popular amongst people of all ages and walks of life.</span></h2>
        </div>
        <div class="col-md-6 inner">
          <img src="imgs/1.jpeg" alt="Nature" class="responsive" width="600" height="400">          
        </div>
      </div>

      <div class="row row-group">
        <div class="col-md-6 mb-3 mb-md-0 inner">
          <img src="imgs/2.jpg" alt="Nature" class="responsive" width="600" height="400">
        </div>
        <div class="col-md-6 inner">
          <h2><span class="d13">A water slide is a type of slide designed for warm-weather</span><span class="d14"> or indoor recreational use at water parks. Some</span><span class="d15"> slides require riders to sit directly on the slide, or on a raft or tube</span><span class="d16"> designed to be used with the slide. A lifeguard is</span><span class="d17"> usually stationed at the top and the bottomof the slide,</span><span class="d18">  so that if a rider gets hurt they will be treated immediately.</span></h2>        
        </div>
      </div>

            <div class="row row-group">
        <div class="col-md-6 inner ">
          <h2><span class="d8">A Ferris wheel is an amusement ride consisting of a rotating upright</span><span class="d9"> wheel with upright wheel with multiple passenger-carrying</span><span class="d10"> components (commonly referred to as passenger cars, cabins, tubs, capsules,</span><span class="d11"> gondolas, or pods) attached to the rim in such a way that as the</span><span class="d12"> wheel turns, they are kept upright, usually by gravity.</span></h2>        
        </div>
        <div class="col-md-6 mb-3 mb-md-0 inner">
          <img src="imgs/4.jpg" alt="Nature" class="responsive" width="600" height="400">
        </div>
      </div>
  </div>
</div>
</body>
</html>
