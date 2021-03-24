<?php
    if(isset($_POST['submit'])) {
        include 'includes/dbh.inc.php';
        session_start();
        $id = $_SESSION['id'];
        $qn1 = $_POST['qn1'];
        $qn2 = $_POST['qn2'];
        $qn21 = mysqli_real_escape_string($conn, $_POST['qn21']);
        $fb = mysqli_real_escape_string($conn, $_POST['fb']);

        $sql = "INSERT INTO feedback (user_id,helpful_for_you,need_enhancements,enhancements,user_feedback)
                VALUES ('$id','$qn1','$qn2','$qn21','$fb');";
        $result = mysqli_query($conn,$sql);
        if($result) {
            $row = $_SESSION['uid'];
            if($row == 'farmer') {
                echo "<script>alert('FEEDBACK SAVED');
                window.location.href ='farmer/index.1.php';</script>";
            }
            elseif($row == 'expert') {
                 echo "<script>alert('FEEDBACK SAVED');
                window.location.href ='expert/index.1.php';</script>";
            }
            elseif($row == 'customer') {
                echo "<script>alert('FEEDBACK SAVED');
                 window.location.href ='customer/index.1.php';</script>";
            }

        }
        else 
        {
            echo "couldn't save feedback";
        }

    }
?>