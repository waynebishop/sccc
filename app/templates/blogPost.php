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

            <!-- Blog Search Well -->
            
            <h1 class="page-header">
                Captains Blog
                <small>Reports &amp; Chat</small>
            </h1>

            <!-- First Blog Post -->
            <h2>
                <a href="#">Premiere 1 win game One</a>
            </h2>
            <p class="lead">
               <a href="index.php">Match Report </a>for team <a href="index.php">Premier 1 </a>by <a href="index.php">Dave Champion </a>Grade: <a href="index.php"> Premier 1</a>
            </p>

            <p>Location: <a href="#">Home </a>Game: <a href="#">One Day</a></p>

            <p><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Posted on September 28, 2016 at 11:30 PM <span><strong>Post ID#101</strong></span></p>
            <hr>
            <img class="img-responsive" src="img/shaunbat.jpg" alt="">
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

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
            </div> 
            <!-- /End Delete Post Button & Modal-->

            <hr>

            <!-- Blog Comments -->

            <!-- Comments Form -->
            <div class="well">
                <h4>Leave a Comment </h4>
                <p class="politeWarning"><i class="fa fa-heart" aria-hidden="true"></i><em> Watch out, kids about!</em></p>
                <form>
                    <div class="form-group">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </form>
            </div>

            <hr>

            <!-- Posted Comments -->

            <!-- Comment 1 -->
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Fred Flintstone
                        <small>October 2, 2016 at 9:30 AM</small>
                    </h4>
                    Yabba Dabba Doo! This is the best post I have ever read. Can't wait for the next game.

                    <br>
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
                
            </div> <!-- End of comment 1 class="media" -->

            <hr>

            <!-- Comment 2 -->
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Barney Rubble
                        <small>August 25, 2014 at 9:30 PM</small>
                    </h4>
                    You're right Fred. I am like totally stoked and loving the cricket.
                    <br>
                    <a class="btn btn-warning btn-xs" href="index.php?page=editComment" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </a>
                    
                    
                    <!-- Comment Delete Button & modal -->

                    <!-- Comment Delete Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#commentDeleteModal2"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>

                    <!-- Delete Comment Modal -->

                    <div class="modal fade" id="commentDeleteModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"> Delete Comment Confirmation</h4>
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

                </div> <!-- Emd of media-body -->

                <hr>

            </div> <!-- Emd of comment 2 class="media" -->

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
