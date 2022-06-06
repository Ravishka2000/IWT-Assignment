<?php

     include_once'configfeedback.php';
?>

<?php
     $Feedback_ID= $_GET['id'] ;
	 
	    $query= "delete from feedback where Feedback_ID = '$Feedback_ID'";
	
	 
	    $data = mysqli_query($conn,$query);
		
		if($data)
		{
		echo "<script>alert('Record Deleted successfully')</script>";
        header("location:reviews.php");
		}
		else
		{
		echo "<script>alert('Error in deleting record')</script>";
        header("location:reviews.php");
		}

      mysqli_close($conn);
?>
