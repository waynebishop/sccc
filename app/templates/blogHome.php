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

            <!-- BLOG POSTS start here -->

            <?php foreach($allPosts as $item): ?>

            <article>

                <!-- Blog Post NB image size 750 x 500 -->
                <h2>
                    <a href="#"> <?= $item['title'] ?> </a>
                </h2>

                <p class="lead">
                   <a href="index.php">ReportID: <?= $item['report_id'] ?> </a> for team <a href="index.php">TeamID: <?= $item['team_id'] ?> </a>by <a href="index.php">AuthorID: <?= $item['user_id'] ?>
                   </a>Grade: <a href="index.php"> JR T-Table </a><a href="index.php">GRD T-Table</a>
                </p>

                <p>Location: <a href="#"> <?= $item['location'] ?> </a>Game: <a href="#"> <?= $item['type'] ?> </a>
                <span><strong>Post # <?= $item['id'] ?> </strong></span>
                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Posted on: <?= $item['created_at'] ?></span>
                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Updated on: <?= $item['updated_at'] ?> <span>
                </p>

                
                <hr>

                <!-- IMAGE section -->

                <div class="row">
                    <div class="col-md-8 col-md-offset-2" class="bg-info">
                        <img class="img-responsive" src="img/<?= $item['image'] ?>" alt="">
                    </div>
                </div>

                <br>

                <!-- Intro -->

                <p> <strong> <?= $item['intro'] ?> </strong></p>
                
                <hr>
                
                <!-- READ MORE BUTTON -->

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


    

