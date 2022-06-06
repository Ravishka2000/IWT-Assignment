<?php

     include_once'configfeedback.php';
?>

<?php
      $fid= $_GET["id"];
      $firstnm= $_GET["fname"];
	  $lastnm= $_GET["lname"];
	  $description= $_GET["dec"];
	 
	  
	  
	  
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/formstyles.css">
        <title>feedback</title>
    </head>
    <body>
      <button><a href="reviews.php ?">Reviews</a></button>
	  <div>
      <form action="updatefeedback.php" method="GET" name="form2">

	<div class="table">
	 <table border="1" width="25%">
	 
	            <tr>
					<td>Feedback ID</td>
					<td><input type="text" value="<?php echo "$fid" ?> " name="field0" readonly></td>
				</tr>
			
	           <tr>
					<td>First Name</td>
					<td><input type="text" value="<?php echo "$firstnm" ?>" name="field1" ></td>
				</tr>
			
				<tr>
					<td>Last_Name</td>
					<td><input type="text" value="<?php echo "$lastnm" ?>" name="field2" ></td>
				</tr>
				
				<tr>
					<td>Comment</td>
					<td><input type="text" value="<?php echo "$description" ?>" name="field3" ></td>
				</tr>

		    <br/>
		      <td><input type="submit" name="update" value="Update"></td>
			</tr>
			
			</table>
			</form> 
        </div>
		</div>
    </body>

</html>
