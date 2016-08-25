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
                
                <form action="index.php?page=editComment&id=<?= $_GET['id'] ?>" method="post">    
                
                    <div class="form-group">
                        <label for="comment"><h4>Edit your Comment:</h4>
                        <p class="politeWarning"><i class="fa fa-heart" aria-hidden="true"></i><em> Watch out, kids about!</em></p></label>
                        <textarea class="form-control" rows="3" name="comment" id="comment"><?= $comment ?></textarea>
                    </div>

                    <input type="submit" name="edit-comment" value="Submit changes" class="btn btn-primary">
                    
                </form>
            </div>
                                    
            <hr> <!-- /. edit comment -->
            
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