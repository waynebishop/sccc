<?php

  $this->layout('master', [
    'title'=> 'Spin City CC - Blog Admin',
    'desc'=>'SCCC Blog Admin'
  ]); 

?>

<!-- Breadcrumbs -->
<div class="container">

<ol class="breadcrumb">
    <li><a href="index.php?page=home">Home</a></li>
    <li><a href="index.php?page=blogHome">Captains Blog</a></li>
    <li><a class="active" href="index.php?page=blogAdmin">Blog Admin</a></li>     
</ol>
</div>

<!-- Content -->

<!-- main admin blog post section -->

<div class="container" id="blogAdminContent">

    <div class="row">

        <!-- Blog Entries Column - takes up 8 of 12 columns -->

        <div class="col-md-8">

            <!-- Blog Search Well -->
            
            <h1 class="page-header">
                Captains Blog
                <small>Blog Administration</small>
            </h1>

            <!--  Maintain a User account -->

            <div class="well">
                <h2>Maintain a User account</h2>
                
                <!-- Search Box -->

                <form action="index.php?page=blogAdmin" method="post">

                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Username Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span><i class="fa fa-search" aria-hidden="true"></i></span>
                        </button>
                        </span>
                    </div>

                </form> <!-- /. Search -->        

                <br>

                <!-- User Details Boxes -->

                <form action="index.php?page=blogAdmin" method="post">    

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
                        <input type="text" class="form-control" placeholder="Email address eg name@gmail.com etc" >
                    </div>

                    <br>

                    <div class="input-group">
                        <span class="input-group-addon" id="PhoneNumber"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Contact phone number" >
                    </div>

                    <br>

                    <!-- User Status radio buttons-->

                    <div class="radio">
                        <label>
                            <input type="radio" name="userStatus" value="User" checked>
                            User
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" name="userStatus"  value="Author">
                            Author
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" name="userStatus" value="Admin">
                            Administrator
                        </label>
                    </div>
                    

                    <div class="input-group">
                        <input type="submit" name="editUser" class="btn btn-primary" value="Submit">                 
                        <!-- <button type="button" class="btn btn-success" >Submit</button> -->
                    </div>

                </form>
                     
            </div> <!-- End Maintain a User -->


            <!-- Maintain a Team Well -->

            <div class="well">
                <h2>Maintain a Team</h2>
                
                <form action="index.php?page=blogAdmin" method="post">

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Team Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" >
                                <span><i class="fa fa-search" aria-hidden="true"></i></span>
                        </button>
                        </span>
                    </div>

                    <br>

                    <div class="input-group">
                        <span class="input-group-addon" id="teamName"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Team Name" >
                    </div>

                    <br>

                    <div class="input-group">
                        <span class="input-group-addon" id="grade"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Grade - Premier 1, Colts, Year 5 etc">
                    </div>

                    <br>

                    <!-- Junior OR Senior Status radio buttons-->

                    <div class="radio">
                        <label>
                            <input type="radio" name="juniorSenior" value="junior" checked>
                            Junior
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" name="juniorSenior" value="Senior">
                            Senior
                        </label>
                    </div>

                    <br>
                    
                    <!-- Submit -->

                    <div class="input-group">
                        <input type="submit" name="editTeam" class="btn btn-primary" value="Submit">                            
                        <!-- <button type="button" class="btn btn-success">Submit</button> -->
                    </div>

                </form>
                     
            </div> <!-- END Maintain a team -->


            <!-- Add a Team Well -->

            <div class="well">
                <h2>Add a Team</h2>

                <br>

                <form action="index.php?page=blogAdmin" method="post">

                    <div class="input-group">
                        <span class="input-group-addon" id="newTeamName"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Team Name">
                    </div>

                    <br>

                    <div class="input-group">
                        <span class="input-group-addon" id="newTeamGrade"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Grade - Premier 1, Colts, Year 5 etc">
                    </div>

                    <br>

                    <!-- Junior OR Senior Status radio buttons-->

                    <div class="radio">
                        <label>
                            <input type="radio" name="newJuniorSenior" value="junior" checked>
                            Junior
                        </label>
                    </div>

                    <div class="radio">
                        <label>
                            <input type="radio" name="newJuniorSenior" value="Senior">
                            Senior
                        </label>
                    </div>

                    <br>
                                                                
                    <div class="input-group">
                        <input type="submit" name="addTeam" class="btn btn-primary" value="Submit">
                        <!-- <button type="button" class="btn btn-success">Submit</button> -->
                    </div>
                
                </form>

            </div> <!-- END Add a new team -->
      
        
            <hr>

            <!-- back to Blog Home -->

            <ul class="pager">
                <li class="previous">
                    <a href="index.php?page=blogHome">&larr; Back </a>
                </li>        
            </ul>

        </div>

        <hr>

        <!-- Insert Blog Sidebar -->

        <?php $this->insert('partials/blogSidebar') ?>

    </div> <!-- /.row -->

</div> <!-- /.container -->
