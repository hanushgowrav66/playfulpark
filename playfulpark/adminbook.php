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
            <li><a href="adminhome.php"><span class="p">H</span>ome</a></li>
            <li class="active"><a href="adminbook.php"><span class="a">B</span>ooking <span class="f">D</span>etails</a></li>
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
            <!-- <h3 class="cover-heading"><u>Ticket  Rate</u>: <?php echo $price; ?></h3> -->
            <form class="form" method="post" id="submit-form" action="changeprice.php" >
              <div class="col-md-6">
              <h3 class="cover-heading"><u>Ticket  Rate</u>: <?php echo $price; ?></h3>
            </div>
              <div class="col-md-6">
                  <label for="validationServer01"><i class="fas fa-rupee-sign"></i> Update Price</label>
                  <input type="number"class="form-control is-valid" id="newprice"  name="newprice">
              </div>
                <br><br><br><br>
              <input type="submit" class="btn btn-lg btn-default" name="submit" id="submit" value="Change Ticket Price">
            </form>

            <!-- <h3 class="cover-heading"><u>Park Timings</u>: 10:00am - 6:00pm </h3> --> 
            <hr>
            <h1 class="cover-heading"><u>Booking Details</u></h1>
            <br><br>
            <?php
$conn =  mysqli_connect('localhost','root','','park')or die("Not connected");
// $Email = $_POST['Email'];
$sql_e = "SELECT * FROM park.booking";
$res_e = mysqli_query($conn, $sql_e);
echo "<table border='1'>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Address</th>    
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Date</th>
            <th>Numberoftickets</th>
            <th>Total</th>
            <th>Name on card</th>
            <th>Card Number</th>
            <th>Exp Month</th>
            <th>Exp Year</th>       
            <th>CVV</th>
            </tr>";
while($row = mysqli_fetch_array($res_e))
{
    echo "<tr>";
    echo "<td>" . $row['Fullname'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "<td>" . $row['Address'] . "</td>";
    echo "<td>" . $row['City'] . "</td>";
    echo "<td>" . $row['State'] . "</td>";
    echo "<td>" . $row['Zip'] . "</td>";
    echo "<td>" . $row['Date'] . "</td>";
    echo "<td>" . $row['Numberoftickets'] . "</td>";
    echo "<td>" . $row['Total'] . "</td>";
    echo "<td>" . $row['Nameoncard'] . "</td>";
    echo "<td>" . $row['Cardnumber'] . "</td>";
    echo "<td>" . $row['Expmonth'] . "</td>";
    echo "<td>" . $row['Expyear'] . "</td>";
    echo "<td>" . $row['CVV'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>


          </div><br>
      </div>
    </div>
  </div>
</body>
</html>
