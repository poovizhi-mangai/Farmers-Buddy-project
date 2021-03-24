<?php 
   //include header
   include 'header.1.php';
   session_start();
   $id = $_SESSION['id'];
?>
<body>
   <?php 
   //include navbar
   include 'navbar.1.php';
   ?>

   <div class="col mt-5">

       <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#fruits"> Fruits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#vegetables"> Vegetables</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#seeds"> Seeds</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#machines"> Machines</a>
            </li>
       </ul>
       <hr>
      <?php 
         include 'buyproduct.inc.php';
      ?>
      <div class="tab-content">
         <div id="fruits" class="tab-pane active"><br>
            <?php
               $sel = 'fruits';
               viewpdt($conn,$sel,$id);
            ?>
         </div>
         <div id="vegetables" class=" tab-pane fade"><br>
            <?php
               $sel = 'vegetables';
               viewpdt($conn,$sel,$id);
            ?>
         </div>
         <div id="seeds" class=" tab-pane fade"><br>
            <?php
               $sel = 'seeds';
               viewpdt($conn,$sel,$id);
            ?>
         </div>
         <div id="machines" class=" tab-pane fade"><br>
            <?php
               $sel = 'machines';
               viewpdt($conn,$sel,$id);
            ?>
         </div>
      </div>

         
   </div><!-- Main Col END -->

</div><!-- body-row END -->
</body>
</html>