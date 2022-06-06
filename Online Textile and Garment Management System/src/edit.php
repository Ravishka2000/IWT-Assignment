<?php
		
	
    include_once'Rconfig.php';
	
	
	
	if(isset($_GET["edit_faq"]))
	{
		$fa =($_GET['id']);
		$question =($_GET['question']);
		$answer =($_GET['answer']);
		
		$query = "UPDATE faq SET Question='$question',Answer='$answer' WHERE ID='$fa'";
		
		$data = mysqli_query($conn,$query);
		
		if($data)
		{
			echo "<script>alert('Updated')</script>";
			header("location:faq.php");
		}
		else
		{
			echo "<script>alert('Error')</script>";
		}
	
	}

	if(isset($_GET["delete_faq"]))
	{
	$fq = $_GET['id'];
	
	$query = "DELETE FROM faq WHERE ID='$fq'";
	
	$data  = mysqli_query($conn,$query);
	
		if($data)
		{
			echo "<script>alert('Deleted')</script>";
			header("location:faq.php");
		}
		else
		{
			echo "<script>alert('Error')</script>";
		}
	}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cultrade | FAQs</title>
		<link rel="stylesheet" href = "styles/faq.css">
    </head>

    <body>

		<!--Header-->

		<div class="header">
        <div class="container">
            <div class = "navbar">

                <div class="logo">
                    <img src ="images/logo.png" width="200px" height="105px">
                </div>

                <nav>
                    <ul class = "uol">
                        <li><a href="#" id = "men">Home</a></li>
                        <li><a href="products.html" id = "men">Products </a></li>  
                        <li><a href="#" id = "men">New Arrivals</a></li>
                        <li><a href="#" id = "men">Contact Us</a></li>
                        <li><a href="#" id = "men">About Us</a></li>
                    </ul>  
                </nav>  

                <div class="crt">
                    <a href="#"><img src="images/cart.png" id="crt" width="25px" height="25px"></a>
                </div> 

                <div class="use">
                    <div class="action">
                        <div class="profile" onclick="menu()";>
                            <a href="#"></a><img src="images/user.png" id = "use" width="25px" height="25px"></a>
                        </div>
                        <div class="menu">
                            <h3>Richard Stark<br><span>User</span></h3>
                            <ul>
                                <li><img src = "images/profile.png"><a href="#">Log In</a></li>
                                <li><img src = "images/add.png"><a href="#">Register</a></li>
                                <li><img src = "images/question.png"><a href="#">Help</a></li>
                                <li><img src = "images/settings.png"><a href="#">Setting</a></li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
                <script>
                    function menu()
                    {
                        const toggle = document.querySelector('.menu');
                        toggle.classList.toggle('active');
                    }
                </script>
            </div>  
        </div>
    </div>



        <div class ="bg">
            <h1>Frequently Asked Questions</h1>
            <p>We Are Here For You</p>
            <p id="fq"><a href="faq.php">FAQ Index</a>  |  <a href="create.php">Add FAQ</a>  |  <a href="edit.php">Edit FAQ</a></p>
            
            <div class="faq_holder">
			
			<h3>Edit FAQs</h3>
                <?php
                    $sql = "SELECT * FROM faq";
                    $res = $conn->query($sql);

                    if($res->num_rows>0)
			        {
						while($row = $res->fetch_assoc())
						{
							$id = $row['ID'];
							$questions = $row['Question'];
							$answers = $row['Answer'];
							echo '<div class="form_emain"><form action = "edit.php "method= "get">
							<div><b>ID :</b><br/><input type = "text" class="form_edit" name = "id" value ="'.$id.'" readonly/></div><br/>
							<span><b>Question :</b><br/><input type = "text" class="form_edit" name = "question" size = "65" value ="'.$questions.'"/></span><br/><br/>
							<div><b>Answers :</b><br/><input type = "text" class="form_edit" name = "answer" size = "65" value ="'.$answers.'"/></div>
							<input type = "submit" id= "del" name="delete_faq" value="Delete FAQ" /> <input type ="submit" id="up" name="edit_faq" value = "Submit Changes" />
							</form></div>';
						}
					
	        		}
		        	else
		        	{
                        echo "There are no FAQs at this time.";
		        	}
                        
                ?>
            </div>

        </div>

		<footer class= "footer">
        <div class= "container">
            <div class ="row">
                <div class= "footer-col">
                    <h4>Company</h4>

                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">Our services</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">delivery</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>get help</h4>

                    <ul>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="payment.html">payment options</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>online shop</h4>

                    <ul>
                        <li><a href="#">Women wear</a></li>
                        <li><a href="#">Gents wear</a></li>
                        <li><a href="#">Kids wear</a></li>
                        <li><a href="#">Fabrics</a></li>
                        <li><a href="#">Bags</a></li>
                        <li><a href="#">New arrivals</a></li>
                    </ul>
                </div>

                <div class= "footer-col">
                    <img src="images/cultrate.png" width="300px" height="150px">

                    <form action="">
                        <input type="email" placeholder="Enter Email here" id="">
                        <input type="submit" value="Subscribe Now">
                    </form>

                    <br/>

                    <div class="social-links">
                        <a href="#"><img src="images/fb.png" id = "sm" width = "50px" height="50px"></a>
                        <a href="#"><img src="images/twit.png" id = "sm"  width = "50px" height="50px"></a>
                        <a href="#"><img src="images/insta.png" id = "sm"  width = "50px" height="50px"></a>
                        <a href="#"><img src="images/link.png" id = "sm"  width = "50px" height="50px"></a>
                    </div>
                </div>

                <div class="notice">
                    Copyright Protected &copy;
                    <b>2021 Cultrade.lk (Pvt.).Ltd</b>
                </div>
            </div>
        </div>
    </footer>
    </body>