<?php require_once APPROOT.'/views/inc/header.php';?>
<main>
    <div class="container">
    <div class="row" style="margin-top:25px;">
  
    <div class="col s12 m12 l8 offset-l2">
    <div class="card">
        <div class="row">
            <div class="container">
           <!-- sing in starts here -->
           <div class="col col s12 m12 l12  white">
                <!--User registration Flash messages -->
            <?php echo flash('register_success'); ?>
               <!--User logout Flash messages -->
            <?php echo flash('logout_success'); ?>
            <div class="container">
            <div class="row" style="margin-top:15px;">
                <div class="row">
                    <div class="col s12 m12 l12 center-align"> 
                        <h3 class="flow-text blue-text text-darken-3"> Sign in </h3> 
                    </div>
                    <div class="col s12 m12 l12 center-align"> <!-- Create Account-->
                        <p style="font-size:16px;">Don't have an account ? 
                        <a href="<?php echo URLROOT?>users/register">Create now </a>
                        </p>
                    </div> 
                </div>
                <!-- divider --><div class="divider" style="margin-bottom:60px;"></div>
                <form action="<?php echo URLROOT; ?>users/login" method='post'>
                    <div class="row"> 
                        <!-- Email Address -->
                        <div class="input-field col s12">
                        <i class="material-icons prefix blue-text text-darken-3">email</i>
                        <input id="email" type="email" name = "email" value="<?php echo $data['email']?>" class="validate">
                        <label for="email">Your Email</label>
                        <!-- error message for email -->
                        <span class="helper-text red-text" data-error="" data-success=""><?php echo $data['email_err']?></span>
                        </div>
                        <!-- Password -->
                        <div class="input-field col s12">
                        <i class="material-icons prefix blue-text text-darken-3">lock</i>
                        <input id="password" type="password" name = "password" value="" class="validate">
                        <label for="password">Your Password</label>
                        <!-- error message for email -->
                        <span class="helper-text red-text" data-error="" data-success=""><?php echo $data['password_err']?></span>
                        </div>
                        <!-- sign in --> 
                        <div class="input-field col s12 m6 l6 center-align">
                        <button class="waves-effect waves-light btn blue darken-3" type="submit" name="login"> 
                        <i class="material-icons right">send</i> Login
                        </button>
                        </div>
                        <!-- forget password -->
                        <div class="input-field col s12 m6 l6 center-align">
                        <a href="#"><p class="blue-text text-darken-3">Forget Password</p></a>
                        </div>
                        
                    </div>
                </form>
            </div>
            </div>
        </div>
           <!-- sing in ends here -->
            </div>
        </div>
    </div>
    </div>
</div>
</div>
</main>
<?php require_once APPROOT.'/views/inc/footer.php';?>