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

            
            <form>
                
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
                    <input type="text" class="form-control" id="author" placeholder="** Pre-populate with User First &amp; Last name **">
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
                    <p class="help-block">Must be .jpeg, .png or .gif.</p>
                </div>
             
                <input type="submit" name="newPost" class="btn btn-primary" value="Submit"> 

                <!-- <button type="submit" class="btn btn-success">Submit <i class="fa fa-paper-plane" aria-hidden="true"></i></button> -->
            </form>
          

            
            <hr>

            <!-- back to Blog Home -->

            <ul class="pager">
                <li class="previous">
                    <a href="index.php?page=blogHome">&larr; Back </a>
                </li>        
            </ul>

        </div>

        <!-- Insert Blog Sidebar -->

        <?php $this->insert('partials/blogSidebar') ?>



    </div> <!-- /.row -->
</div>  <!-- / Container -->  

