<?php $this->layout('master') ?>

<!-- Breadcrumbs -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="index.php?page=blogHome">Captains Blog</a></li>
        <li><a href="index.php?page=blogPost">Blog Post</a></li> 
        <li><a href="index.php?page=editComment" class="active">Edit Comment</a></li>    
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
                <small>Edit Comment</small>
            </h1> 
            <div class="well">
                <h4>Edit your Comment:</h4>
                <p class="politeWarning"><i class="fa fa-heart" aria-hidden="true"></i><em> Watch out, kids about!</em></p>
                <form>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" id="editedComment" placeholder="** Pre-populates with existing comment **"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </form>
            </div>
                                    
            <hr>
            
            <!-- Comment Delete Button & modal -->

            <!-- Comment Delete Button trigger modal -->
            <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#commentDeleteModal"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete </button>

            <!-- Delete Comment Modal -->

            <div class="modal fade" id="commentDeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"> Delete Comment Confirmation</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you certain that you want to delete this comment?</p>
                            
                            <div class="radio">
                                <label>
                                    <input type="radio" name="commentDeleteConfirm" id="DontDeleteConfirm" value="no" checked>
                                    NO I want to keep it.
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="commentDeleteConfirm" id="YesDeleteConfirm" value="yes">
                                    YES please delete this comment.
                                </label>
                            </div>
       
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Submit </button>
                        </div>
                    </div>
                </div> 
            </div> 
            <!-- /End Comment Delete Button & Modal-->
            
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

</div> <!-- / container -->