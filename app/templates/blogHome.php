<?php

  $this->layout('master', [
    'title'=> 'Spin City CC - Captains Blog',
    'desc'=>'SCCC cricket blog page'
  ]); 

?>

<!-- Breadcrumbs -->
<div class="container">

    <!-- ***** THIS IS JUST TO SHOW SESSION ID ***** -->
    <!-- <?= $_SESSION['id'] ?> -->
    
    <ol class="breadcrumb">
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=blogHome" class="active">Captains Blog</a></li>    
    </ol>

</div>

<!-- Content -->   

<!-- main blog post section -->

<div class="container" id="blogHomeContent">

    <div class="row">

        <!-- Blog Entries Column - takes up 8 of 12 columns -->

        <div class="col-md-8">

            <!-- Post Pending Button Alert for Admin only -->
            <a class="btn btn-warning" href="index.php?page=blogPending" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Posts Pending: 4</a>

            <!-- Admin Maintenance Button for Admin only -->
            <a class="btn btn-info" href="index.php?page=blogAdmin" role="button"><i class="fa fa-cog" aria-hidden="true"></i> Blog Admin</a>
            
            <!-- Create a new post Button -->

            <a class="btn btn-success" href="index.php?page=newPost" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Create New Post</a>

            <h1 class="page-header">
                Captains Blog
                <small>Reports &amp; Chat</small>
            </h1>

            <?php foreach($allPosts as $item): ?>

            <article>

                <!-- Blog Post NB image size 750 x 500 -->
                <h2>
                    <a href="#"></a>
                </h2>
                <p class="lead">
                   <a href="index.php">REPORT </a>for team <a href="index.php">TEAM </a>by <a href="index.php">AUTHOR </a>Grade: <a href="index.php"> JUNIOR-SENIOR </a><a href="index.php">GRADE</a>
                </p>

                <p>Location: <a href="#">HOME/AWAY </a>Game: <a href="#">GAME-TYPE</a></p>

                <p><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Posted on September 28, 2016 at 11:30 PM <span><strong>Post ID#101</strong></span></p>
                <hr>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2" class="bg-info">
                        <img class="img-responsive" src="" alt="">
                    </div>
                </div>
                
                <hr>
                <p> </p>
                <a class="btn btn-primary" href="index.php?page=blogPost">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <hr>

            </article>

            <?php endforeach ?>

            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Insert Blog Sidebar -->

        <?php $this->insert('partials/blogSidebar') ?>

        <hr>    

    </div>    <!-- /.row -->

</div> <!-- /.container -->


    

