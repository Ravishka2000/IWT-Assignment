<?php

     include_once'configreturns.php';
?>

<?php
      $orderID= $_POST["name"];
	  $emailadd= $_POST["email"];
	  $number= $_POST["num"];
	  $reason= $_POST["comment"];
	  
	  $sql="insert into returns(Order_ID,Email,Contact_no,Frustrations)values('$orderID','$emailadd','$number','$reason')";
	  
	  
	  if(mysqli_query($conn,$sql))
		{
		echo "<script>alert('Record insert Successfully')</script>";
		header("location:return.php");
		}
		else
		{
		echo "<script>alert('Error')</script>";
		header("location:return.php");
		}

      mysqli_close($conn);
	  
?>
