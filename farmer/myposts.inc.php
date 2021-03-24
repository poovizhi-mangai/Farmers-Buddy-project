<?php
   
   function viewpost($conn,$sel) {
        $user_id = $_SESSION['id'];
        $sql = "SELECT * FROM stocks WHERE user_id ='$user_id' AND category_id IN (SELECT category_id FROM category WHERE stocks > 0 and category_name = '$sel');";
        $result = mysqli_query($conn,$sql);
        $q = 'QUANTITY(in grams)';
        $p = 'PRICE(Rs per 100 grams)';
        if($result) {
            if($sel == 'fruits' or $sel == 'vegetables') {
                $sel = 'fruitsandveges';
                $q = 'QUANTITY(in kgs)';
                $p = 'PRICE(Rs per kg)';
            }
            if(mysqli_num_rows($result) > 0) {
                $col = array('stock_id','user_id','category_id','POST NAME',$q,$p,'DATE OF HARVEST','DATE OF POSTING','DATE OF EXPIRY','DESCRIPTION','OPTION(BUY/RENT)');
                while ($row = mysqli_fetch_row($result)) {
                    if ($sel == 'machines') {
                        $col[4] = 'QUANTITY(in numbers)';
                        $col[5] = 'PRICE';
                        if ($row[11] == 'rent') {
                            $col[5] = 'PRICE(Rs per hour)';
                        }
                    }
?>
                    <div class="post-card">
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
                        ?>
                        <div class="del">
                                    <?php
                                       echo '<form name="update_post" method="POST" action="myposts.update.php?postid='.$row[0].'" onsubmit="return confirm_up()">';
                                       echo '<input type="hidden" id="selpass" name="sel" value="'.$sel.'">';
                                       echo '<input type="hidden" id="namepass" name="name" value="'.$row[3].'">';
                                       echo '<input type="hidden" id="qtypass" name="qty" value="'.$row[4].'">';
                                       echo '<input type="hidden" id="pricepass" name="price" value="'.$row[5].'">';
                                       echo '<input type="hidden" id="desppass" name="desp" value="'.$row[9].'">';
                                        if ($sel == 'machines') {
                                            echo '<input type="hidden" id="optionpass" name="opt" value="'.$row[10].'">';
                                        }
                                        elseif ($sel == 'fruitsandveges') {
                                            echo '<input type="hidden" id="dohpass" name="doh" value="'.$row[6].'">';
                                            echo '<input type="hidden" id="doepass" name="doe" value="'.$row[8].'">';
                                        }
                                       echo '<input type="submit" name="update" id="update" value="Update">';
                                       echo '</form>';
                                       echo '<form name="delete_post" method="POST" action="myposts.delete.php?postid='.$row[0].'" onsubmit="return confirm_del()">';
                                       echo '<input type="hidden" id="img" name="img" value="img/'.$sel.'/'.$img.'">';
                                       echo '<input type="hidden" id="cat" name="cat" value="'.$row[2].'">';
                                       echo '<input type="submit" name="delete" id="delete" value="Delete">';
                                       echo '</form>';

                                    ?>
                           </div>
                        </div>
                    </div>
<?php
                }
            }
            else {
                echo 'NO POSTS';
            }
        }
        else {
            echo 'something wrong';
        }

    }
?>