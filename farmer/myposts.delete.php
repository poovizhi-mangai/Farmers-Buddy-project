<?php
    include '../includes/dbh.inc.php';
    session_start();
    $user_id = $_SESSION['id'];
    $stock_id = $_GET["postid"];
    $img = $_POST['img'];
    $cat = $_POST['cat'];

    $sql = "DELETE FROM stocks WHERE stock_id = '$stock_id'";
    $result = mysqli_query($conn,$sql);
    if($result) {
        if(unlink($img)) {
            $sql = "UPDATE category SET stocks = stocks-1 WHERE category_id = $cat; ";
            $result = mysqli_query($conn,$sql);
            if($result) {  
                echo '<script>alert("POST DELETED");
                window.location.href ="myposts.php";
                </script>';
                #header("Location:myposts.php");
            }
            else {
                echo "cannot update category stock";
            }
        }
        else {
            echo "couldn't delete image";
        }
    }
    else {
        echo "couldn't delete post"; 
    }
?>
