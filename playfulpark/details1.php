<?php
include 'booknow.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Playful Park - Home</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="shortcut icon" type="image/x-icon" href="imgs/pp.png" /> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="style.css" rel='stylesheet' type='text/css'/>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 2px solid #dddddd;
    text-align: left;
    padding: 5px;
}

</style>
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
      <div class="inner cover">
       <h1 class="cover-heading">Your Booking Details !!</h1><br>
       
            </div>
<?php
$conn =  mysqli_connect('localhost','root','','park')or die("Not connected");
$Email = $_POST['Email'];
$sql_e = "SELECT * FROM park.booking WHERE Email='$Email'";
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
</div>
</div>
</div>
</body>
</html>