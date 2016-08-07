<?php $this->layout('master') ?>

<!-- Breadcrumbs -->
<div class="container">
    
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

            <!-- First Blog Post NB image size 750 wide -->
            <h2>
                <a href="#">Premiere 1 win game One</a>
            </h2>
            <p class="lead">
               <a href="index.php">Match Report </a>for team <a href="index.php">Premier 1 </a>by <a href="index.php">Dave Champion </a>Grade: <a href="index.php"> Senior </a><a href="index.php">Premier 1</a>
            </p>

            <p>Location: <a href="#">Home </a>Game: <a href="#">One Day</a></p>

            <p><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Posted on September 28, 2016 at 11:30 PM <span><strong>Post ID#101</strong></span></p>
            <hr>
            <img class="img-responsive" src="img/shaunbat.jpg" alt="">
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
            <a class="btn btn-primary" href="index.php?page=blogPost">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            <hr>

            <!-- Second Blog Post -->
            <h2>
                <a href="#">Premiere 2 win at J'ville</a>
            </h2>
            <p class="lead">
                <a href="index.php">Match Report </a>for team <a href="index.php">Premier 2 </a>by <a href="index.php">Trever Nerk </a>Grade: <a href="index.php"> Senior </a><a href="index.php">Premier 2</a>
            </p>

            <p>Location: <a href="#">Away </a>Game: <a href="#">One Day</a></p>

            <p><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Posted on September 28, 2016 at 9:45 PM <span><strong>Post ID#102</strong></span></p>
            <hr>
            <img class="img-responsive" src="img/shauncatch.jpg" alt="">
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
            <a class="btn btn-primary" href="index.php?page=blogPost">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            <hr>

            <!-- Third Blog Post -->
            <h2>
                <a href="#">Fun day had by all :)</a>
            </h2>
            <p class="lead">
                <a href="index.php">Match Report </a>for team <a href="index.php">Roar </a>by <a href="index.php">Sally Smith </a>Grade: <a href="index.php">Junior </a><a href="index.php">Year 5</a>
            </p>

            <p>Location: <a href="#">Home </a>Game: <a href="#">Milo</a></p>

            <p><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Posted on September 25, 2016 at 7:00 PM <span><strong>Post ID#103</strong></span></p>
            <hr>
            <img class="img-responsive" src="img/shaunbowling.jpg" alt="">
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
            <a class="btn btn-primary" href="index.php?page=blogPost">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            <hr>

            <!-- Fourth -->
            <h2>
                <a href="#">Colts off to great start</a>
            </h2>
            <p class="lead">
                <a href="index.php">Match Report </a>for team <a href="index.php">Colts </a>by <a href="index.php">Master Chief </a>Grade: <a href="index.php">Junior </a><a href="index.php"> Colts</a>
            </p>

            <p>Location: <a href="#">Home </a>Game: <a href="#">40 Over</a></p>

            <p><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Posted on September 21, 2016 at 9:30 PM <span><strong>Post ID#104</strong></span></p>
            <hr>
            <img class="img-responsive" src="img/shauncatch.jpg" alt="">
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
            <a class="btn btn-primary" href="index.php?page=blogPost">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            <hr>

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


    

