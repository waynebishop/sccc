<?php


// Make verything in the vendor folder available to use
require 'vendor/autoload.php';

// Check $_GET for page and set page as home if no page
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; 

// load the appropriate files based on page
switch($page) {

	// Home page
	case 'home';
		require 'app/controllers/HomeController.php';
		$controller = new HomeController();
	break;

	// Blog Home page 
	case 'blogHome';
		require 'app/controllers/BlogHomeController.php';
		$controller = new BlogHomeController();
	break;

	// Blog post
	case 'blogPost';
		require 'app/controllers/BlogPostController.php';
		$controller = new BlogPostController();
	break;

	// Blog Register	
	case 'blogRegister';
		require 'app/controllers/BlogRegisterController.php';
		$controller = new BlogRegisterController();		
	break;

	// Blog Login
	case 'blogLogin';
		require 'app/controllers/BlogLoginController.php';
		$controller = new BlogLoginController();
	break;

	// Blog My Account
	case 'blogMyAccount';
		require 'app/controllers/BlogMyAccountController.php';
		$controller = new BlogMyAccountController();
	break;	

	// New Post
	case 'newPost';
		require 'app/controllers/NewPostController.php';
		$controller = new NewPostController();
	break;

	// Blog Pending
	case 'blogPending';
		require 'app/controllers/BlogPendingController.php';
		$controller = new BlogPendingController();		
	break;

	// Edit Comment
	case 'editComment';
		require 'app/controllers/EditCommentController.php';
		$controller = new EditCommentController();
	break;

	// Edit Post
	case 'editPost';
		require 'app/controllers/EditPostController.php';
		$controller = new EditPostController();
	break;

	// Blog Admin
	case 'blogAdmin';
		require 'app/controllers/BlogAdminController.php';
		$controller = new BlogAdminController();		
	break;



	default:
		require 'app/controllers/Error404Controller.php';
		$controller = new Error404Controller();
	break;


}

$controller->buildHTML();


















