<?php

     include_once'configfeedback.php';
?>

<?php
      $firstnm= $_POST["first_name"];
	  $lastnm= $_POST["last_name"];
	  $emailadd= $_POST["email"];
	  $aGe= $_POST["age"];
	  $description= $_POST["comments"];
	 
	  
	  $sql="insert into feedback(Feedback_ID,First_name,Last_Name,Email,Age,Comment)values('','$firstnm','$lastnm','$emailadd','$aGe','$description')";
	  
	  
	  if(mysqli_query($conn,$sql))
		{
		echo "<script>alert('Record inserted Successfully')</script>";
		}
		else
		{
		echo "<script>alert('Error')</script>";
		}

      mysqli_close($conn);
	  
?>