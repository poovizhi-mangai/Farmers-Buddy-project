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
   <script>
          $('head').append('<link rel="stylesheet" href="css/myposts.css" type="text/css" />');
   </script>
   <div class="col mt-5">
   <?php
    $pdt = $_GET['pdt'];
    $id = $_SESSION['id'];
    //echo $pdt."<br>";
    $sql = "SELECT * FROM category WHERE product = '$pdt';";
    $result = mysqli_query($conn,$sql);
    if($result) {
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_row($result);
            $cat_id = $row[0];
            $sel = $row[1];
            //echo $cat_id;
            $sql = "SELECT * FROM stocks WHERE category_id = '$cat_id';";
            $result = mysqli_query($conn,$sql);
            $q = 'QUANTITY(in grams)';
            $p = 'PRICE(Rs per 100 grams)';
            if($result) {
                if($sel == 'fruits' or $sel == 'vegetables') {
                    $sel = 'fruitsandveges';
                    $q = 'QUANTITY(in kgs)';
                    $p = 'PRICE(Rs per kg)';
                }
                echo '<h1 class="text-center">'.strtoupper($pdt).'</h1>';
                if(mysqli_num_rows($result) > 0) {
                    $col = array('stock_id','user_id','category_id','POST NAME',$q,$p,'DATE OF HARVEST','DATE OF POSTING','DATE OF EXPIRY','DESCRIPTION','OPTION(BUY/RENT)');
                    while ($row = mysqli_fetch_row($result)) {
                        if($row[1] != $id) {
                        if ($sel == 'machines') {
                            $col[4] = 'QUANTITY(in numbers)';
                            $col[5] = 'PRICE';
                            if ($row[11] == 'rent') {
                            $col[5] = 'PRICE(Rs per hour)';
                            }
                        }
                        $sql1 = "SELECT * from users where user_id=$row[1];";
                        $result1 = mysqli_query($conn,$sql1);
                        if($result1 and mysqli_num_rows($result1)==1) {
                            $loc = mysqli_fetch_row($result1);
                        }
?>
                    <div class="post-card border">
                        <div class="meta">
                            <?php
                           echo '<img class="photo" src="img/'.$sel.'/'.$row[10].'" alt="img">';
                           $img = $row[10];
                           array_splice($row,10,1);
                            ?>
                             
                        </div>
                        <div class="description">
                        <?php 
                          echo "<h2>".strtoupper($row[3])."</h2>";
                          for($i =4;$i <= 10;$i++) {
                            if($row[$i] != NULL and strlen($row[$i]) > 0) {
                               echo '<h4><b>'.$col[$i]."</b>  :".$row[$i].'</h4>';
                            }
                        }
                        echo '<h4><b> LOCATION</b> :'.$loc[9]." , ".$loc[10].'</h4>';
                        echo '<div class="m-3"><a href="../contact_farmer.php?farmerid='.$row[1].'">CONTACT FARMER</a></div>';
                        ?>
                        </div>
                    </div>
                    <?php /*while ($row = mysqli_fetch_row($result)) {
                        echo '<div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="img/fruitsandveges/'.$row[10].'" alt="Card image cap">
                         <div class="card-body">
                            <h5 class="card-title">'.strtoupper($row[3]).'</h5>
                            <p class="card-text">'.$row[9].'</p>
                            
                            
                         </div>
                     </div>';*/
                    }
                    }
                    echo '<div class="m-5 text-center">
                     <button class="mr-1 ml-1 back ">
                      <a href="buyproduct.php">Back to buyproducts page</a>
                    </button></div>';
                }
                 else { echo "no rows"; }
            }
            else {
                echo "something wronggg";
            }
        }
        else {
            echo "something wrong";
        }
    }
   ?>
   </div>
   </div>
   
   </body>
   </html>