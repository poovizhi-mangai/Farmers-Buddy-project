<?php
    //connect database
    include '../includes/dbh.inc.php'
?>

<?php
    session_start();
    $userid = $_SESSION["id"];
    $errors = array();
    if (isset($_POST['upload'])) {
        $cat = 'machines';
        $pdt = mysqli_real_escape_string($conn, $_POST['pdt']);
        $opt = $_POST['option'];
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $desp = mysqli_real_escape_string($conn, $_POST['desp']);
        $qty = $_POST['quantity'];
        $price = $_POST['price'];
        $img = $_FILES['image'];
        $file = $_FILES['image']['name'];
        $type = $_FILES['image']['type'];
        $tmp = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];
        $error = $_FILES['image']['error'];
        $ext=  explode('.',$file);
        $extension = strtolower(end($ext));
        $extensions = array('png','jpg','jpeg');
        
        if(in_array($extension,$extensions)=== false) {
            array_push($errors,"please upload a jpg/jpeg/png image file");
        } 
        if($size > 16777215) {
            array_push($errors,"File size should be less than 16MB");
        }
        if (empty( $errors) == true and $error === 0 ) {
            $file = $userid.'_'.$pdt.'_'.$name.'.'.$extension;
            $des = 'img/machines/'.$file;
            move_uploaded_file($tmp,$des);
           select:
            $sql = "SELECT category_id FROM category WHERE category_name = '$cat' and product = '$pdt';";
            $result = mysqli_query($conn,$sql);
            if ($result) {
                $row = mysqli_num_rows($result);
                //echo $row;
                if ($row) {
                     $cat_id = mysqli_fetch_row($result);
                     //echo "success";
                     //echo $cat_id[0];
                     $sql = "INSERT INTO stocks (user_id,category_id,name,quantity,price,dop,description,image,option_rorb) VALUES ( '$userid','$cat_id[0]','$name','$qty','$price',now(),'$desp','$file','$opt');";
                     $result = mysqli_query($conn,$sql);
                     if($result) {
                         //echo "success";
                         $sql = "UPDATE category SET stocks = stocks+1 WHERE category_id = $cat_id[0]; ";
                         $result = mysqli_query($conn,$sql);
                         if($result) {  
                            header("Location:sellsuccess.php");
                         }
                         else {
                             echo "cannot update category stock";
                         }
                     }
                }
                else {
                    $sql = "INSERT INTO category (category_name,product) VALUES ('$cat','$pdt'); ";
                    $result = mysqli_query($conn,$sql);
                    if ($result) {
                        goto select;
                    }
                    else { echo "couldn't complete"; }
                }
            }
        } 
    }

?>