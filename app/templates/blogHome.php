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

            <!-- ** ADMIN privilege BUTTONS **-->

            <!-- First check if logge in -->
            <?php if( isset($_SESSION['id']) ): ?>

                <!-- Second check if has admin privilege & if true show Admin buttons -->

                <?php if($_SESSION['privilege'] == 'admin') : ?>
                <!-- Post Pending Button Alert for Admin only -->    
                <a class="btn btn-warning" href="index.php?page=blogPending" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Posts Pending: 4</a>

                <!-- Admin Maintenance Button for Admin only -->
                <a class="btn btn-info" href="index.php?page=blogAdmin" role="button"><i class="fa fa-cog" aria-hidden="true"></i> Blog Admin</a>

                <?php endif; ?>

                <!-- Third check for author privilege - if true show Post button -->
                
                <?php if($_SESSION['privilege'] == 'author' || $_SESSION['privilege'] == 'admin') : ?> 
             
                <!-- Create a new post Button -->
                <a class="btn btn-success" href="index.php?page=newPost" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Create New Post</a>

                 <?php endif; ?>

            <?php endif; ?>  


             <!-- BLOG POSTS -->


            <h1 class="page-header">
                Captains Blog
                <small>Reports &amp; Chat</small>
            </h1>

            <!-- BLOG POSTS start here -->

            <?php foreach($allPosts as $item): ?>

            <article>

                <!-- Blog Post NB image size 750 x 500 -->
                <h2>
                    <a href="index.php?page=blogPost&postid=<?= $item['id'] ?>"> <?= htmlentities($item['title']) ?> </a>
                </h2>

                <p class="lead">
                   <a href="index.php"><?= $item['purpose'] ?> </a> for team <a href="index.php"><?= $item['team_name'] ?> </a>in grade <a href="index.php"><?= $item['teamsJrSr'] ?> <?= $item['grade'] ?></a>. By <a href="index.php"><?= $item['first_name'] ?> <?= $item['last_name'] ?>
                   </a>
                </p>

                <p>Location: <a href="#"> <?= $item['location'] ?> </a>Game: <a href="#"> <?= $item['type'] ?> </a>
                <span><strong>Post ID: <?= $item['id'] ?> </strong></span>
                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Posted on: <?= $item['created_at'] ?></span>
                <span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Updated on: <?= $item['updated_at'] ?> <span>
                </p>

                
                <br>

                <!-- IMAGE section -->

                <div class="row">
                    <div class="col-md-8 col-md-offset-2" class="bg-info">

                        <a href="index.php?page=blogPost&postid=<?= $item['id'] ?>">
                            <img class="img-responsive" src="img/uploads/blogHome/<?= $item['image'] ?>" alt="Acricket photograph">
                        </a>

                    </div>
                </div>

                <br>

                <!-- Intro -->

                <div class="row">
                    <div class="col-md-10 col-md-offset-1" class="bg-info">

                        <p> <strong> <?= htmlentities($item['intro']) ?> </strong></p>

                    </div>
                </div>
                
                <!-- READ MORE BUTTON -->

                <div class="row">
                    <div class="col-md-1 col-md-offset-8" class="bg-info">
                        <a class="btn btn-primary" href="index.php?page=blogPost&postid=<?= $item['id'] ?>">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>

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


    

