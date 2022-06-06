
<?php

include_once'configfeedback.php';

?>


<?php

if(ISSET($_GET['update'])){
    
    $id= $_GET['field0'];
    $fName = $_GET['field1'];
     $lName = $_GET['field2'];
      $comment = $_GET['field3'];
       
          
   //update query
   
   $query="UPDATE feedback SET First_Name='$fName',Last_Name='$lName',Comment='$comment' WHERE Feedback_ID='$id'";

   $data = mysqli_query($conn,$query);
   
   if($data)
   {
   echo "<script>alert('Record Updated')</script>";
   header("location:reviews.php");

   }
   else
   {
   echo "<script>alert('Error in updating')</script>";
   header("location:reviews.php");
   
   }

 mysqli_close($conn);
 
}

?>