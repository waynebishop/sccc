<?php $this->layout('master') ?>

<!-- Breadcrumbs -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=blogHome">Captains Blog</a></li>
        <li><a href="index.php?page=blogLogin.html" class="active">Login</a></li>     
    </ol>
</div>

<!-- Content -->

<!-- main section -->

<div class="container" id="blogLoginContent">

    <div class="row">

        <!-- Blog Entries Column - takes up 8 of 12 columns -->

        <div class="col-md-8">

            <!-- Blog Search Well -->
            
            <h1 class="page-header">
                Captains Blog
                <small>Login</small>
            </h1>

            <!--  Maintain a User account -->
                     
            <div class="well">
                <h2>Login to the Captains Blog</h2>
                <h4>For registered Blog members only. Not registered yet? You can sign up <a href="index.php?page=blogRegister">here</a>.</h4>

                <br>
                
                <form action="index.php?page=blogLogin" method="post">
                    
                    <div class="input-group">
                        <span class="input-group-addon" id="userName"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" name="userName" class="form-control" placeholder="Username - Usually your email address">
                    </div>

                    <br>

                    <div class="input-group">
                        <span class="input-group-addon" id="password"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <br>
                        
                    <div class="input-group">
                        <input type="submit" name="login" class="btn btn-primary" value="Log in">                 
                    </div>

                </form>

                     
            </div>
       
            <hr>

            <!-- back to Blog Home -->

            <ul class="pager">
                <li class="previous">
                    <a href="index.php?page=blogHome">&larr; Back </a>
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
                <h5 class="politeWarning"><i class="fa fa-heart" aria-hidden="true"></i><em> Watch out, kids about!</em></h5>


                <p>Posts and Comments on this site must be appropriate for children and adults and must not contain offensive language and or content that may be considered abusive, discriminatory, inflammatory or offensive in any way. If we become aware of inappropriate content it will be moderated (edited or removed) by us and the Users registration may be revoked at our sole discretion.</p>
                
                <p>Please see full terms of use here <a href="blogtermsofuse.html">Spin City Cricket Club Blog Terms &amp; Conditions of use</a>.</p>

                <p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Please alert us to any potentially inappropriate content by sending an email with the Post ID# and Comment details to: <a href="mailto:administrator.sccc@xtra.co.nz">admin.sccc@xtra.co.nz</a><em></em></p>
            </div>

        </div>

    </div>
    <!-- /.row -->

    <hr>

</div> <!-- /.container -->

