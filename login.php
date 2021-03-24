<?php
  //include header
  include 'header.php';
?>
<?php
  include 'login.inc.php';
?>
<body class="bkgrnd">
   <div class="container">
    <h1 class="text-center logo my-4">
     <br> <a href="index.php" class="web-name">Farmers Buddy</a><br>
    </h1>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="card">
          <div class="card-body text-center">
            <h3 class="card-title ">Log in</h3><br>
            <form method="POST" name="login" action="login.php" onsubmit="return loginvalidate()" >
            <?php
          include 'farmer/errors.php';
           ?>
              <input type="text" name="email" placeholder= "Email id"><br><br>
              <input type="password" name="pwd" placeholder= "Password"><br><br><br>
              <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
              <div class="text-center mt-3">
                <!--    <a href="" >Forget your password?</a> -->
</div>
            </form>
          </div>
          <div class="card-footer text-muted text-center">
            New to Farmers Buddy?<a href="signup.php">Sign up</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</body>
</html>
