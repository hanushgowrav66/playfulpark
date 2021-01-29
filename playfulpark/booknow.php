<?php
include 'db.php';
session_start();
if(isset($_POST['submit'])!="")
{
	$FullName = $_POST['FullName'];
	$Email = $_POST['Email'];
	$Address = $_POST['Address'];
	$City = $_POST['City'];
	$State = $_POST['State'];
	$Zip = $_POST['Zip'];
	$Date = $_POST['Date'];
	$Numberoftickets = $_POST['Numberoftickets'];

	$sql = "SELECT price FROM ticketprice";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
              while($row = $result->fetch_assoc()) 
                {
                   $price=$row["price"];
                }
            }


	// $Price = 750;
	$Total = $Numberoftickets*$price;
	$Nameoncard = $_POST['Nameoncard'];
    $Cardnumber = $_POST['Cardnumber'];
    $Expmonth = $_POST['Expmonth'];
    $Expyear = $_POST['Expyear'];
    $CVV = $_POST['CVV'];

    $query = "INSERT into booking(FullName,Email,Address,City,State,Zip,Date,Numberoftickets,Total,Nameoncard,Cardnumber,Expmonth,Expyear,CVV) VALUES('$FullName', '$Email','$Address','$City','$State','$Zip','$Date','$Numberoftickets','$Total','$Nameoncard','$Cardnumber','$Expmonth','$Expyear','$CVV')";
	$sql = mysqli_query($con,$query);
	if($sql){
		echo "<script>alert('You are successfully registered!'); window.location.href='details.php';</script>";
	}
	else{
		echo "<script>alert('Ooooppsss! Try Again.....!'); window.location.href='home.php';</script>";
	}
$_SESSION['email']=$Email;
}
?>