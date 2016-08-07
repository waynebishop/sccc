<?php $this->layout('master') ?>

<!-- Breadcrumbs -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=blogHome">Captains Blog</a></li>
        <li><a class="active" href="index.php?page=blogMyAccount">My Account</a></li>     
    </ol>
</div>

<!-- Content -->

<!-- main section -->

<div class="container" id="myAccountContent">

    <div class="row">

        <!-- Blog Entries Column - takes up 8 of 12 columns -->

        <div class="col-md-8">

            <!-- Blog Search Well -->
            
            <h1 class="page-header">
                Captains Blog
                <small>My Account</small>
            </h1>

            <!--  Maintain a User account -->
                     
            <div class="well">
                <h2>Update your details</h2>
                
                <form action="index.php?page=blogMyAccount" method="post">

                    <div class="input-group">
                        <span class="input-group-addon" id="FirstName"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="First name">
                    </div>

                    <br>

                    <div class="input-group">
                        <span class="input-group-addon" id="LastName"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>

                    <br>

                    <div class="input-group">
                        <span class="input-group-addon" id="Email"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Email address eg name@gmail.com etc">
                    </div>

                    <br>

                    <div class="input-group">
                        <span class="input-group-addon" id="PhoneNumber"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Contact phone number">
                    </div>

                    <br>
                        
                    <div class="input-group">
                        <input type="submit" name="blogMyAccount" class="btn btn-primary" value="Update">                 
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
        

    </div>    <!-- /.row -->

</div> <!-- /.container -->
  