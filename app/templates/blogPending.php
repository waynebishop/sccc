<?php $this->layout('master') ?>

<!-- Breadcrumbs -->
<div class="container">
    
    <ol class="breadcrumb">
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=blogHome">Captains Blog</a></li>
        <li><a class="active" href="index.php?page=blogPending">Blog Posts Pending</a></li>    
    </ol>
</div>

<!-- Content -->   

<!-- main blog post section -->

<div class="container" id="blogHomeContent">

    <div class="row">

        <!-- Blog Entries Column - takes up 8 of 12 columns -->

        <div class="col-md-8">
            
            <h1 class="page-header">
                Captains Blog
                <small>Posts Pending Approval</small>
            </h1>

            <!-- First Blog Post -->
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
            <a class="btn btn-primary" href="editPost.html">Edit &amp; Approve <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            <hr>

            <!-- Second Blog Post -->
            <h2>
                <a href="#">Premiere 2 win at J'ville</a>
            </h2>
            <p class="lead">
                <a href="index.php">Match Report </a>for team <a href="index.php">Premier 2 </a>by <a href="index.php">Trever Nerk </a>Grade: <a href="index.php"> Senior </a><a href="index.php">Premier 2</a>
            </p>

            <p>Location: <a href="#">Home </a>Game: <a href="#">One Day</a></p>

            <p><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Posted on September 28, 2016 at 9:45 PM <span><strong>Post ID#102</strong></span></p>
            <hr>
            <img class="img-responsive" src="img/shauncatch.jpg" alt="">
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
            <a class="btn btn-primary" href="editPost.html">Edit &amp; Approve <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            <hr>

            <!-- Third Blog Post -->
            <h2>
                <a href="#">Fun day had by all :)</a>
            </h2>
            <p class="lead">
                <a href="index.php">Match Report </a>for team <a href="index.php">Roar </a>by <a href="index.php">Sally Smith </a>Grade: <a href="index.php">Junior </a><a href="index.php">Year 5</a>
            </p>

            <p>Location: <a href="#">Home </a>Game: <a href="#">One Day</a></p>

            <p><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Posted on September 25, 2016 at 7:00 PM <span><strong>Post ID#103</strong></span></p>

            <hr>
            <img class="img-responsive" src="img/shauncatch.jpg" alt="">
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
            <a class="btn btn-primary" href="editPost.html">Edit &amp; Approve <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            <hr>

            <!-- Fourth -->
            <h2>
                <a href="#">Colts off to great start</a>
            </h2>
            <p class="lead">
                <a href="index.php">Match Report </a>for team <a href="index.php">Colts </a>by <a href="index.php">Master Chief </a>Grade: <a href="index.php">Junior </a><a href="index.php"> Colts</a>
            </p>

            <p>Location: <a href="#">Home </a>Game: <a href="#">One Day</a></p>
            
            <p><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Posted on September 21, 2016 at 9:30 PM <span><strong>Post ID#104</strong></span></p>
            <hr>
            <img class="img-responsive" src="img/shauncatch.jpg" alt="">
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
            <a class="btn btn-primary" href="editPost.html">Edit &amp; Approve <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

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

        <!-- Blog Sidebar Widgets Column - takes up 4 columns. For mobile topnav changes to hamburger & side bar stacks underneath -->
        
        <div class="col-md-4">
        
            <div class="well">
                <!-- <h4>Blog Search</h4> -->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Captains Blog Search">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" >
                            <span><i class="fa fa-search" aria-hidden="true"></i></span>
                    </button>
                    </span>
                </div>
                <!-- /.input-group -->
            </div>

            <div class="well">
                <h3>Report Type</h3>
	            <div class="row">
	                <div class="col-lg-6">
	                    <h4>Seniors</h4>
	                    <ul class="list-unstyled">
	                        <li><a href="#">All Reports</a>
                            </li>
                            <li><a href="#">Match Reports</a>
	                        </li>
	                        <li><a href="#">Match Previews</a>
	                        </li>
	                        <li><a href="#">Good Chat</a>
	                        </li>
	                    </ul>      
	                </div>
	                <!-- /.col-lg-6 -->
	                <div class="col-lg-6">
	                    <h4>Juniors</h4>
	                   
	                    <ul class="list-unstyled">
	                        <li><a href="#">All Reports</a>
                            </li>
                            <li><a href="#">Match Reports</a>
	                        </li>
	                        <li><a href="#">Match Previews</a>
	                        </li>
	                        <li><a href="#">Good Chat</a>
	                        </li>
	                    </ul>
	                </div>
	                <!-- /.col-lg-6 -->
	            </div>
	            <!-- /.row -->
	        </div>	


            <div class="well">
                
                <h3>Teams</h3>
                <div class="row">

                    <div class="col-lg-6">
                        
                        <h4>Seniors</h4>  
                        <ul class="list-unstyled">
                            <li><a href="#">Premier 1</a>
                            </li>
                            <li><a href="#">Premier 2</a>
                            </li>
                            <li><a href="#">3rd Grade</a>
                            </li>
                            <li><a href="#">20/20 Tigers</a>
                            </li>
                            <li><a href="#">20/20 Bobcats</a>
                            </li>
                            <li><a href="#">20/20 Oldcodgers</a>
                            </li>
                        </ul>

                        
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">  

                        <h4>Juniors</h4>  
                        <ul class="list-unstyled">
                            <li><a href="#">Year 5 Thunder</a>
                            </li>
                            <li><a href="#">Year 5 Roar</a>
                            </li>
                            <li><a href="#">Year 6 Phoenix</a>
                            </li>
                            <li><a href="#">Year 6 Superkings</a>
                            </li>
                            <li><a href="#">Year 7 Hurricanes</a>
                            </li>
                            <li><a href="#">Year 7 Big-Hitters</a>
                            </li>
                        </ul>

                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>        

            <!-- Conduct Well -->

            <div class="well">
                <h4>Appropriate Conduct</h4>
                <h5><i class="fa fa-heart" aria-hidden="true"></i><em> Watch out, kids about! </em></h5>


                <p>Posts and Comments on this site must be appropriate for children and adults and must not contain offensive language and or content that may be considered abusive, discriminatory, inflammatory or offensive in any way. If we become aware of inappropriate content it will be moderated (edited or removed) by us and the Users registration may be revoked at our sole discretion.</p>
                
                <p>Please see full terms of use here <a href="blogtermsofuse.html">Spin City Cricket Club Blog Terms &amp; Conditions of use</a>.</p>

                <p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Please alert us to any potentially inappropriate content by sending an email with the Post ID# and Comment details to: <a href="mailto:administrator.sccc@xtra.co.nz">admin.sccc@xtra.co.nz</a><em></em></p>
            </div>

        </div>

    <hr>    

    </div>   <!-- /.row -->
    
</div> <!-- /.container -->
