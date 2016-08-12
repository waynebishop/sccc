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
                <small>Reports &amp; Chat</small>
            </h1>

            <article>

                <!-- Blog Post -->
                <h2><?= $post['title'] ?></h2>

                <p class="lead">
                   <a href="index.php"> TeamNameSr/Jr </a>for team <a href="index.php">Premier 1 </a>by <a href="index.php"> <?= $post['first_name'].' '.$post['last_name'] ?> </a>Grade: <a href="index.php"> Premier 1</a>
                </p>

                <p>Location: <a href="#"><?= $post['location'] ?></a> Game: <a href="#"><?= $post['type'] ?></a>
                <span><strong> Post ID# <?= isset($tempPostID) ? $tempPostID : 'TBC' ?></strong></span>
                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Posted on <?= $post['created_at'] ?>
                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Post Updated <?= $post['updated_at'] ?></p>

                <!-- Image -->

                <hr>
                <img class="img-responsive" src="img/uploads/blogPost/<?= $post['image'] ?>" alt="A cricket photograph">
                <hr>

                <p><?= $post['intro'] ?></p>

                <p><?= $post['article'] ?></p>

                <a class="btn btn-warning btn-sm" href="index.php?page=editPost" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Post</a>



                <!-- Post Delete Button trigger modal -->

                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#postDeleteModal"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>

                <!-- Post Delete Modal -->
                <div class="modal fade" id="postDeleteModal" tabindex="-1" role="dialog" aria-labelledby="postDelete">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="postDelete"> Delete Post Confirmation</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you certain that you want to delete this post?</p>
                                
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="postDeleteConfirm" value="no" checked>
                                        NO I want to keep it.
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="postDeleteConfirm" value="yes">
                                        YES please delete the post.
                                    </label>
                                </div>
           
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Submit </button>
                            </div>
                        </div>
                    </div> 
                </div> <!-- /End Delete Post Button & Modal-->

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
                            <textarea  name="comment" id="comment" cols="30" class="form-control" rows="5"></textarea>
                        </div>

                        <input type="submit" name="new-comment" value="Submit">

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
                        </h4>


                        <!-- The Comment -->
                        <p><?= htmlentities($comment['comment']) ?></p>

                        <!-- DELETE comment -->    

                        <?php

                            // Is the visitor logged in?
                            if( isset($_SESSION['id']) ) {

                                // Does this user own the comment?
                                if( $_SESSION['id'] == $comment['user_id'] ) {
                                    // Yes - logged in user owns the comment!
                                    echo 'Delete';
                                    echo ' Edit';

                                } 
                            }

                        ?>

                        <br>

                        <!-- Original DELETE and EDIT buttons and DELETE modals -->

                        <a class="btn btn-warning btn-xs" href="index.php?page=editComment" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </a>

                        <!-- Comment Delete Button & modal -->

                        <!-- Comment Delete Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#commentDeleteModal1"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>

                        <!-- Delete Comment Modal -->

                        <div class="modal fade" id="commentDeleteModal1" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="commentDelete"> Delete Comment Confirmation</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you certain that you want to delete this comment?</p>
                                        
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="commentDeleteConfirm" value="no" checked>
                                                NO I want to keep it.
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="commentDeleteConfirm" value="yes">
                                                YES please delete this comment.
                                            </label>
                                        </div>
                   
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Submit </button>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                        <!-- /End Comment Delete Button & Modal-->

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

