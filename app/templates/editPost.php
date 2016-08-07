<?php $this->layout('master') ?>

<!-- Breadcrumbs -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=blogHome">Captains Blog</a></li>
        <!-- <li><a href="index.php?page=blogPending">Posts Pending</a></li>  -->
        <li><a href="index.php?page=editPost" class="active">Edit Post</a></li>    
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
                <small>Edit Post</small>
            </h1>

            <p class="politeWarning"><i class="fa fa-heart" aria-hidden="true"></i><em> Watch out, kids about!</em></p>


            <form action="index.php?page=editPost" method="post">
                
                <div class="form-group">                        
                    <label for="selectReport">Report Topic</label>
                    <select class="form-control" id="selectReport">
                        <option>Choose...</option>
                        <option>Match Report - Senior</option>
                        <option>Match Report - Junior</option>
                        <option>Match Preview - Senior</option>
                        <option>Match Preview - Junior</option>
                        <option>Good Chat - Senior</option>
                        <option>Good Chat - Junior</option>
                    </select>
                </div>
                
                <div class="form-group">                        
                    <label for="selectTeam">Team</label>
                    <select class="form-control" id="selectTeam">
                        <option>Choose...</option>
                        <option>Premier 1</option>
                        <option>Premier 2</option>
                        <option>Colts</option>
                        <option>Year 5</option>
                    </select>
                </div>
                
                <div class="form-group">                        
                    <label for="selectLocation">Location</label>
                    <select class="form-control" id="selectLocation">
                        <option>Choose...</option>
                        <option>Home</option>
                        <option>Away</option>
                    </select>
                </div>

                <div class="form-group">                        
                    <label for="selectGameType">Game Type</label>
                    <select class="form-control" id="selectGameType">
                        <option>Choose...</option>
                        <option>One Day</option>
                        <option>Two Day</option>
                        <option>20/20</option>
                        <option>Milo</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" placeholder="** Pre-populates with User First &amp; Last name. **">
                </div>

                <div class="form-group">
                    <label for="postTitle">Title</label>
                    <input type="text" class="form-control" id="postTitle" placeholder="Title">
                </div>

                <!-- UNSURE about Textarea form for Bootstrap  per next 2 textarea inputs-->

                <div class="form-group">
                    <label for="postIntro">Post Introduction</label>
                    <textarea class="form-control" rows="3" id="postIntro" placeholder="Brief post introduction appears below the image on main blog page and as the intro line to the main content."></textarea>
                </div>

                
                <div class="form-group">
                    <label for="mainPost">Main Post Content</label>
                    <!-- <input type="textarea" class="form-control" id="mainPost" placeholder="This main content follows on from post intro."> -->
                    <textarea class="form-control" rows="10" id="mainPost" placeholder="This main content follows on from Post Introduction above that becomes the first line of the main post."></textarea>
                </div>    

                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Must be .jpg, .jpeg, .png or .gif.</p>
                </div>
              
                <!--  Pending OR Approved checkboxes -->

                <div class="radio">
                    <label>
                        <input type="radio" name="postStatus" id="pendingStatus" value="pending" checked>
                        Pending
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="postStatus" id="approvedStatus" value="approved">
                        Approved
                    </label>
                </div>

                <input type="submit" name="editPost" class="btn btn-primary" value="Submit">
                <!--  <button type="submit" class="btn btn-success">Submit <i class="fa fa-paper-plane" aria-hidden="true"></i></button> -->
                
                <hr>
                <!-- <button type="submit" class="btn btn-danger btn-md"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button> -->

            </form>    

            <!-- Delete Button trigger modal -->
            <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#postDeleteModal"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>

            <!-- Delete Modal -->
            <div class="modal fade" id="postDeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"> Delete Post Confirmation</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you certain that you want to delete this post?</p>
                            
                            <div class="radio">
                                <label>
                                    <input type="radio" name="deleteConfirm" id="noDeleteConfirm" value="no" checked>
                                    NO I want to keep it.
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="deleteConfirm" id="yesDeleteConfirm" value="yes">
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
            <!-- /End Delete Button & Modal-->
    
            <hr>

            <!-- back to Blog Home -->

            <ul class="pager">
                <li class="previous">
                    <a href="index.php?page=blogPost">&larr; Back </a>
                </li>        
            </ul>

        </div>


        <!-- Insert Blog Sidebar -->

        <?php $this->insert('partials/blogSidebar') ?>

    </div>  <!-- /.row -->

</div> <!-- / Container -->
            
