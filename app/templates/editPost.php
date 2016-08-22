<?php

  $this->layout('master', [
    'title'=> 'Spin City CC - Edit Blog Post',
    'desc'=>'SCCC Edit a Blog Post'
  ]); 

?>

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

            <h3>ID# <?= htmlentities($tempPostId)?> - <?= htmlentities($originalTitle) ?></h3>

            <br>  

            <!-- $_SERVER['REQUEST_URI' give you a copy paste of the url address bar instead of using $_GET -->
            <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $post['title'] ?>">
                    <span class="politeWarning"><?= isset($titleError) ? $titleError : '' ?></span>
                </div>

                <div class="form-group">                        
                    <label for="report">Report Topic</label>
                    <select class="form-control" id="report" name="report_id">
                        <option value="<?= $post['report_id'] ?>"><?= $post['purpose'] ?> - <?= $post['reportsJrSr'] ?></option>
                        <option value="1">Match Report - Senior</option>
                        <option value="2">Match Report - Junior</option>
                        <option value="3">Match Preview - Senior</option>
                        <option value="4">Match Preview - Junior</option>
                        <option value="5">Good Chat - Senior</option>
                        <option value="6">Good Chat - Junior</option>
                    </select>
                </div>
                
                <div class="form-group">                        
                    <label for="team">Team</label>
                    <select class="form-control" id="team" name="team_id">
                        <option value="<?= $post['report_id'] ?>"><?= $post['team_name'] ?> - <?= $post['teamsJrSr'] ?> <?= $post['grade'] ?></option>
                        <option value="1">Premier 1</option>
                        <option value="2">Year 5 </option>
                    </select>
                </div>
                
                <div class="form-group">                        
                    <label for="location">Location</label>
                    <select class="form-control" id="location" name="location">
                        <option><?= $post['location'] ?></option>
                        <option>Home</option>
                        <option>Away</option>
                        <option>Chat</option>
                    </select>
                </div>

                <div class="form-group">                        
                    <label for="type">Game Type</label>
                    <select class="form-control" id="type" name="type">
                        <option><?= $post['type'] ?></option>
                        <option>One Day</option>
                        <option>Two Day</option>
                        <option>20/20</option>
                        <option>Milo</option>
                        <option>Other</option>
                    </select>
                </div>

                <!-- ** CAUTION make sure no extra paces between textarea tags or they will display! -->
                <div class="form-group">
                    <label for="intro">Post Introduction</label>
                    <textarea class="form-control" rows="3" id="intro" name="intro"><?= $post['intro'] ?></textarea>
                    <span class="politeWarning"><?= isset($introError) ? $introError : '' ?></span>
                </div>

                
                <div class="form-group">
                    <label for="article">Main Post Content</label>
                    <!-- <input type="textarea" class="form-control" id="mainPost" placeholder="This main content follows on from post intro."> -->
                    <textarea class="form-control" rows="10" id="article" name="article"><?= $post['article'] ?></textarea>
                    <span class="politeWarning"><?= isset($articleError) ? $articleError : '' ?></span>
                </div>    


                <!-- Image --> 

                <img src="img/uploads/blogHome/<?= $post['image'] ?>" alt="crcket photograph">

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image">
                    <p class="help-block">Must be .jpg, .jpeg, .png or .gif.</p>
                </div>
              


                <!--  ADMIN Pending OR Approved checkboxes -->

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




                <!-- ** SUBMIT button **-->

                <input type="submit" name="edit-post" class="btn btn-success" value="Submit">
                <span class="politeWarning"><?= isset($updateMessage) ? $updateMessage : '' ?></span>
                
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
            
