<?php

    function viewpdt($conn,$sel) {
        //$day =date('Y-m-d');
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
                    $i +=  1;
                
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
            else {
                echo "nothing available";
            }
       }
   }


?>