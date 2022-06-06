<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/formstyles.css">
        <title></title>
    </head>
    <body>  
		
    <!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/formstyles.css">
        <title></title>
    </head>
    <body>
      <button>Reviews</button>
	  
	  <br/><br/><br/>
	
      <div class="feedback tbl"> 
        <table border="1" width="100%">	
        <tr>
        
        
        <th>Feedback ID</th>	
        <th>First Name</th>	
        <th>Last Name</th>	
        <th>Comment</th>		
        <th>Edit</th>	
        <th>Delete</th>	
        </tr>
        
          <?php
   
        include_once'configfeedback.php';
        
        $sql="Select *from feedback";
        $result= $conn->query($sql);
        
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                

            echo"<tr><td>".$row["Feedback_ID"]."</td><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["Comment"]."</td>";
            echo"<td><a href='editfeedback.php ? id=$row[Feedback_ID]&fname=$row[First_Name]&lname=$row[Last_Name]&dec=$row[Comment]'><input type='submit' value='Edit'></a></td>";
            echo "<td><a href='deletefeedback.php ? id=$row[Feedback_ID]'><input type='submit' value='Delete'></a></td></tr>";
            }
        }
            else
            {
                echo "Empty";
            }
            echo "</table>";
             $conn->close();
        
       
           ?>
      
    
        </div>

    </body>

</html>
