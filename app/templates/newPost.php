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
                        <option <?= isset($_POST['new-post']) ? $_POST['report'] : '0' ?> ><?= isset($_POST['new-post']) ? $_POST['report'] : 'Choose...' ?></option>
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
                        <option <?= isset($_POST['new-post']) ? $_POST['team'] : '' ?> ><?= isset($_POST['new-post']) ? $_POST['team'] : 'Choose...' ?></option>
                        <option value="1">Senior - Premier</option>
                        <option value="2">Senior - Premier Reserve</option>
                        <option value="3">Senior - 3rd XI - Second Grade</option>
                        <option value="4">Senior - 4th XI - Third Grade</option>
                        <option value="5">Senior - Hotshots - Twenty20</option>
                        <option value="6">Senior - Masters- Twenty20</option>
                        <option value="7">Senior - Premier - Womans</option>
                        <option value="8">Senior - Premier Reserve - Womens</option>
                        <option value="9">Junior - Premier - Girls</option>
                        <option value="10">Junior - Champs - Year 2</option>
                        <option value="11">Junior - Budgies - Year 3</option>
                        <option value="12">Junior - Comets - Year 4</option>
                        <option value="13">Junior - Thunder - Year 5</option>
                        <option value="14">Junior - Rockets - Yr 5 Girls Quick-hit</option>
                        <option value="15">Junior - Sluggers  Year 6</option>
                        <option value="16">Junior - Rabbits - T20 Year 6</option>
                        <option value="17">Junior - Storm - Year 7</option>
                        <option value="18">Junior - Eagles - T20 Yr 7/8</option>
                        <option value="19">Junior - Sharks - Year 8</option>
                        <option value="20">Junior - Hawks - Yr 8 Girls Quick-hit</option>
                        <option value="21">Junior - Junior Blaze - Girls</option>
                        <option value="22">Junior - Colts</option>
                        <option value="23">Junior - Premier</option>
                    </select>

                    <?= isset($teamMessage) ? $teamMessage : '' ?>

                </div>

                <!-- Home / Away -->
                
                <div class="form-group">                        
                    <label for="location">Location</label>
                    <select class="form-control" id="location" name="location">
                        <option><?= isset($_POST['new-post']) ? $_POST['location'] : 'Choose...' ?></option>
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
                        <option><?= isset($_POST['new-post']) ? $_POST['type'] : 'Choose...' ?></option>
                        <option>One Day</option>
                        <option>Two Day</option>
                        <option>Twenty20</option>
                        <option>Milo</option>
                        <option>Chat</option>
                        <option>Other</option>
                    </select>

                    <?= isset($typeMessage) ? $typeMessage : '' ?>

                </div>

                <!-- Title -->

                <div class="form-group">
                    <label for="title">Title: </label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Title for your post" 
                    value="<?= isset($_POST['new-post']) ? $_POST['title'] : '' ?>">
                    <?= isset($titleMessage) ? $titleMessage : '' ?>
                </div>

                

                <!-- UNSURE about Textarea form for Bootstrap  per next 2 textarea inputs-->

                <!-- Intro -->

                <div class="form-group">
                    <label for="intro">Introduction</label>
                    <textarea class="form-control" rows="3" name="intro" id="intro" placeholder="Brief post introduction appears below the image on main blog page and as the intro line to the main content."><?= isset($_POST['new-post']) ? $_POST['intro'] : '' ?></textarea>
                    <?= isset($introMessage) ? $introMessage : '' ?>
                </div>

                <!-- Article / Main Content -->

                <div class="form-group">
                    <label for="article">Main Content</label>
                    <!-- <input type="textarea" class="form-control" id="mainPost" placeholder="This main content follows on from post intro."> -->
                    <textarea class="form-control" rows="10" name="article" id="article" placeholder="This main content follows on from Post Introduction above that becomes the first line of the main post."><?= isset($_POST['new-post']) ? $_POST['article'] : '' ?></textarea>
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

