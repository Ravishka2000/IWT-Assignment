<!DOCTYPE html>
<html>
<head>
    <br>
    <title>Checkout Form</title>
	<link rel="stylesheet" href="styles/allstyles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="logo">
    <img src ="images/logo.png" width="200px" height="105px">
</div>
<br>

<h2>Checkout Form</h2>
<p>Fill up the form with correct values.</p>
<br>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="checkout.php" method="post">
        		

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
			<form action="connect.php" method="post">
            <label for="fname"><b>Full Name</b></label>
            <input class="form-control" type="text" id="fname" name="firstname" required>
            <label for="email"><b>Email</b></label>
            <input class="form-control" type="text" id="email" name="email" required>
            <label for="adr"><b>Address</b></label>
            <input class="form-control" type="text" id="adr" name="address" required>
            <label for="city"><b>City</b></label>
            <input class="form-control" type="text" id="city" name="city" required>
			<label for="phonenumber"><b>Phone number</b></label>
            <input class="form-control" type="text" id="phonenumber" name="phonenumber" required>

            <div class="row">
              <div class="col-50">
                <label for="state"><b>State</b></label>
                <input type="text" id="state" name="state" required>
              </div>
              <div class="col-50">
                <label for="zip"><b>Zip</b></label>
                <input type="text" id="zip" name="zip" required>
              </div>
            </div>
          </div>

          <br>
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
                <div class="">
                   <a href="#"><img src="images/i-1.png" id = "sm" width = "80px" height="80px"></a>
                   <a href="#"><img src="images/i-2.jpg" id = "sm"  width = "130px" height="80px"></a>
                   <a href="#"><img src="images/i-3.jpg" id = "sm"  width = "80px" height="80px"></a>
                   <a href="#"><img src="images/i-4.jpg" id = "sm"  width = "80px" height="80px"></a>
                </div>
            <label for="cname"><b>Name on Card</b></label>
            <input type="text" id="cname" name="cardname" required>
            <label for="ccnum"><b>Credit card number</b></label>
            <input type="text" id="ccnum" name="cardnumber" required>
            <label for="expmonth"><b>Exp Month</b></label>
            <input type="text" id="expmonth" name="expmonth" required>

            <div class="row">
              <div class="col-50">
                <label for="expyear"><b>Exp Year</b></label>
                <input type="text" id="expyear" name="expyear" required>
              </div>
              <div class="col-50">
                <label for="cvv"><b>CVV</b></label>
                <input type="text" id="cvv" name="cvv" required>
              </div>
            </div>
          </div>

        </div>
	   </form>	
		<br>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" name="create" class="Contiune to Checkout">
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>4</b>
        </span>
      </h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>

   <br>
   <h3> Shipping Details </h3>
   <br>
   <p> The estimated standard delivery period is 10-14 working days, depending on the delivery address.</p>
   <p>All international delivery options are fully tracked and our delivery parter will email you a linkbto your tracking information once 
   your parcel has been shipped from the warehouse.</p> 
   <p>Shipping time is estimated and commences from the date of shipping, rather than the date of order and can take longer than expected 
   due to invalid address, customs clearance procedures or other causes.</p>
   <br>
   <br>
   
</body>
</html>	