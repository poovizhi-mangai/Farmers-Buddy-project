<?php

    function viewpdt($conn,$sel,$id) {
        
        if($sel=='fruits' or $sel=='vegetables') {
            $sql = "SELECT * from stocks where expiry_date < CURDATE();";
            $result = mysqli_query($conn,$sql);
            //echo $result;
            if($result) {
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_row($result)) {
                       $cat_id = $row[2];
                       $stock_id = $row[0];
                       $sql = "DELETE from stocks where stock_id='$stock_id';";
                       $result = mysqli_query($conn,$sql);
                       if($result) {
                        $sql = "UPDATE category SET stocks = stocks-1 WHERE category_id = $cat_id; ";
                        $result = mysqli_query($conn,$sql);
                       } 
                    }
                }
            }
        }

       $sql = "SELECT * FROM category WHERE stocks > 0 AND category_name = '$sel';";
       $result = mysqli_query($conn,$sql);
       if($result) {
           $count = mysqli_num_rows($result);
           if($count > 0) {
               $i = 0;
               while($row = mysqli_fetch_row($result)) {
                   $sql1 = "SELECT * from stocks where category_id='$row[0]' and user_id!='$id';";
                   $result1 = mysqli_query($conn,$sql1);
                   if($result1) {
                       $count = mysqli_num_rows($result1);
                       if($count > 0) { 
                           $i = 1;
                       echo '
                            <div class="card text-center" style="width: 15rem;">
                               <div class="card-body">
                                  <h5 class="card-title"><b>'.strtoupper($row[2]).'</b></h5>
                                  <p class="card-text">Posts : '.$row[3].'</p>
                                  <a href="viewproduct.php?pdt='.$row[2].'" class = "btn btn-primary">View Posts</a>
                                </div>
                            </div>'; 
                        }
                        
                   }
                 
                    
               
               }
               if($i == 0) {
                   echo 'NOTHING AVAILABLE';
               }
              
            }
            else {
                echo "nothing available";
            }
       }
   }

   /*
   <form method = "POST" name ="choice" action="viewproduct.php">
   <input type="hidden" name="pdt" value ="'.$row[2].'">
   <input type = "submit" name="view" value = "View Posts">

   <img class="card-img-top" src="..." alt="Card image cap">
                                   */
?>