<?php 
   //include header
   include 'header.1.php';
?>
<?php
   include 'sellfruitsandveges.inc.php';
?>
<body class="bkgrnd">
    <!--<h1 class="text-center logo  web-name">Farmers Buddy</h1>-->
   <div class=" text-center m-5">
      <form enctype="multipart/form-data" class="" method="post" name="sellfruitsandveges" action="sellfruitsandveges.php" onsubmit="return validateform()"> 
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
                  <label><span >*</span> Category :</label>
               </div>
               <div class="col-70">
                  <input type="radio"  id="fruits" name = "category" value="fruits" >
                     <label for ="fruits" class="mr-5">Fruits</label>
                  <input type="radio" id="vegetables" name = "category" value="vegetables" >
                     <label for ="vegetables">Vegetables</label>
               </div>
            </div>
            <div class="row"> 
               <div class="col-30">
                  <label><span>*</span> Enter fruit/vegetable name :</label>
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
                  <label><span>*</span> Quantity ( in kgs) :</label>
               </div>
               <div class="col-70">
                  <input type="number" id="quantity" name="quantity" min="0" step="0.001" required>
               </div>
            </div>
            <div class="row"> 
               <div class="col-30">
                  <label><span>*</span> Price (Rs per kg):</label>
               </div>
               <div class="col-70">
                  <input type="number" id="price" name="price" min="0" step="0.01" required>
               </div>
            </div>
            <div class="row"> 
               <div class="col-30">
                  <label><span>*</span> Date of Harvest :</label>
               </div>
               <div class="col-70">
                  <input type="date" id="doh" name="doh" required>
               </div>
            </div>
            <div class="row"> 
               <div class="col-30">
                  <label><span>*</span> Expiry date :</label>
               </div>
               <div class="col-70">
                  <input type="date" id="doe" name="doe" required>
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
