<?php

session_start();
$errors = array();
if(isset($_POST['signup'])) {
    $first = mysqli_real_escape_string($conn, $_POST['firstname']);
    $last = mysqli_real_escape_string($conn, $_POST['lastname']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $district = mysqli_real_escape_string($conn, $_POST['district']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $pin = mysqli_real_escape_string($conn, $_POST['pincode']);
    $email = mysqli_real_escape_string($conn, $_POST['email']); 
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd1']); 
    $role = $_POST['role'];
    if (empty($email)) {
         array_push($errors, "Email id is required"); 
    } 
    if (empty($pwd)) { 
        array_push($errors, "Password is required"); 
    } 
    if (count($errors) == 0) { 
         
        $sql = "INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd,user_phone_no,user_address,user_city,user_district,user_state,user_pincode) 
        VALUES ('$first','$last','$email','$role','$pwd','$phone','$address','$city','$district','$state','$pin');"; 
        $result = mysqli_query($conn, $sql); 

        if ($result) { 
            $sql = "SELECT * FROM users WHERE user_email = '$email' AND user_pwd = '$pwd';"; 
            $result = mysqli_query($conn, $sql); 
 
            if (mysqli_num_rows($result) == 1) { 
              
               $row = mysqli_fetch_row($result);
               $_SESSION['id'] = $row[0]; 
               $_SESSION['firstname'] = $row[1];
               $_SESSION['lastname'] = $row[2];

                $_SESSION['uid'] = $row[4];
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
            }

        } 
        else { 
               
            array_push($errors, "Couldn't create an account");  
        } 
    } 
}