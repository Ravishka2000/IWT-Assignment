<?php
    $Fname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $phonenumber = $_POST['phonenumber'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $cname = $_POST['cname'];
    $ccnum = $_POST['ccnum'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];

    //Database connection
	$conn = new mysqli('localhost','root','','stt');
    if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(fname, email, address, city, phonenumber, state, zip, cname, ccnum, expmonth, expyear, cvv)
		   values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssisisisii", $fname, $email, $address, $city, $phonenumber, $state, $zip, $cname, $ccnum, $expmonth, $expyear, $cvv);
		$stmt->execute();
		echo "Checkout Successfull";
		$stmt->close();
		$conn->close();
	}

?>