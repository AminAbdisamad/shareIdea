<?php require_once APPROOT.'/views/inc/header.php';?>
<main>
    <div class="container">
    <div class="row" style="margin-top:30px;">
  
    <div class="col s12 m12 l8 offset-l2">
    <div class="card">
        <div class="row">
            <div class="container">
           <!-- register starts here -->
           <div class="col col s12 m12 l12  white">
            <div class="container">
            <div class="row" style="margin-top:15px;">
                <div class="row">
                    <div class="col s12 m12 l12"> 
                        <h3 class="flow-text blue-text text-darken-3 center-align"> Register </h3> 
                    </div>
                    <div class="col s12 m12 l12 center-align"> <!-- Login Account-->
                        <p style="font-size:16px;">have an account ? 
                        <a href="<?php echo URLROOT?>users/login">Sign in </a>
                        </p>
                    </div> 
                </div>
                <!-- divider --><div class="divider" style="margin-bottom:20px;"></div>
                <form action="<?php echo URLROOT; ?>users/register"  method="post">
                    <div class="row"> 
                          <!-- Your Name -->
                        <div class="input-field col s12">
                        <i class="material-icons prefix blue-text text-darken-3">person</i>
                        <input id="name" type="text" name = "name" value="<?php echo $data['name']?>" class="validate">
                        <label for="name">Your Name</label>
                         <!-- error message for Name -->
                         <span class="helper-text red-text" data-error="<?php echo $data['name_err']; ?>" data-success=""><?php echo $data['name_err']; ?></span>
                        </div>
                        <!-- Email Address -->
                        <div class="input-field col s12">
                        <i class="material-icons prefix blue-text text-darken-3">email</i>
                        <input id="email" type="email" name = "email" value="<?php echo $data['email']?>"  class="validate">
                        <label for="email">Your Email</label>
                        <!-- error message for email -->
                         <span class="helper-text red-text" data-error="<?php echo $data['email_err']; ?>" data-success=""><?php echo $data['email_err']; ?></span>
                        </div>
                        <!-- Password -->
                        <div class="input-field col s12">
                        <i class="material-icons prefix blue-text text-darken-3">lock</i>
                        <input id="password" type="password" name = "password" value="<?php echo $data['password']?>" class="validate">
                        <label for="password">Your Password</label>
                        <!-- error message for Password -->
                        <span class="helper-text red-text" data-error="<?php echo $data['password_err']; ?>" data-success=""><?php echo $data['password_err']; ?></span>
                        </div>
                         <!-- Confirm Your Password -->
                         <div class="input-field col s12">
                        <i class="material-icons prefix blue-text text-darken-3">lock</i>
                        <input id="confirm_password" type="password" name = "confirm_password" value="<?php echo $data['confirm_password']?>" class="validate">
                        <label for="confirm_password">Confirm Your Password</label>
                        <!-- error message for Confirm Password -->
                        <span class="helper-text red-text" data-error="<?php echo $data['confirm_password_err']; ?>" data-success=""><?php echo $data['confirm_password_err']; ?></span>
                        </div>
                        <!-- sign in --> 
                        <div class="input-field col s12 m6 l6">
                           
                        </div>
                        <div class="col s12 m6 l6">
                            <button class="waves-effect waves-light btn blue darken-3 right-align" type="submit" name="register"> 
                            <i class="material-icons right">group_add</i> Register
                            </button>
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
