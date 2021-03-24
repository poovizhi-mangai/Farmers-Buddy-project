<?php
  //include header
  include 'header.1.php';
?>
<?php
  include 'changepwd.inc.php';
?>
<body class="bkgrnd">
   <script>
       $('head').append('<link rel="stylesheet" href="../css/signup.css" type="text/css" />');
   </script>
   <div class="container">
    <h1 class="text-center logo my-4">
     <br> <a href="index.1.php" class="web-name">Farmers Buddy</a><br>
    </h1>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="card">
          <div class="card-body text-center">
            <h3 class="card-title ">Change Password</h3><br>
            <form method="POST" name="changepassword" action="changepwd.php" onsubmit="return change_pwd()" >
            <?php
          include 'errors.php';
           ?>
              <input type="password" name="pwd" placeholder= "Enter Old Password" required><br><br>
              <input type="password" name="pwd1" id="pwd1" placeholder= "Enter New Password" required><br>
              <div id="message">
                            <h4>Password must contain </h4>
                             <p id="letter" class="invalid">Atleast 1 letter</p>
                             <p id="number" class="invalid">Atleast 1 number</p>
                             <p id="length" class="invalid">Minimum of 8 characters</p>
                        </div><br>
              <input type="password" name="pwd2" placeholder= "Reenter New Password" required><br><br>

              <input type="submit" name="changepwd" class="btn btn-primary btn-block" value="Change Password">
            </form>
          </div>
          <div class="card-footer text-muted text-center">
             <a href="index.1.php">Back to main page?</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <script src="js/changepwd.js"></script>
</body>
</html>
