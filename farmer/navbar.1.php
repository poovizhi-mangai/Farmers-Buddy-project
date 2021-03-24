<!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
  <a class="navbar-brand web-name ml-3" style="font-size:30px;" href="index.1.php">Farmers Buddy</a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
     <!-- <li class="nav-item ">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li> -->
      <li class="nav-item mr-3">
        <a class="nav-link" href="index.1.php">Home</a>
      </li>
      <li class="nav-item mr-3">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item mr-5">
        <a class="nav-link" href="../logout.php">Log out</a>
      </li>
      
      <!-- This menu is hidden in bigger devices with d-sm-none. 
           The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->
      <li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="myprofile.php">Profile</a>
            <a class="dropdown-item" href="changepwd.php">Change password</a>
            <a class="dropdown-item" href="myposts.php">My posts</a>
            <a class="dropdown-item" href="view_article.php">View Articles</a>-->
        </div>
      </li><!-- Smaller devices menu END -->
      
    </ul>
  </div>
</nav><!-- NavBar END -->


<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Profile</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="myprofile.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">My profile</span>
                </a>
                <a href="changepwd.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Change Password</span>
                </a>
            </div>  
            
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tasks fa-fw mr-3"></span> 
                    <span class="menu-collapsed">Tasks</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="myposts.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">My posts</span>
                </a>
           <!--     <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">My wishlist</span> -->
                </a>
            </div>

            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>OPTIONS</small>
            </li>
            <!-- /END Separator -->
            <a href="buyproduct.php" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                <span><i class="fa fa-shopping-cart fa-fw mr-3" aria-hidden="true"></i></span>
                <span class="menu-collapsed">Buy products</span>
                </div>
            </a>
            <a href="sellproduct.php" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span><i class="fa fa-shopping-cart fa-fw mr-3" aria-hidden="true"></i></span>
                    <span class="menu-collapsed">Sell products </span>
                </div>
            </a>
            <a href="view_article.php" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span></span>
                    <span class="menu-collapsed ml-4">View articles</span>
                </div>
            </a>
            <!-- Separator without title -->
            <li class="list-group-item sidebar-separator menu-collapsed"></li>            
            <!-- /END Separator -->
            <a href="../feedback.php" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span><i class="fa fa-pencil-square-o fa-fw mr-3" aria-hidden="true"></i></span>
                    <span class="menu-collapsed">Give feedback</span>
                </div>
            </a>
            <a href="../logout.php" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span><i class="fa fa-sign-out fa-fw mr-3" aria-hidden="true"></i></span>
                    <span class="menu-collapsed">Log out</span>
                </div>
            </a>
      <!--      <a href="#" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">Collapse</span>
                </div>
            </a>
-->      
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->

