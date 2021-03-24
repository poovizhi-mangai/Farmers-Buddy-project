<?php
    session_start();
    $row = $_SESSION['uid'];
    if($row == 'farmer') {
        echo "<script>
        window.location.href ='farmer/index.1.php';</script>";
    }
    elseif($row == 'expert') {
         echo "<script>
        window.location.href ='expert/index.1.php';</script>";
    }
    elseif($row == 'customer') {
        echo "<script>
         window.location.href ='customer/index.1.php';</script>";
    }
?>