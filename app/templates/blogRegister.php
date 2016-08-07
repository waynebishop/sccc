<?php

  $this->layout('master', [
    'title'=> 'Spin City CC - Blog Sign up',
    'desc'=>'SCCC Sign up for cricket blog'
  ]); 

?>

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
                <h4>For new Blog members only. Already registered? You can Login <a href="index.php?page=blogLogin">here</a>.</h4>

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
                        <input type="submit" name="login" class="btn btn-primary" value="Sign Up">                 
                        <!-- <button type="button" class="btn btn-success">Submit</button> -->
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

        <!-- Insert Blog Sidebar -->

        <?php $this->insert('partials/blogSidebar') ?>


    </div>
    <!-- /.row -->
  
</div> <!-- /.container -->