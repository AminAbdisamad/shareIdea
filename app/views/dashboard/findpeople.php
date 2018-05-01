<!-- Include header--> 
<?php require_once APPROOT . '/views/inc/header.php';?> 
<!-- User Menu here--> 
<?php require_once APPROOT . '/views/inc/usermenu.php';?> 
<main>
    <div class="row">
        <!-- Flash message-->
        <?php flash('post_message');?>
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card-panel" style="margin-top:30px;">
                <!-- add posts -->
               
                <form action="<?php echo URLROOT; ?>dashboard/findpeople"  method="post">
                <div class="row">
                    <div class="col s12 m12 l10">
                    <div class="input-field">
                        <i class="material-icons prefix">search</i>
                        <input id="search" type="text" id="post" name="searhc">
                        <label for="post">Search people</label>
                        <!-- error message for post textarea -->
                        <span class="helper-text red-text" data-error="" data-success=""></span>
                    </div>
                    </div>
                </div>
                </form>
                
                <!-- display posts -->
                <ul class="collection">
                    <!-- post 1 -->
                    <?php foreach($data['users'] as $user) : ?>
                    <li class="collection-item avatar">
                    <img src="<?php echo URLROOT?>/public/images/person1.jpg" alt="" class="circle">
                    <span class="title"><strong><?php echo $user->name?></strong></span>
                    <p><small><?php echo $user->email?> </small><br>
                        
                    </p>
                    <!-- tabs Link -->
                    </li> <?php endforeach;?>
                    
                </ul>
            </div>
            </div>
        </div>
    </div>
</main>
<!-- footer--> 
<?php require_once APPROOT . '/views/inc/footer.php';?> 
    
