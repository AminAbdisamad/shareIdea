<!-- Top Menu -->
<header>
        <div class="navbar-fixed">
            <nav class="white">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="<?php echo URLROOT?>dashboard" class="brand-logo ">
                            <img src="<?php echo URLROOT ?>/public/images/shareidea_logo.png" style="margin-top:10px;">
                        </a> 
                        <!-- menu Icon -->
                        <a href="#" data-target="mobile-nav" class="sidenav-trigger show-on-large right"><i class="material-icons blue-text text-darken-3">menu</i>
                        </a>
                        <ul class="right hide-on-med-and-down">
                            
                            <?php if(isset($_SESSION['user_id'])) : ?>
                            <li>
                                <a href="#" class="blue-text text-darken-3">Posts</a>
                            </li>
                            <li>
                                <a href="#" class="blue-text text-darken-3">Categories</a>
                            </li>
                            <li>
                                <a href="#" class="blue-text text-darken-3">Comments</a>
                            </li>
                            <li>
                                <a class="blue-text text-darken-3" href="<?php echo URLROOT?>users/profile"><?php echo $_SESSION['user_name'];?></a>
                            </li>
                            <li>
                                <a class="blue-text text-darken-3" href="<?php echo URLROOT?>users/logout">Logout</a>
                            </li>

                            <?php else: ?>
                            <li>
                                <a class="blue-text text-darken-3" href="<?php echo URLROOT?>pages/about">About</a>
                            </li>
                            <li>
                                <a class="blue-text text-darken-3" href="<?php echo URLROOT?>users/login">Login</a>
                            </li>
                            <li>
                                <a class="blue-text text-darken-3" href="<?php echo URLROOT?>users/register">Register</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
          <!-- Responsive Menu on sidebar--> 
        <ul class="sidenav blue darken-3" id="mobile-nav">
        <?php if(isset($_SESSION['user_id'])): ?>
            <!-- sidebar starts here -->
            <li>
            <div class="user-view">
              <div class="background">
                <img src="<?php echo URLROOT?>/public/images/ocean.jpg" alt="">
              </div>
              <a href="#">
                <img src="<?php echo URLROOT?>/public/images/person1.jpg" alt="" class="circle">
              </a>
              <a href="#">
                <span class="name white-text"><?php echo $_SESSION['user_name'];?></span>
              </a>
              <a href="#">
                <span class="email white-text"><?php echo $_SESSION['user_email'];?></span>
              </a>
            </div>
          </li>
          <li>
            <a href="index.html">
              <i class="material-icons">dashboard</i> Dashboard</a>
          </li>
          <li>
            <a href="posts.html">Posts</a>
          </li>
          <li>
            <a href="categories.html">Categories</a>
          </li>
          <li>
            <a href="comments.html">Comments</a>
          </li>
          <li>
            <a href="users.html">Users</a>
          </li>
          <li>
            <div class="divider"></div>
          </li>
          <li>
            <a class="subheader">Account Controls</a>
          </li>
          <li>
            <a href="<?php echo URLROOT?>users/logout" class="waves-effect">Logout</a>
          </li>
            <!-- sidebar ends here -->
        <?php else : ?>
        <li>
            <a class="white-text" href="<?php echo URLROOT?>pages/about">
            <i class="material-icons left white-text">person</i>About</a>
        </li>
        <li>
            <a class="white-text" href="<?php echo URLROOT?>users/login">
            <i class="material-icons left white-text">lock</i>Login</a>
        </li>
        <li>
            <a class="white-text" href="<?php echo URLROOT?>users/register">
            <i class="material-icons left white-text">group_add</i>Register</a>
        </li>
        <?php endif;?>
        </ul>
    </header>
