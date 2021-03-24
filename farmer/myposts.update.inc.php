<?php
   include '../includes/dbh.inc.php';
   session_start();
   if(isset($_POST['upload'])) {
       $stock_id = $_GET['postid'];
       $sel = $_POST['sel'];
       $qty =$_POST['quantity'];
       $price = $_POST['price'];
       $desp = mysqli_real_escape_string($conn, $_POST['desp']);
       #echo $stock_id,$qty,$price,$sel,$desp;
       if($sel == 'fruitsandveges') {
           $doh = $_POST['doh'];
           $doe = $_POST['doe'];
           #echo $doe,$doh;
           $sql = "UPDATE stocks SET quantity = '$qty', price ='$price', doh = '$doh',expiry_date ='$doe' ,description='$desp' WHERE stock_id = '$stock_id';";
       }
       elseif($sel == 'seeds') {
           $sql = "UPDATE stocks SET quantity = '$qty', price ='$price',description ='$desp' WHERE stock_id = '$stock_id';";
       }
       elseif($sel == 'machines') {
        $opt = $_POST['option'];
        $sql = "UPDATE stocks SET quantity = '$qty', price ='$price',description ='$desp',option_rorb ='$opt' WHERE stock_id = '$stock_id';";
    }
      $result = mysqli_query($conn,$sql);
      if ($result) {
          echo '<script>alert("UPDATED !");
          window.location.href="myposts.php";</script>';
      }
      else {
          echo "<script>alert('couldnt update');
          window.location.href='myposts.php';</script>";
      }
   }
   ?>