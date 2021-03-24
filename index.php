<?php 
   //include header
   include 'header.php';
?>
<body>
   <?php 
   //include navbar
   include 'navbar.php';
   ?>
  <div id="demo" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
     <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
     </ul> 
  <!-- The slideshow -->
     <div class="carousel-inner">
        <div class="carousel-item active">
           <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimg1.cookinglight.timeinc.net%2Fsites%2Fdefault%2Ffiles%2F1502826406%2F1708w-getty-fruit-closeup-CarstenSchanter-EyeEm.jpg" alt="Fruits" width="1150" height="500">
           <div class="carousel-caption">
                <h3 class="caption">Fruits</h3>
           </div>
        </div>
        <div class="carousel-item">
           <img src="https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/article_thumbnails/slideshows/powerhouse_vegetables_slideshow/650x350_powerhouse_vegetables_slideshow.jpg" alt="Vegetables" width="1100" height="500">
           <div class="carousel-caption">
               <h3 class="caption">Vegetables</h3>
           </div>
        </div>
        <div class="carousel-item">
           <img src="https://www.reynoldsfarmequipment.com/wp-content/uploads/2019/04/nine-family.jpg" alt="Machines and Tools" width="1100" height="500">
           <div class="carousel-caption">
              <h3 class="caption">Machines and Tools</h3>
           </div>
       </div>
    </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
   </div> 
  <?php
     include 'contact.php';
  ?>
   

   </body>
</html>
