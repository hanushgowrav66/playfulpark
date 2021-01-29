<?php
include 'db.php';
session_start();


if(isset($_POST['submit'])!="")
            {

            $sql = "SELECT price FROM ticketprice";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
              while($row = $result->fetch_assoc()) 
                {
                   $price=$row["price"];
                }
            }
            echo "<br>";
			$newprice = $_POST['newprice'];
            
            $sql1="UPDATE ticketprice SET `price` = $newprice where `price`=$price";
            if(!($con->query($sql1) === TRUE))
              {
                die('Could not update data: ' . mysql_error());
              }
              // echo "Updated data successfully\n";
              echo "<center><div class='form'>
<h3>Updated data successfully!</h3>
<br/>Click here <a href='adminbook.php'>Admin</a></div><center>";
            }




// $_SESSION['email']=$Email;

?>