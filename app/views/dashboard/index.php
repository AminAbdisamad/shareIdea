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
               
                <form action="<?php echo URLROOT; ?>dashboard/addPost"  method="post">
                <div class="row">
                    <div class="col s12 m12 l10">
                    <div class="input-field"> 
                        <i class="material-icons prefix"><img src="<?php echo URLROOT?>/public/images/person1.jpg" alt="" class="circle post-img"></i>
                        <textarea id="post" type="text" class="materialize-textarea"  id="post" name="post"></textarea>
                        <label for="post">What's on your mind, <?php echo $_SESSION['user_name'];?>?</label>
                        <!-- error message for post textarea -->
                        <span class="helper-text red-text" data-error="" data-success=""></span>
                    </div>
                    </div>
                    <div class="col s12 m12 l2">
                    <button type="submit" name="addpost" id="btn-add-post" class="btn btn-floating blue darken-3 disabled"><i class="material-icons">add</i></button>
                    </div>
                </div>
                </form>
                
                <!-- display posts -->
                <ul class="collection">
                    <!-- post 1 -->
                    <?php foreach($data['posts'] as $post) : ?>
                    <li class="collection-item avatar">
                    <img src="<?php echo URLROOT?>/public/images/person1.jpg" alt="" class="circle">
                    <span class="title"><strong><?php echo $post->name?></strong></span>
                    <p class="trancate"><small><?php echo $post->postCreated?> </small><br>
                        <?php echo $post->body?>
                    </p><a href="<?php URLROOT?>dashboard/showpost<?php echo $post->postId?>">Learn More</a>
                    <!-- tabs for comments -->
                    <ul class="tabs">
                        <li class="tab col s4"><a class="active" href="#likes">Likes</a></li>
                        <li class="tab col s4"><a href="#comments">Comments</a></li>
                        <li class="tab col s4"><a href="#share">Share</a></li>
                    </ul>
                    <!-- tabs Link -->
                    </li> <?php endforeach;?>
                    <!-- Model starts -->
                     
                     <!-- post 2 -->
                     <li class="collection-item avatar">
                        <img src="<?php echo URLROOT?>/public/images/person1.jpg" alt="" class="circle">
                        <span class="title"><strong>User Name</strong></span>
                        <p><strong>Title </strong><br>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos repellat reprehenderit dolor doloremque. Fugit fugiat ab aut, praesentium nesciunt ratione quo ullam quidem sunt non!
                        </p>
                          <!-- tabs for comments -->
                        <ul class="tabs">
                            <li class="tab col s4"><a class="active" href="#likes">Likes</a></li>
                            <li class="tab col s4"><a href="#comments">Comments</a></li>
                            <li class="tab col s4"><a href="#share">Share</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</main>
<!-- footer--> 
<?php require_once APPROOT . '/views/inc/footer.php';?> 
    
