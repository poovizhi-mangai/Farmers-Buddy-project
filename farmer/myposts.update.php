<?php 
   //include header
   include 'header.1.php';
   session_start();
   if(isset($_POST['update'])) {
         $stock_id = $_GET["postid"];
         $name = $_POST['name'];
         $sel = $_POST['sel'];
         $qty = $_POST['qty'];
         $price = $_POST['price'];
         $desp = $_POST['desp'];
         $q = 'grams';
         $p = 'Rs per 100 grams';
         $doh = 'NULL';
         $doe = 'NULL';
         $opt = 'NULL';
         if ($sel == 'machines') {
            $opt = $_POST['opt'];
            $q = 'numbers';
            $p = 'if rent,enter Rs per hour';
            if ($opt == 'rent') {
               $r='checked';
               $s='';
            }
            else {
               $r='';
               $s='checked';
            }
        }
        elseif ($sel == 'fruitsandveges') {
            $doh = $_POST['doh'];
            $doe = $_POST['doe'];
            $q = 'kgs';
            $p ='Rs per kg';
        }
       
    echo '<body class="bkgrnd">
   
    <h1 class="text-center logo pt-2">
     <br> <a href="index.php" class="web-name">Farmers Buddy</a><br>
    </h1>
   <div class=" text-center  mt-2">
      <form enctype="multipart/form-data" class="" method="post" name="updatepost" action="myposts.update.inc.php?postid='.$stock_id.'" onsubmit="return validate_update('.$qty.','.$price.','.$desp.','.$doh.','.$doe.','.$opt.')">
        <input type="hidden" id="idpass" name="stockid" value="'.$stock_id.'">
        <input type="hidden" id="selpass" name="sel" value="'.$sel.'">
         <div class="mb-5 mt-2">
            <div class="col">
            </div>
            
            <div class="col-8 container shadow-lg p-4 mb-5 bg-white rounded ">
               <h3 class="font-weight-bold">UPDATE POST :'.strtoupper($name).'</h3>';
               if ($sel == 'machines') {
               echo '<div class="row"> 
                      <div class="col-30">
                         <label><span >*</span> Select the option :</label>
                      </div>
                      <div class="col-70">
                      <input type="radio"  id="sell" name = "option" value="sell" '.$s.'>
                         <label for ="sell" class="mr-5">Sell</label>
                      <input type="radio" id="rent" name = "option" value="rent" '.$r.'>
                         <label for ="rent">Give for rent</label>
                       </div>
                    </div>';
               }

            echo '<div class="row"> 
               <div class="col-30">
                  <label> Post description :</label>
               </div>
               <div class="col-70">
                  <textarea id="desp" name="desp" rows="5" cols="30">'.$desp.'</textarea>
               </div>
            </div>
            <div class="row"> 
               <div class="col-30">
                  <label><span>*</span> Quantity ( in '.$q.') :</label>
               </div>
               <div class="col-70">
                  <input type="number" id="quantity" name="quantity" min="0" step="0.001" value="'.$qty.'" required>
               </div>
            </div>
            <div class="row"> 
               <div class="col-30">
                  <label><span>*</span> Price ('.$p.'):</label>
               </div>
               <div class="col-70">
                  <input type="number" id="price" name="price" min="0" step="0.01" value="'.$price.'" required>
               </div>
            </div>';
            if ($sel == 'fruitsandveges') {
            echo '<div class="row"> 
               <div class="col-30">
                  <label><span>*</span> Date of Harvest :</label>
               </div>
               <div class="col-70">
                  <input type="date" id="doh" name="doh" value="'.$doh.'" required>
               </div>
            </div>
            <div class="row"> 
               <div class="col-30">
                  <label><span>*</span> Expiry date :</label>
               </div>
               <div class="col-70">
                  <input type="date" id="doe" name="doe" value="'.$doe.'" required>
               </div>
            </div>';
            }
            
           echo '<div class="row mt-5"> 
               <div class="col">
                  <a href="myposts.php">
                  <input type="button" class="but" value="Cancel"></a>
               </div>
               <div class="col">
                  <input type="submit" class="but" name="upload" value="Update">
              </div>
         </div>
</div>
<div class="col">
</div>

        </div>
       </form>
    </div>
    <script src="js/myposts.js"></script>
</body>
</html>';
   }
?>