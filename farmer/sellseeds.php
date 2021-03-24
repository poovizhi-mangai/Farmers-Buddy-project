<?php 
   //include header
   include 'header.1.php';
?>
<?php
    include 'sellseeds.inc.php';
?>
<body class="bkgrnd">
   <div class="text-center m-5">
        <form enctype="multipart/form-data" class="" method="post" name="sellseeds" action="sellseeds.php" onsubmit="return validateform1()"> 
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
                       <label><span>*</span> Enter seed name :</label>
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
                       <label><span>*</span> Quantity ( in grams) :</label>
                    </div>
                    <div class="col-70">
                        <input type="number" id="quantity" name="quantity" min="1"  required>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-30">
                       <label><span>*</span> Price (Rs per 100 grams):</label>
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
                        <input type="button" class="but" value="Cancel">
                        </a>
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
