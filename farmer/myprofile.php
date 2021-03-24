<?php 
   //include header
   include 'header.1.php';
   session_start();
?>
<body>
   <?php 
   //include navbar
   include 'navbar.1.php';
   ?>
    <div class="col container text-center">
        <h1 class="m-2 mb-3">MY PROFILE</h1>
        <?php
        $user_id = $_SESSION['id'];
        $sql = "SELECT * FROM users WHERE user_id='$user_id';";
        $result = mysqli_query($conn,$sql);
        if($result) {
            if(mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_row($result);
                array_splice($row,5,1);
                $col = array($user_id,"First Name","Last Name","Email id","Role","Phone Number","Address","City","District","State","Pincode");
                echo "<div class='row justify-content-center'>
                        <div class='col-auto' >
                        <table class='table table-responsive'>";
                for( $i =1;$i <= 10;$i++) {
                    echo "<tr>";
                    echo "<td><h5>".strtoupper($col[$i])."</h5></td>";
                    echo "<td>".$row[$i]."</td>";
                    echo "</tr>";
                }
                echo "</table></div></div>";
            }
            else {
                echo 'more than 1 row retreived';
            }
        }
        ?>
    </div><!-- Main Col END -->

</div><!-- body-row END -->
<?php
     include '../contact.php';
  ?>
</body>
</html>