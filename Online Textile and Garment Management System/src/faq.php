<?php

    include_once'Rconfig.php';

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
                        <li><a href="home.html" id = "men">Home</a></li>
                        <li><a href="products.html" id = "men">Products </a></li>  
                        <li><a href="newarrivals.html" id = "men">New Arrivals</a></li>
                        <li><a href="contactus.php" id = "men">Contact Us</a></li>
                        <li><a href="aboutus.html" id = "men">About Us</a></li>
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
                                <li><img src = "images/add.png"><a href="register.html">Register</a></li>
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




        <div class = "bg">
            <h1>Frequently Asked Questions</h1>
            <p>We Are Here For You</p>
            <p id="fq"><a href="faq.php">FAQ Index</a>  |  <a href="create.php">Add FAQ</a>  |  <a href="edit.php">Edit FAQ</a></p>
            
            <div class="faq_holder">
                <?php
                    $sql = "SELECT * FROM faq";
                    $res= $conn->query($sql);

                    if($res->num_rows>0)
			        {
						while($row = $res->fetch_assoc())
						{
                            $id = $row['ID'];
							$questions = $row['Question'];
							$answers = $row['Answer'];
							echo '<div class="faq"><span class="questions">'.$questions.'</span><br><div class="answers">'.$answers.'</div></div>';
						}
					
	        		}
		        	else
		        	{
                        echo "There are no FAQs at this time.";
		        	}
                        
                ?>
            </div>

        </div>

        <!--Footer-->

    <footer class= "footer">
        <div class= "container">
            <div class ="row">
                <div class= "footer-col">
                    <h4>Company</h4>

                    <ul>
                        <li><a href="aboutus.html">about us</a></li>
                        <li><a href="#">Our services</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="checkout.php">delivery</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>get help</h4>

                    <ul>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="contactus.php">Contact us</a></li>
                        <li><a href="return.php">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="payment.html">payment options</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>online shop</h4>

                    <ul>
                        <li><a href="products.html">Women wear</a></li>
                        <li><a href="products.html">Gents wear</a></li>
                        <li><a href="products.html">Kids wear</a></li>
                        <li><a href="products.html">Fabrics</a></li>
                        <li><a href="products.html">Bags</a></li>
                        <li><a href="newarrivals.html">New arrivals</a></li>
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