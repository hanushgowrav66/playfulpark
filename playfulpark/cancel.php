<?php
$conn =  mysqli_connect('localhost','root','','park')or die("Not connected");
$Email = $_POST['Email'];

if (isset($_POST['canceltics']))
	{
		$sql_e = "SELECT * FROM park.booking WHERE Email='$Email'";
      	$res_e = mysqli_query($conn, $sql_e);
	    if(mysqli_num_rows($res_e) > 0)
	    {
	    	$cancelquery="insert into park.cancelbooking values('$Email',NOW())";
	    	$res1=mysqli_query($conn,$cancelquery);
	    	$savequery="delete from amusement_park.booknow where Email = '$Email'";
	    	$res=mysqli_query($conn,$savequery);
	    	echo "<script>alert('Data Removed successfully!');
	    	window.location.href='index.php';</script>";
	    }
	    else
	    {
	    	echo "<script>alert('Email id not saved, try another one!');
	    	window.location.href='home.php';</script>";	
		}
	}		
?>	