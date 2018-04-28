<!-- Top Menu -->
<header>
        <div class="navbar-fixed">
            <nav class="white">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="<?php echo URLROOT?>" class="brand-logo ">
                            <img src="<?php echo URLROOT ?>/public/images/shareidea_logo.png" style="margin-top:10px;">
                        </a> 
                        <!-- menu Icon -->
                        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons blue-text text-darken-3">menu</i>
                        </a>
                        <ul class="right hide-on-med-and-down">
                            
                            <?php if(isset($_SESSION['user_id'])) : ?>
                            <li>
                                <a class="blue-text text-darken-3" href="<?php echo URLROOT?>users/profile"><?php echo $_SESSION['user_name'];?></a>
                            </li>
                            <li>
                                <a class="blue-text text-darken-3" href="<?php echo URLROOT?>users/login">Logout</a>
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
        </ul>
    </header>
