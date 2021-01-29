<?php
include 'db.php';
session_start();

if(isset($_POST['submit'])!="")
{
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
	$Email = $_POST['Email'];
	$Subject = $_POST['Subject'];
	$Rate = $_POST['Rate'];
	$Message = $_POST['Message'];


    $query = "INSERT into feedback(Firstname,Lastname,Email,Subject,Rate,Message) VALUES('$Firstname','$Lastname','$Email','$Subject','$Rate','$Message')";
	$sql = mysqli_query($con,$query);
	if($sql)
	{
		echo "<script>alert('Thank you for your feedback :)'); window.location.href='home.php';</script>";
	}

	else
	{
		echo "<script>alert('Ooooppsss! Try Again.....!'); window.location.href='home.php';</script>";
	}
}
?>