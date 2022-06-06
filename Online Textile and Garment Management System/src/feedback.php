<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/formstyles.css">
        <title></title>
    </head>
    <body>
      <button><a href="reviews.php">Reviews</a></button>
	  <div>
        <div class= "feedback"><h1>feedback</h1></div>
        <div class= "main">
            <form action="submitfeedback.php" method="POST"> 
                <div id= "name">
                    <h2 class ="name">Type</h2>
                    <select class="option"  name="type">
                        <option disabled="disabled" selected="selected">Choose Option</option>
                        <option>Comments</option>
                        <option>Suggestions</option>
                        <option>Questions</option>
                    </select>
                    <h2 class="name">Name</h2>
                    <input class="firstname" type="text" name="first_name" placeholder="Eric"> 
                    <label class="firstlabel">first name</label>
                    <input class="lastname" type="text" name= "last_name" placeholder="Andrewson">
                    <label class="lastlabel">last name</label>
                </div> 
                <br/><br/>
                
                    <div class= "row">
                    <div class= "col"></div>
                    <h2 class= "name">Email</h2>
                    <input class="email" type="text"  name="email" placeholder="Robert85@gmail.com">
   
                 <h2 class="name">Age</h2>
                     <input class="age" type="text" name= "age" placeholder="30"> 
                    </div>
                 <h2 class="name">Comments</h2>
            
                     <textarea id= "comments" name="comments" required="" placeholder="Write your message here.." cols="48" rows="5"></textarea>
                

                 <h2 id="Experience">How is your experience with Cultrade?</h2>
                 <label class="radio">
                     <input class="radio-one" type="radio" checked="checked" name="prefer">
                     <span class="checkmark"></span>
                     Awesome
                 </label>
                 <label class="radio">
                    <input class="radio-one" type="radio"  name="prefer">
                    <span class="checkmark"></span>
                    Good
                </label>
                <label class="radio">
                    <input class="radio-one" type="radio"  name="prefer">
                    <span class="checkmark"></span>
                    Bad
                </label>
                <br/><br/>
                <button type= "Submit">Submit Feedback</button>
            </form>
        </div>  
		</div>
    </body>

</html>
