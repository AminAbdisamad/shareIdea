<!-- Include header--> 
<?php require_once APPROOT . '/views/inc/header.php';?> 
<!-- User Menu here--> 
<?php require_once APPROOT . '/views/inc/usermenu.php';?> 
<main>
    <div class="row">
        
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card-panel" style="margin-top:30px;">  
                <!-- display post -->
                <ul class="collection">
                    <!-- post 1 -->
            
                    <li class="collection-item avatar">
                    <img src="<?php echo URLROOT?>/public/images/person1.jpg" alt="" class="circle">
                    <span class="title"><strong><?php echo $data['userId']->name?></strong></span>
                    <p class="trancate"><small><?php echo $data['Post']->created_at?> </small><br>
                        <?php echo $data['Post']->body?>
                    </p>
                    <!-- tabs for comments -->
                    <ul class="tabs">
                        <li class="tab col s4"><a class="active" href="#likes">Likes</a></li>
                        <li class="tab col s4"><a href="#comments">Comments</a></li>
                        <li class="tab col s4"><a href="#share">Share</a></li>
                    </ul>
                    <!-- tabs Link -->
                    <?php if($data['userId']->id == $_SESSION['user_id']) : ?>
                    <a  class="btn left" href="<?php echo URLROOT?>dashboard/edit/<?php echo  $data['Post']->id?>">Edit</a>
                    <form action="<?php echo URLROOT?>dashboard/delete/<?php echo $data['Post']->id?>" method="post">
                    <button type="submit" name="delete" class="btn red right">Delete</button>
                    </form>
                    <?php endif;?>
                    
                    </li> 
                </ul>
            </div>
            </div>
        </div>
    </div>
</main>
<!-- footer--> 
<?php require_once APPROOT . '/views/inc/footer.php';?> 
    
