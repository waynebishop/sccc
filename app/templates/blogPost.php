<?php

  $this->layout('master', [
    'title'=> 'Spin City CC - Blog Post',
    'desc'=>'SCCC Captains Blog Post'
  ]); 

?>

<!-- Breadcrumbs -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=blogHome">Captains Blog</a></li>
        <li><a class="active" href="index.php?page=blogPost" >Blog Post</a></li>    
    </ol>

</div>

<!-- Content -->

<!-- main blog post section -->

<div class="container" id="blogPostContent">

    <div class="row">

        <!-- Blog Entries Column - takes up 8 of 12 columns -->

        <div class="col-md-8">
            
            <h1 class="page-header">
                Captains Blog
                <small><?= $post['purpose'] ?></small>
            </h1>

            <article>

                <!-- Blog Post -->
                <h2>
                
                 <!-- Pending Warning Button for Admin -->
                    <?php if($post['status'] == 'Pending') : ?>
                         <a class="btn btn-warning" href="index.php?page=editPost&id=<?= $_GET['postid'] ?>">Pending <i class="fa fa-arrow-right" aria-hidden="true"></i> EDIT</a>
                    <?php endif; ?>   

                <?= htmlentities($post['title']) ?>            
                </h2>

                <p class="lead">
                   <a href="index.php"><?= $post['purpose'] ?></a> for team <a href="index.php"><?= htmlentities($post['team_name']) ?></a> in grade <a href="index.php"> <?= htmlentities($post['teamsJrSr']) ?> <?= htmlentities($post['grade']) ?></a>. 
                </p>

                <p class="lead">
                    <a href="#"><?= $post['type'] ?></a> / <a href="#"><?= $post['location'] ?></a>. Author: <a href="index.php"> <?= htmlentities($post['first_name'].' '.$post['last_name']) ?></a> 
                </p>

                <p>
                <span><strong> Post ID# <?= isset($tempPostID) ? $tempPostID : 'TBC' ?></strong></span>
                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Posted on <?= $post['created_at'] ?>
                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Post Updated <?= $post['updated_at'] ?>
                </p>
                
                <!-- Edit Post Button -->

                <?php 
                    // Are they logged in? must be.
                    if( isset($_SESSION['id']) ) {
                        // Check to see if logged in User matches post author/User OR has admin privileges
                        if( $_SESSION['id'] == $post['user_id'] || $_SESSION['privilege'] == 'admin') {
                            // True = owns the post OR logged in as ** admin **
                            ?> <!-- Close php-->

                <a class="btn btn-warning btn-sm" href="index.php?page=editPost&id=<?= $_GET['postid'] ?>" role="button">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Post</a>

                <!-- DELETE POST button function-->

                <button id="delete-post" class="btn btn-danger btn-sm">Delete</button>

                <div id="delete-post-options">

                    <a href="<?= $_SERVER['REQUEST_URI']?>&delete" class="btn btn-danger btn-sm">Yes please delete post.</a><button class="btn btn-primary btn-sm">No please keep the post.</button>                            
                </div>

                       
                <!-- See alt modal below comented out-->            

                               <!-- Open new php tags --> 
                            <?
                        }
                    }
                ?> <!-- /. PHP section closed -->

                <!-- Image -->

                <hr>
                <img class="img-responsive" src="img/uploads/blogPost/<?= $post['image'] ?>" alt="A cricket photograph">
                <hr>

                <p><?= htmlentities($post['intro']) ?></p>

                <p><?= htmlentities($post['article']) ?></p>

                <hr>

            </article> <!-- End of Post Article -->

            
            <section> <!-- Blog Comments -->

                <h3>Comments: <?= count($allComments) ?> </h3>

                <!-- NEW Comment Form -->
                <div class="well">
                    <h4>Leave a Comment </h4>
                    <p class="politeWarning"><i class="fa fa-heart" aria-hidden="true"></i><em> Watch out, kids about!</em></p>
                    
                    <form action="index.php?page=blogPost&postid=<?= $_GET['postid'] ?>" method="post">
                        <div class="form-group">
                            <label for"comment">Write your comment here: </label>
                            <textarea  name="comment" id="comment" cols="30" class="form-control" rows="5" placeholder="If the green 'Submit' button does not appear below please Login or Sign-up before typing your comment."></textarea>
                        </div>

                        <!-- Only show Comment Submit if logged in -->
                        <?php if( isset($_SESSION['id'])) : ?>
                        <input type="submit" name="new-comment" value="Submit" class="btn btn-success">
                        <?php endif; ?>

                        <?php if( !isset($_SESSION['id'])) : ?>
                            <span>Hi there! <a href="index.php?page=blogLogin">Login</a> OR <a href="index.php?page=blogRegister">Sign-up </a> to make a comment. We'd love to hear from you.</span>
                        <?php endif; ?>


                    </form>

                </div>

                <hr>


                <!-- POSTED Comments -->

                <?php foreach($allComments as $comment): ?>    

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">
                            
                            <?= htmlentities($comment['author']) ?>

                            <small><i class="fa fa-clock-o" aria-hidden="true"></i> Created: <?= $comment['created_at'] ?></small>
                            <small><i class="fa fa-clock-o" aria-hidden="true"></i> Updated: <?= $comment['updated_at'] ?></small>
                            <small> Comment ID# <?= ($comment['id']) ?> </small>

                        </h4>


                        <!-- The Comment -->
                        <p><?= htmlentities($comment['comment']) ?></p>

                        <!-- DELETE comment -->    

                        <?php

                            // Is the visitor logged in?
                            if( isset($_SESSION['id']) ) {

                                // Does this user own the comment?
                                if( $_SESSION['id'] == $comment['user_id'] || $_SESSION['privilege'] == 'admin' ) {
                                    // Yes - logged in user owns the comment OR has Admin privilege!

                                    // echo '<a class="btn btn-danger btn-xs" href="#" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete </a>';

                                    echo ' ';

                                    echo '<a class="btn btn-warning btn-xs" href="index.php?page=editComment&id='. $comment['id'] .'" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </a>';


                                    ?>
                                    <button class="btn btn-danger btn-xs delete-comment">Delete</button>

                                    <div class="delete-comment-options">

                                         <a class="btn btn-danger btn-sm" href="<?= $_SERVER['REQUEST_URI']?>&deleteComment&commentid=<?= $comment['id'] ?>"> Yes please delete comment.</a><button class="btn btn-primary btn-sm">No please keep the comment.</button>                            
                                     </div>

                                    <?php 
                                } 
                            }
                        ?>

                        <br>
                        <br>
                        <br>
                                                
                    </div> <!-- / End media-body -->
                    
                </div> <!-- End of individual comment class="media" -->


                <?php endforeach ?>


            </section>

            <hr>


            <a class="btn btn-primary" href="#">More Comments <i class="fa fa-arrow-down" aria-hidden="true"></i></a>
            
            <hr>

            <!-- back to Blog Home -->

            <ul class="pager">
                <li class="previous">
                    <a href="index.php?page=blogHome">&larr; Back to Main Blog</a>
                </li>        
            </ul>

        </div>

        <!-- Insert Blog Sidebar -->

        <?php $this->insert('partials/blogSidebar') ?>

        <hr>

    </div>  <!-- /.row -->

</div> <!-- /.container -->

<!-- JS for Delete post button toggle-->

<script>

    $(document).ready(function(){

        $('#delete-post, #delete-post-options button').click(function(){
            // Toggle visibility of the Delete options Yes / No
            $('#delete-post-options').toggle();

        });


        $('.delete-comment').click(function(){
            // Toggle visibility of the Delete options Yes / No
            $(this).parent().children('.delete-comment-options').toggle();
            // console.log($(this));
        });


        $('.delete-comment-options button').click(function(){
            // Toggle visibility of the Delete options Yes / No
            $(this).parent().toggle();
            // console.log($(this));
        });
    });

</script>

