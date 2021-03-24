<?php
  //include header
  include 'header.php';
?>
<?php
  include 'signup.inc.php';
?>
<body class="body-signup bkgrnd">
    <div class=" container container1 ">
        <h1 class="text-center logo">
             <a href="index.php" class="web-name">Farmers Buddy</a>
        </h1>
        <div class="container border bg-light">
        <h1 class="well text-center">Signup</h1>
	    <div class="col-lg-12 well">
	        <div class="row">
				<form class="signup" action="signup.php" method="POST" name="signup" onsubmit="return signupvalidate()" >
				<?php
                   include 'farmer/errors.php';
                ?>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<input type="text" placeholder="FirstName" name="firstname" class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<input type="text" placeholder="LastName" name="lastname" class="form-control" required>
							</div>
                        </div>	
                        				
						<div class="form-group">
							<textarea placeholder="Address" rows="3" class="form-control" name="address" required></textarea>
                        </div>	
                        
						<div class="row">
							<div class="col-sm-4 form-group">
								<input type="text" placeholder="City Name" name="city" class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<input type="text" placeholder="District" name="district" class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<input type="text" placeholder="State" name="state" class="form-control" required>
							</div>		
                        </div>
                        
						<div class="row">
							<div class="col-sm-8 form-group">
								<input type="text" placeholder="Mobile Number(10 digits number only)" name="phone" class="form-control" required>
							</div>		
							<div class="col-sm-4 form-group">
								<input type="text" placeholder="Pincode" name="pincode" class="form-control" required>
							</div>	
                        </div>	 

					    <div class="form-group">	
						    <input type="text" placeholder="Email Id" name="email" class="form-control" required>
                        </div>
                        
						<div class="row">
							<div class="col-sm-6 form-group">
								<input type="password" placeholder="Password" id="pwd1" name="pwd1" class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<input type="password" placeholder="Confirm password" name="pwd2" class="form-control" required>
							</div>
						</div>
						
						<div id="message">
                            <h4>Password must contain </h4>
                             <p id="letter" class="invalid">Atleast 1 letter</p>
                             <p id="number" class="invalid">Atleast 1 number</p>
                             <p id="length" class="invalid">Minimum of 8 characters</p>
                        </div>
                        	
                        <div class="form-group">
					        <label class="font-weight-bold">Select your role:</label>
                                <input type="radio" name="role" id="farmer" value="farmer">
                                    <label for="farmer">Farmer</label>
                                <input type="radio" name="role" id="customer" value="customer">
                                    <label for="customer">Customer</label>   
                                <input type="radio" name="role" id="expert" value="expert">
                                    <label for="expert">Expert</label>
					    </div>
					
                        <input type="submit" name="signup" class="btn btn-primary btn-block" value="Create an account">
                        					
					</div>
				</form> 
            </div>
        </div>
        <hr>
        <div class="text-muted text-center mt-3 mb-3">
           Already have an account? <a href="login.php">Log in</a>
        </div>
       </div>
	</div>

   <script src="js/signup.js"> </script>
</body>
</html>
