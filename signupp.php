<?php
  //include header
  include 'header.php';
?>
<body class="bkgrnd">
  <div class="container">
    <h1 class="text-center logo">
      <a href="index.php" class="web-name">Farmers Buddy</a>
    </h1>
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 col-sm-10">
        <div class="card mb-5">
          <div class="card-body text-center">
            <h3 class="card-title">Sign up</h3><br>
            <form method="POST" name="signup" class="signup" >
              <div class="row justify-content-center">
              <input type="text" class="label1 m-3" name="firstname" placeholder= "Firstname" >
              <input type="text" class="label1 m-3" name="lastname" placeholder= "Lastname"></div><br>
              <input type="text" name="phone_no" placeholder= "Phone number"><br><br>
              <input type="email" name="email_id" placeholder= "Email id"><br><br>
              <input type="password" name="pwd1" placeholder= "Password"><br><br>
              <input type="password" name="pwd2" placeholder= "Confirm Password"><br><br>
              <textarea rows="3" cols="35" name="address" placeholder= "Address"></textarea><br><br>
              <input type="text" name="city" placeholder= "City"><br><br>
              <input type="text" name="district" placeholder= "District"><br><br>
              <input type="text" name="state" placeholder= "State"><br><br>
              <label>Select your Role :</label>
              <input type="radio" name="role" id="farmer" value="farmer">
                  <label for="farmer">Farmer</label>
              <input type="radio" name="role" id="customer" value="customer">
                  <label for="customer">Customer</label>   
              <input type="radio" name="role" id="expert" value="expert">
                  <label for="expert">Expert</label>
              <br><br>
              <button type="submit" class="btn btn-primary">Create an account</button>
            </form>
          </div>
          <div class="card-footer text-muted text-center ">
            Already have an account? <a href="login.php">Log in</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
