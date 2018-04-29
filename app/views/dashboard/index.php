<!-- Include header--> 
<?php require_once APPROOT . '/views/inc/header.php';?> 
<!-- Main Menu here--> 
<?php require_once APPROOT . '/views/inc/usermenu.php';?> 
<main>
    <div class="row">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card-panel" style="margin-top:30px;">
                <!-- add posts -->
               
                <form>
                <div class="row">
                    <div class="s12 m12 l10">
                    <div class="input-field">
                        <i class="material-icons prefix">edit_mode</i>
                        <textarea id="post" type="text" class="materialize-textarea"  name="post"></textarea>
                        <label for="post">What's on your mind</label>
                    </div>
                    </div>
                    <div class="s12 m12 l2 right">
                    <button type="submit" name="addpost" class="btn btn-floating blue darken-3"><i class="material-icons">add</i></button>
                    </div>
                </div>
                </form>
                <!-- display posts -->
                <ul class="collection">
                    <!-- post 1 -->
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
                    <!-- tabs Link -->
                    </li>
                     <!-- post 2 -->
                     <li class="collection-item avatar">
                        <img src="<?php echo URLROOT?>/public/images/person1.jpg" alt="" class="circle">
                        <span class="title"><strong>User Name</strong></span>
                        <p><strong>Title </strong><br>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos repellat reprehenderit dolor doloremque. Fugit fugiat ab aut, praesentium nesciunt ratione quo ullam quidem sunt non!
                        </p>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</main>
<!-- footer--> 
<?php require_once APPROOT . '/views/inc/footer.php';?> 
    
