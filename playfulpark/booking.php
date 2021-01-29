<?php
require('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Playful Park- Booking</title>
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
            <li class="active"><a href="booking.php"><span class="a">B</span>ooking</a></li>
            <li><a href="gallery.php"><span class="f">G</span>allery</a></li>
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
            <!-- <h3 class="cover-heading"><u>Ticket  Rate</u>: Rs.750/- </h3> -->
            <?php 
            $sql = "SELECT price FROM ticketprice";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
              while($row = $result->fetch_assoc()) 
                {
                   $price=$row["price"];
                }
            }
            ?>
            <h3 class="cover-heading"><u>Ticket  Rate</u>: <?php echo $price; ?></h3>

            <h3 class="cover-heading"><u>Park Timings</u>: 10:00am - 6:00pm </h3>
            <hr>
            <h1 class="cover-heading"><u>Booking</u></h1>
          </div><br>
          
          <form class="form" method="post" id="submit-form" action="booknow.php" >
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="validationServer01"><i class="fas fa-user"></i> Full Name</label>
                  <input type="text" class="form-control is-valid" id="myInput" name="FullName" required>
                </div>
                <div class="col-md-6">
                  <label for="validationServer01"><i class="fas fa-envelope"></i> Email</label>
                  <input type="email" class="form-control is-valid" id="validationServer01" name="Email" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="validationServer01"><i class="fas fa-address-card"></i> Address</label>
                  <input type="text" class="form-control is-valid" id="myInput" name="Address" required>
                </div>
                <div class="col-md-6">
                  <label for="validationServer01"><i class="fas fa-map-marker-alt"></i> City</label>
                  <input type="text" class="form-control is-valid" id="validationServer01" name="City" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="validationServer01"><i class="fas fa-flag"></i> State</label>
                  <input type="text" class="form-control is-valid" id="myInput" name="State" required>
                </div>
                <div class="col-md-6">
                  <label for="validationServer01"><i class="fas fa-map-pin"></i> ZipCode</label>
                  <input type="number" min="0" class="form-control is-valid" id="validationServer01" name="Zip" required>
                </div>
              </div>
                <div class="row form-group">
                <div class="col-md-3 mb-3 mb-md-0">
                  <label for="validationServer01"><i class="fas fa-calendar-week"></i> Date</label>
                  <input type="date" class="form-control is-valid" name="Date" id="Date" required>
                </div>
                <div class="col-md-3">
                  <label for="validationServer01"><i class="fas fa-male"></i> Number Of Tickets</label>
                  <input type="number" class="form-control is-valid" min="1" max="20" oninput= "MyFunction(this.value)" name="Numberoftickets" required>
                </div>
                <div class="col-md-3">
                  <label for="validationServer01"><i class="fas fa-rupee-sign"></i> Cost</label>
                  <!-- <input type="number"class="form-control is-valid" id="price" readonly="readonly" value="750" name="Price"> -->
                  <?php
                  $q1 = "SELECT * FROM `ticketprice`";
                  $res= $con->query($q1);
                  while ($row = $res->fetch_assoc())
                    {
                       echo "<input type=\"number\" class=\"form-control is-valid\" id=\"price\" readonly=\"readonly\" value=".$row["price"]." \" name=\"Price\"> ";
                     }
                  ?>
                </div> 
                <div class="col-md-3">
                  <label for="validationServer01"><i class="fas fa-rupee-sign"></i> Total Price</label>
                  <h4 id="Cost">0.0</h4>
                </div>               
              </div>
              <script type="text/javascript">
                function MyFunction(QuantityValue)
                {
                  var CostSpan = document.getElementById("Cost");
                  var PriceVal = document.getElementById("price");
                  let price = QuantityValue * PriceVal.value;
                  CostSpan.innerHTML = price;
                }
              </script>
              <hr> 
              <div class="inner cover">
                 
            <h1 class="cover-heading"><u>Payment</u></h1>
            <h1><i class="fab fa-cc-visa"></i> <i class="fab fa-cc-paypal"></i> <i class="fab fa-google-pay"></i> <i class="fab fa-amazon-pay"></i> </h1>
          </div><br>
              <div class="row form-group">
                <div class="col-md-12">
                  <label for="validationServer01"><i class="far fa-credit-card"></i> Name on Card</label>
                  <input type="text" class="form-control is-valid" id="validationServer01" name="Nameoncard" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label for="validationServer01"><i class="far fa-credit-card"></i>  Card Number</label>
                  <input type="text" class="form-control is-valid" id="validationServer01" placeholder="1111-2222-3333-4444" name="Cardnumber" maxlength="16" minlength="16" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-4 mb-3 mb-md-0">
                  <label for="validationServer01"><i class="fas fa-calendar-week"></i> Exp Month</label>
                  <input type="number" min="01" max="12" class="form-control is-valid" id="myInput" name="Expmonth" required>
                </div>
                <div class="col-md-4">
                  <label for="validationServer01"><i class="fas fa-calendar-week"></i> Exp Year</label>
                  <input type="number" min="2020" max="2050" class="form-control is-valid" id="validationServer01" name="Expyear" required>
                </div>
                <div class="col-md-4">
                  <label for="validationServer01"><i class="fas fa-key"></i> CVV</label>
                  <input type="number" minlength="3" maxlength="3" class="form-control is-valid" id="validationServer01" name="CVV" required>
                </div>
              </div>
              <input type="submit" class="btn btn-lg btn-default" name="submit" value="Confirm Booking">
            </form>
            <hr>
            <h2>Click here to Cancel your Booking</h2>
            <button class="btn btn-lg btn-default" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Cancel Booking</button>
            <div id="id01" class="modal">
              <form class="modal-content animate" action="cancel.php" method="POST">
                <div class="container" style="background: transparent;">
                  <label for="Email"><b>Email</b></label>
                  <input type="email" style="text-decoration-color: black;" placeholder="noname@mail.com" name="Email" required>
                  <button type="submit" value="Cancel booking" class="btn btn-lg btn-default" name="canceltics">Delete Booking</button>
                </div>
              </form>
            </div>
            <hr>
            <!-- 
          <div class="mastfoot">
            <div class="inner">
              <p>Enjoy Playful Park Playfully :)</p>
            </div>
          </div> -->
      </div>
    </div>
  </div>
</body>
</html>