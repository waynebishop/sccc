<?php $this->layout('master') ?>

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
             
             
                <button type="submit" class="btn btn-success">Submit <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </form>
          

            
            <hr>

            <!-- back to Blog Home -->

            <ul class="pager">
                <li class="previous">
                    <a href="blogHome.html">&larr; Back </a>
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
                <h3>Topics</h3> 
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Seniors</h4>
                        <ul class="list-unstyled">
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
                <h5 class="politeWarning"><i class="fa fa-heart" aria-hidden="true"></i><em> Watch out, kids about!</em></h5>


                <p>Posts and Comments on this site must be appropriate for children and adults and must not contain offensive language and or content that may be considered abusive, discriminatory, inflammatory or offensive in any way. If we become aware of inappropriate content it will be moderated (edited or removed) by us and the Users registration may be revoked at our sole discretion.</p>
                
                <p>Please see full terms of use here <a href="blogtermsofuse.html">Spin City Cricket Club Blog Terms &amp; Conditions of use</a>.</p>

                <p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Please alert us to any potentially inappropriate content by sending an email with the Post ID# and Comment details to: <a href="mailto:administrator.sccc@xtra.co.nz">admin.sccc@xtra.co.nz</a><em></em></p>
            </div>

        </div>

    </div> <!-- /.row -->
</div>  <!-- / Container -->  

