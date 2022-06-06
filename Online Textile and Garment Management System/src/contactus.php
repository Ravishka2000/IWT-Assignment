<html>
<head>
    <title>Feel Free to contact us!</title>

      <link rel="stylesheet" href="styles/contactus.css">
</head>
<body>
<form action="form-process.php" method="POST">
<div class="container">
	<div class="row">
			<h1>contact us</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">We'd love to hear from you!</h4>
	</div>
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
                <input type="text" name="name" id="name" class="form-control" required>
					<label>Name</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
                <input type="email" name="email" id="email" class="form-control" required>
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
                <input type="tel" name="phone" id="phone" class="form-control" required>
					<label>Phone Number</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea input type="text" name="message" id="message" class="form-control" required></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
            <button class="btn-lrg submit-btn" type="submit">Submit</button>
			</div>
	</div>
</div>
</Form>

    


    
</body>

</html>