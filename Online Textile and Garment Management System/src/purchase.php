<?php

    include_once'Rconfig.php';

?>

<?php

    $name = $_POST["holderName"];
    $email = $_POST["email"];
    $date = date('Y-m-d H:i:s');

    $sql = "insert into purchase(Customer_no,Customer_name,Email,Date)values('','$name','$email','$date')";

    if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record insert Successfully')</script>";
	}
	else
	{
		echo "<script>alert('Error')</script>";
	}
	
	mysqli_close($conn);

?>