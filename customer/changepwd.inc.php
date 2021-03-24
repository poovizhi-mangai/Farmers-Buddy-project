<?php

session_start();
$errors = array();
$user_id = $_SESSION['id'];
if(isset($_POST['changepwd'])) {
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']); 
    $pwd1 = mysqli_real_escape_string($conn, $_POST['pwd1']); 
    $pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']); 
    if (empty($pwd)) {
         array_push($errors, "Old password is required"); 
    } 
    if (empty($pwd1)) { 
        array_push($errors, "New Password is required"); 
    } 
    if (count($errors) == 0) { 
        $sql = "SELECT user_pwd FROM users WHERE user_id='$user_id';";
        $result = mysqli_query($conn, $sql); 
        if($result) {
            if(mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_row($result);
                if($row[0] == $pwd) {
                    if($pwd != $pwd1) {
                        $sql = "UPDATE users SET user_pwd = '$pwd1' WHERE user_id ='$user_id';"; 
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            echo '<script>alert("Password changed successfully");
                            window.location.href="index.1.php"</script>';
                        }
                        else {
                            echo "couldn't update";
                        }
                    }
                    else {
                        array_push($errors, "Old and New Password cannot be same"); 
                    }
                }
                else {
                    array_push($errors, "Old Password is incorrect"); 
                }
            }
            else {
                echo 'multiple user';
            }
        }
        else {
            echo 'something wrong';
        }
    }

}
?>