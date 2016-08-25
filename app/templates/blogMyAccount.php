<?php

  $this->layout('master', [
    'title'=> 'Spin City CC - Blog My Account',
    'desc'=>'SCCC Blog My Account page to update user details'
  ]); 

?>

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
                <h2>Update your contact details</h2>
                
                <form action="index.php?page=blogMyAccount" method="post">

                    <label for="">First Name:</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="first-name"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" name="first-name" class="form-control" placeholder="First name" value="<?= isset($_POST['update-contact']) ? $_POST['first-name'] : $post['first_name'] ?>">
                    </div>
                    
                    <!-- Error Message --> 
                    <?= isset($firstNameMessage) ? $firstNameMessage : '' ?>   

                    <br>

                    <label for="">Last Name:</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="last-name"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" name="last-name" class="form-control" placeholder="Last name" value="<?= isset($_POST['update-contact']) ? $_POST['last-name'] : $post['last_name'] ?>">
                    </div>

                    <!-- Error Message --> 
                    <?= isset($lastNameMessage) ? $lastNameMessage : '' ?> 

                    <br>

                    <label for="">Telephone Number:</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="phone-number"><i class="fa fa-smile-o" aria-hidden="true"></i></span>
                        <input type="text" name="phone-number" class="form-control" placeholder="Contact phone number" value="<?= isset($_POST['update-contact']) ? $_POST['phone-number'] : $post['phone'] ?>">
                    </div>

                    <!-- Error Message --> 
                    <?= isset($phoneNumberMessage) ? $phoneNumberMessage : '' ?> 

                    <br>
                        
                    <div class="input-group">
                        <input type="submit" name="update-contact" class="btn btn-primary" value="Update Details">                 
                    </div>
                    <br>
                    <span><?= isset($accountChangeMessage) ? $accountChangeMessage : '' ?></span> 

                </form>
                     
            </div>
       
            <hr>

            <!-- back to Blog Home -->

            <ul class="pager">
                <li class="previous">
                    <a href="index.php?page=blogHome">&larr; Back to Captains Blog</a>
                </li>        
            </ul>

        </div>

        <!-- Insert Blog Sidebar -->

        <?php $this->insert('partials/blogSidebar') ?>
        
    </div>    <!-- /.row -->

</div> <!-- /.container -->
  