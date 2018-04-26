<?php require_once APPROOT.'/views/inc/header.php';?>
<main>
    <div class="container">
    <div class="row" style="margin-top:30px;">
  
    <div class="col s12 m12 l12">
    <div class="card">
        <div class="row">
            <div class="container">
           <!-- register starts here -->
           <div class="col col s12 m12 l12  white">
            <div class="container">
            <div class="row" style="margin-top:15px;">
                <div class="row">
                    <div class="col s12 m12 l4"> 
                        <h3 class="flow-text blue-text text-darken-3"> Register </h3> 
                    </div>
                    <div class="col s12 m12 l8 right-align"> <!-- Login Account-->
                        <p style="font-size:16px;">have an account ? 
                        <a href="<?php echo URLROOT?>users/login">Sign in </a>
                        </p>
                    </div> 
                </div>
                <!-- divider --><div class="divider" style="margin-bottom:60px;"></div>
                <form>
                    <div class="row"> 
                          <!-- Your Name -->
                        <div class="input-field col s12">
                        <i class="material-icons prefix blue-text text-darken-3">person</i>
                        <input id="name" type="text" name = "name" class="validate">
                        <label for="name">Your Name</label>
                        </div>
                        <!-- Email Address -->
                        <div class="input-field col s12">
                        <i class="material-icons prefix blue-text text-darken-3">email</i>
                        <input id="email" type="email" name = "email" class="validate">
                        <label for="email">Your Email</label>
                        <!-- error message for email -->
                        <span class="helper-text" data-error="wrong" data-success="right"></span>
                        </div>
                        <!-- Password -->
                        <div class="input-field col s12">
                        <i class="material-icons prefix blue-text text-darken-3">lock</i>
                        <input id="password" type="password" name = "password" class="validate">
                        <label for="password">Your Password</label>
                        </div>
                         <!-- Confirm Your Password -->
                         <div class="input-field col s12">
                        <i class="material-icons prefix blue-text text-darken-3">lock</i>
                        <input id="confirm_password" type="password" name = "confirm_password" class="validate">
                        <label for="confirm_password">Confirm Your Password</label>
                        <!-- error message for email -->
                        <span class="helper-text" data-error="Wrong Password" data-success="right"></span>
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
