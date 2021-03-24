<?php 
   //include header
   include 'header.1.php';
   session_start();
?>
<body>
<script> 
          $('head').append('<link rel="stylesheet" href="css/myposts.css" type="text/css" />');

</script>
   <?php 
   //include navbar
   include 'navbar.1.php';
   include 'myposts.inc.php';
   ?>
    <div class="col">
        <div class="col mt-5">
           <h1>MY POSTS</h1>
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
            <div class="tab-content">
                <div id="fruits" class="tab-pane active"><br>
                    <?php
                       $sel = 'fruits';
                       viewpost($conn,$sel);
                    ?>
                </div>
                <div id="vegetables" class=" tab-pane fade"><br>
                    <?php
                        $sel = 'vegetables';
                        viewpost($conn,$sel);
                    ?>
                </div>
                <div id="seeds" class=" tab-pane fade"><br>
                    <?php
                        $sel = 'seeds';
                        viewpost($conn,$sel);
                    ?>
                </div>
                <div id="machines" class=" tab-pane fade"><br>
                    <?php
                        $sel = 'machines';
                        viewpost($conn,$sel);
                    ?>
                </div>
            </div>
        </div>
        </div>
    </div><!-- Main Col END -->

</div><!-- body-row END -->
<?php
     include '../contact.php';
  ?>
  <script src="js/myposts.js"></script>
</body>
</html>