<?php

session_start();
$errors = array();

if(isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']); 
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']); 
    if (empty($email)) {
         array_push($errors, "Email id is required"); 
    } 
    if (empty($pwd)) { 
        array_push($errors, "Password is required"); 
    } 
    if (count($errors) == 0) { 
        
           
        $sql = "SELECT * FROM users WHERE user_email = '$email' AND user_pwd = '$pwd';"; 
        $result = mysqli_query($conn, $sql); 
   
        // $result = 1 means that one user with the 
        // entered email exists 
        if (mysqli_num_rows($result) == 1) { 
              
            $row = mysqli_fetch_row($result);
            //echo $row[4];

            $_SESSION['id'] = $row[0]; 
            $_SESSION['firstname'] = $row[1];
            $_SESSION['lastname'] = $row[2];

            $_SESSION['uid'] = $row[4];
            ?>
            <?php
            if($row[4] == 'farmer') {
                echo "<script>alert('WECOME TO FARMERS BUDDY');
                window.location.href ='farmer/index.1.php';</script>";
            }
            elseif($row[4] == 'expert') {
                echo "<script>alert('WECOME TO FARMERS BUDDY');
                window.location.href ='expert/index.1.php';</script>";
            }
            elseif($row[4] == 'customer') {
                echo "<script>alert('WECOME TO FARMERS BUDDY');
                window.location.href ='customer/index.1.php';</script>";
            }
            //header('location: index.php'); 
        } 
        else { 
              
            // If the email and password doesn't match 
            array_push($errors, "Email id or password incorrect");  
        } 
    } 
}
?>