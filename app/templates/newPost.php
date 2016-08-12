<?php

  $this->layout('master', [
    'title'=> 'Spin City CC - New Blog Post',
    'desc'=>'SCCC Create a new Blog post'
  ]); 

?>

<!-- Breadcrumbs -->
<div class="container">
    
    <ol class="breadcrumb">
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=blogHome">Captains Blog</a></li>
        <li><a href="index.php?page=newPost" class="active">New Blog Post</a></li>    
    </ol>


</div>

<!-- Content -->

<!-- main blog post section -->

<div class="container" id="blogHomeContent">

    <div class="row">

        <!-- Blog Entries Column - takes up 8 of 12 columns -->

        <div class="col-md-8">

            <!-- Blog Search Well -->
            
            <h1 class="page-header">
                Captains Blog
                <small>Create New Post</small>
            </h1>

            <p class="politeWarning"><i class="fa fa-heart" aria-hidden="true"></i><em> Watch out, kids about!</em></p>



            <!-- ** Start of Form ** -->
            
            <form action="index.php?page=newPost" method="post" enctype="multipart/form-data">

                <!-- Report Type -->
                
                <div class="form-group">                        
                    <label for="report">Report Topic / Type</label>
                    <select class="form-control" name="report" id="report">
                        <option value="0">Choose...</option>
                        <option value="1">Match Report - Senior</option>
                        <option value="2">Match Report - Junior</option>
                        <option value="3">Match Preview - Senior</option>
                        <option value="4">Match Preview - Junior</option>
                        <option value="5">Good Chat - Senior</option>
                        <option value="6">Good Chat - Junior</option>
                    </select>

                    <?= isset($reportMessage) ? $reportMessage : '' ?>

                </div>

                
                <!-- Team -->

                <div class="form-group">                        
                    <label for="team">Team</label>
                    <select class="form-control" id="team" name="team">
                        <option value="0">Choose...</option>
                        <option value="1">Premier 1 - Premiers</option>
                        <option value="2">Year 5 - Tigers</option>
                    </select>

                    <?= isset($teamMessage) ? $teamMessage : '' ?>

                </div>

                <!-- Home / Away -->
                
                <div class="form-group">                        
                    <label for="location">Location</label>
                    <select class="form-control" id="location" name="location">
                        <option>Choose...</option>
                        <option>Home</option>
                        <option>Away</option>
                        <option>Chat</option>
                    </select>

                    <?= isset($locationMessage) ? $locationMessage : '' ?>

                </div>

                <!-- Game Type -->

                <div class="form-group">                        
                    <label for="type">Game Type</label>
                    <select class="form-control" id="type" name="type">
                        <option>Choose...</option>
                        <option>One Day</option>
                        <option>Two Day</option>
                        <option>20/20</option>
                        <option>Milo</option>
                        <option>Chat</option>
                        <option>Other</option>
                    </select>

                    <?= isset($typeMessage) ? $typeMessage : '' ?>

                </div>

                <!-- Title -->

                <div class="form-group">
                    <label for="title">Title: </label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title for your post" >
                    <?= isset($titleMessage) ? $titleMessage : '' ?>
                </div>

                

                <!-- UNSURE about Textarea form for Bootstrap  per next 2 textarea inputs-->

                <!-- Intro -->

                <div class="form-group">
                    <label for="intro">Introduction</label>
                    <textarea class="form-control" rows="3" name="intro" id="intro" placeholder="Brief post introduction appears below the image on main blog page and as the intro line to the main content."></textarea>
                    <?= isset($introMessage) ? $introMessage : '' ?>
                </div>

                <!-- Article / Main Content -->

                <div class="form-group">
                    <label for="article">Main Content</label>
                    <!-- <input type="textarea" class="form-control" id="mainPost" placeholder="This main content follows on from post intro."> -->
                    <textarea class="form-control" rows="10" name="article" id="article" placeholder="This main content follows on from Post Introduction above that becomes the first line of the main post."></textarea>
                    <?= isset($articleMessage) ? $articleMessage : '' ?>
                </div>

                <!-- Image -->

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image">
                    <p class="help-block">Must be .jpeg, .png or .gif.</p>
                    <p class="politeWarning"><?= isset($imageMessage) ? $imageMessage : '' ?></p>
                </div>

                <!-- ** Submit Button ** -->
             
                <input type="submit" name="new-post" class="btn btn-primary" value="Submit">
                <?= isset($postMessage) ? $postMessage : '' ?> 

            </form>  <!-- End of Form-->
          

            
            <hr>

            <!-- back to Blog Home -->

            <ul class="pager">
                <li class="previous">
                    <a href="index.php?page=blogHome">&larr; Back to Captains Blog</a>
                </li>        
            </ul>

        </div>

        <!-- Insert Blog Sidebar -->

        <?php $this->insert('partials/blogSidebar') ?>



    </div> <!-- /.row -->
</div>  <!-- / Container -->  

