<?php $this->layout('master') ?>

<!-- Breadcrumbs -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=blogHome">Captains Blog</a></li>
        <li><a class="active" href="index.php?page=blogRegister">Sign Up</a></li>     
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
                <small>Sign Up</small>
            </h1>

            <!--  Maintain a User account -->
                     
            <div class="well">
                <h2>Sign up for the Captains Blog</h2>
                <h4>For new Blog members only. Already registered? You can Login <a href="index.php?page=login">here</a>.</h4>

                <br>
                
                <form action="index.php?page=blogRegister" method="post">
                    
                    <div class="input-group">
                        <span class="input-group-addon" id="userName"><i class="fa fa-asterisk" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="userName" placeholder="Username - Usually your email address">
                    </div>

                    <br>

                    <div class="input-group">
                        <span class="input-group-addon" id="password"><i class="fa fa-asterisk" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="password" placeholder="Passsword">
                    </div>

                    <br>
                    
                    <div class="input-group">
                        <span class="input-group-addon" id="firstName"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="firstName" placeholder="First name">
                    </div>

                    <br>

                    <div class="input-group">
                        <span class="input-group-addon" id="lastName"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="lastName" placeholder="Last name">
                    </div>

                    <br>

                    <div class="input-group">
                        <span class="input-group-addon" id="email"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="email" placeholder="Email address eg name@gmail.com etc">
                    </div>

                    <br>

                    <div class="input-group">
                        <span class="input-group-addon" id="phoneNumber"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="phoneNumber" placeholder="Contact phone number">
                    </div>

                    <br>

                    <span><i class="fa fa-asterisk" aria-hidden="true"></i> Required fields.</span>

                    <br>
                    <br>
                                                
                    <div class="input-group">                 
                        <button type="button" class="btn btn-success">Submit</button>
                    </div>

                </form>

            </div>
       
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

   
</div> <!-- /.container -->