<?php

  $this->layout('master', [
    'title'=> 'Spin City CC - Blog Edit Comment',
    'desc'=>'SCCC Edit a Blog Comment'
  ]); 

?>

<!-- Breadcrumbs -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="index.php?page=blogHome">Captains Blog</a></li>
        <li><a href="index.php?page=blogPost">Blog Post</a></li> 
        <li><a href="index.php?page=editComment" class="active">Edit Comment</a></li>    
    </ol>

</div>

<!-- Content -->

<!-- main blog post section -->

<div class="container" id="blogHomeContent">

    <div class="row">

        <!-- Blog Edit Section Column - takes up 8 of 12 columns -->

        <div class="col-md-8">

            <!-- Comment Edit Well -->
            
            <h1 class="page-header">
                Captains Blog
                <small>Edit Comment</small>
            </h1> 
            <div class="well">
                <!-- <h4>Edit your Comment:</h4>
                <p class="politeWarning"><i class="fa fa-heart" aria-hidden="true"></i><em> Watch out, kids about!</em></p> -->

                <form action="index.php?page=editComment&id=<?= $_GET['id'] ?>" method="post">    
                
                    <div class="form-group">
                        <label for="comment"><h4>Edit your Comment:</h4>
                        <p class="politeWarning"><i class="fa fa-heart" aria-hidden="true"></i><em> Watch out, kids about!</em></p></label>
                        <textarea class="form-control" rows="3" name="comment" id="comment"><?= $comment ?></textarea>
                    </div>

                    <input type="submit" name="edit-comment" value="Submit changes" class="btn btn-primary">
                    <!-- <button type="submit" name="editComment" class="btn btn-primary">Submit <i class="fa fa-paper-plane" aria-hidden="true"></i></button> -->

                </form>
            </div>
                                    
            <hr> <!-- /. edit comment -->
            
            <!-- Comment Delete Button & modal -->

            <!-- Comment Delete Button trigger modal -->
            <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#commentDeleteModal"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete </button>

            <!-- Delete Comment Modal -->

            <div class="modal fade" id="commentDeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                    <input type="radio" name="commentDeleteConfirm" id="DontDeleteConfirm" value="no" checked>
                                    NO I want to keep it.
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="commentDeleteConfirm" id="YesDeleteConfirm" value="yes">
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
            
            <hr>

            <!-- back to BlogPost -->

            <ul class="pager">
                <li class="previous">
                    <a href="index.php?page=blogHome">&larr; Back to Captains Blog</a>
                </li>        
            </ul>

        </div>

        <!-- Insert Blog Sidebar -->

        <?php $this->insert('partials/blogSidebar') ?>            

    </div>
    <!-- /.row -->

</div> <!-- / container -->