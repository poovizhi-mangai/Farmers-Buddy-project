<?php 
   //include header
   include 'header.1.php';
?>
<?php
   include 'sellmachines.inc.php';
?>
<body class="bkgrnd">
    <!--<h1 class="text-center logo  web-name">Farmers Buddy</h1>-->
   <div class=" text-center m-5">
      <form enctype="multipart/form-data" class="" method="post" name="sellmachines" action="sellmachines.php" onsubmit="return validateform2()"> 
         <div class="m-5 ">
            
            <div class="col">
            </div>
            <div class="col-8 container shadow-lg p-4 mb-5 bg-white rounded ">
               <h3 class="font-weight-bold">POST FORM</h3>
               <?php
                  include 'errors.php';
               ?>
            <div class="row"> 
               <div class="col-30">
                  <label><span>*</span> Enter machine/tools name :</label>
               </div>
               <div class="col-70">
                  <input type="text" id="pdt" name="pdt" required>
               </div>
            </div>
            <div class="row"> 
               <div class="col-30">
                  <label><span>*</span> Enter post name :</label>
               </div>
               <div class="col-70">
                  <input type="text" id="name" name="name" required>
               </div>
            </div>
            <div class="row"> 
               <div class="col-30">
                  <label> Post description :</label>
               </div>
               <div class="col-70">
                  <textarea id="desp" name="desp" rows="5" cols="30"></textarea>
               </div>
            </div>
            <div class="row"> 
               <div class="col-30">
                  <label><span >*</span> Select the option :</label>
               </div>
               <div class="col-70">
                  <input type="radio"  id="sell" name = "option" value="sell" >
                     <label for ="sell" class="mr-5">Sell</label>
                  <input type="radio" id="rent" name = "option" value="rent" >
                     <label for ="rent">Give for rent</label>
               </div>
            </div>            
            <div class="row"> 
               <div class="col-30">
                  <label><span>*</span> Quantity (in numbers) :</label>
               </div>
               <div class="col-70">
                  <input type="number" id="quantity" name="quantity" min="1" required>
               </div>
            </div>
            <div class="row"> 
               <div class="col-30">
                  <label><span>*</span> Price (if rent,enter Rs per hour):</label>
               </div>
               <div class="col-70">
                  <input type="number" id="price" name="price" min="0" step="0.01" required>
               </div>
            </div>
            <div class="row"> 
               <div class="col-30">
                  <label><span>*</span>  Upload image :</label>
               </div>
               <div class="col-70">
                  <input type="file" id="image" name="image" required>
               </div>
            </div>
           <br>
           <div class="row"> 
               <div class="col">
                  <a href="sellproduct.php">
                  <input type="button" class="but" value="Cancel"></a>
               </div>
               <div class="col">
                  <input type="reset" class="but">
               </div>
               <div class="col">
                  <input type="submit" class="but" name="upload" value="Post/Sell">
               </div>
            </div>
         </div>
         <div class="col">
         </div>
      </div>
      </form>
   </div>
</body>
</html>