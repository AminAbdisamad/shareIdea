<!-- require headder -->
<?php require_once APPROOT . '/views/inc/header.php';?>
<main>
    <div class="row " style="margin-bottom:0px;">
        <div class="col s6 blue darken-3">
            <div class="container">
            <a href="<?php echo URLROOT?>"><img src="<?php echo URLROOT ?>/public/images/shareidea_med_logo.png" class="" style="margin-top:50px;"></a>
                <div class="row" style="margin-top:20px;">
                    <div class="col s2" >
                        <i class="material-icons medium white-text">group_add</i>
                    </div>
                    <div class="col s10">
                        <p class="white-text"  style="font-size:19px;">You need to register before initiating an application</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2" >
                        <i class="material-icons medium white-text">person_add</i>
                    </div>
                    <div class="col s10">
                        <p class="white-text" style="font-size:19px;">Create Your Account for free</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2" >
                        <i class="material-icons medium white-text">person_pin</i>
                    </div>
                    <div class="col s10">
                        <p class="white-text" style="font-size:19px;">Hear business ideas of your friends</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s2" >
                        <i class="material-icons medium white-text">chat</i>
                    </div>
                    <div class="col s10">
                        <p class="white-text" style="font-size:19px;">Join the conversation</p>
                    </div>
                </div> <!-- end of row -->
    
            </div>
        </div>
        <div class="col s6 white">
            <div class="container">
            <div class="row" style="margin-top:55px;">
                <form>
                    <div class="row"> 
                        <!-- Email Address -->
                        <div class="input-field col s12">
                        <i class="material-icons prefix blue-text text-darken-3">email</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Your Email</label>
                        </div>
                        <!-- Password -->
                        <div class="input-field col s12">
                        <i class="material-icons prefix blue-text text-darken-3">lock</i>
                        <input id="icon_telephone" type="password" class="validate">
                        <label for="icon_telephone">Your Password</label>
                        </div>
                        <!-- sign in --> 
                        <div class="input-field col s6 center-align">
                        <button class="waves-effect waves-light btn blue darken-3" type="submit" name="login"> 
                        <i class="material-icons right">send</i> Login
                        </button>
                        </div>
                        <!-- forget password -->
                        <div class="input-field col s6 center-align">
                        <a href="#"><p class="blue-text text-darken-3">Forget Password</p></a>
                        </div>
                        
                         <!-- Create Account-->
                         <div class="col s12 center-align"><p>Don't have an account ? 
                            <a href="#">Create now </a></p>
                        </div>

                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</main> 
<!-- require footer -->
<?php require_once APPROOT . '/views/inc/footer.php';?>