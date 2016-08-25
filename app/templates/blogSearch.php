<?php

  $this->layout('master', [
    'title'=> 'Spin City CC - Blog Search Results',
    'desc'=>'SCCC cricket blog search results page'
  ]); 

?>

<!-- Breadcrumbs -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=blogHome">Captains Blog</a></li>
        <li><a href="index.php?page=blogHome" class="active">Captains Blog Search</a></li>     
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

            <!-- Page Heading  -->

            <h1 class="page-header">
                Captains Blog
                <small>Search Results</small>
            </h1>  
            
            <!-- ** Display Search Results ** -->

            <h2>Search results for "<i><?= $this->e($searchTerm) ?></i>"</h2>

            <?php if(strlen($searchTerm) > 0): ?>
                <?php if($searchResults > 0): ?>
                    <?php foreach($searchResults as $Result): ?>
                        <h3><?= $Result['score_title'] ?> </h3>
                        <p><?= $Result['score_intro'] ?> </p>
                        <a href="index.php?page=blogPost&postid=<?= $Result['id'] ?>">View Post ID# <?= $Result['id'] ?></a>

                        <hr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>There were no results for "<i><?= $this->e($searchTerm) ?></i>"</p>
                <?php endif; ?>
            <?php else: ?>
                <p>Please enter details in the search bar.</p>
            <?php endif; ?>                    


            <!-- Pager FUTURE ENHANCEMENT -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

            <hr>
            <br>
            <br>

            <!-- back to Blog Home -->

            <ul class="pager">
                <li class="previous ">
                    <a href="index.php?page=blogHome">&larr; Back to Main Blog</a>
                </li>        
            </ul>

        </div>

        <!-- Insert Blog Sidebar -->

        <?php $this->insert('partials/blogSidebar') ?>

        <hr>    

    </div>    <!-- /.row -->

</div> <!-- /.container -->


    













