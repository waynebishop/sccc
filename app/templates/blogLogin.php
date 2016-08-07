<?php

  $this->layout('master', [
    'title'=> 'Spin City CC - Blog Login',
    'desc'=>'SCCC Login to Cricket Blog Page'
  ]); 

?>

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


        <!-- Insert Blog Sidebar -->

        <?php $this->insert('partials/blogSidebar') ?>

    </div>
    <!-- /.row -->

</div> <!-- /.container -->

