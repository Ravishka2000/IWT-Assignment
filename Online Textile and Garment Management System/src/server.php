<?php

session_start();

include ('config.php');

if(isset($_POST['submit'])){



   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $contact = $_POST['phone'];
   $password_1 = $_POST['password_1'];
   $password_2= $_POST['password_2'];


   //if passwords don't match
   if($password_1 !== $password_2){
      $error = "The confirmation password  does not match!";
     
   }
   else{
      $password_1 = md5($password_1);
   

   $sql = "INSERT INTO registered_customer (firstName, lastName, email, phoneNo, password) VALUES ('$firstname','$lastname','$email','$contact','$password_1')";

   if (mysqli_query($conn, $sql)) {
   
      $message = 'Registration has been completed successfully, you may login now.';
           
   } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      
   }

   }
  

   
   

};

 
    

 
 




 


