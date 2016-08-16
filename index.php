<?php

session_start();

// Make verything in the vendor folder available to use
require 'vendor/autoload.php';
require 'app/controllers/PageController.php';

// Check $_GET for page and set page as home if no page
$page = isset($_GET['page']) ? $_GET['page'] : 'home'; 

// Connect to the database
$dbc = new mysqli('localhost', 'root', '', 'sccc');

// load the appropriate files based on page
switch($page) {

	// Home page
	case 'home';
		require 'app/controllers/HomeController.php';
		$controller = new HomeController($dbc);
	break;

	// Blog Home page 
	case 'blogHome';
		require 'app/controllers/BlogHomeController.php';
		$controller = new BlogHomeController($dbc);
	break;

	// Blog post
	case 'blogPost';
		require 'app/controllers/BlogPostController.php';
		$controller = new BlogPostController($dbc);
	break;

	// Blog Register	
	case 'blogRegister';
		require 'app/controllers/BlogRegisterController.php';
		$controller = new BlogRegisterController($dbc);		
	break;

	// Blog Login
	case 'blogLogin';
		require 'app/controllers/BlogLoginController.php';
		$controller = new BlogLoginController($dbc);
	break;

	// Blog Logout
	case 'blogLogout';
		
		unset($_SESSION['id']);
		unset($_SESSION['privilege']);
		header ('Location: Index.php');

	break;	


	// Blog My Account
	case 'blogMyAccount';
		require 'app/controllers/BlogMyAccountController.php';
		$controller = new BlogMyAccountController($dbc);
	break;	

	// New Post
	case 'newPost';
		require 'app/controllers/NewPostController.php';
		$controller = new NewPostController($dbc);
	break;

	// Blog Pending
	case 'blogPending';
		require 'app/controllers/BlogPendingController.php';
		$controller = new BlogPendingController($dbc);		
	break;

	// Edit Comment
	case 'editComment';
		require 'app/controllers/EditCommentController.php';
		$controller = new EditCommentController($dbc);
	break;

	// Edit Post
	case 'editPost';
		require 'app/controllers/EditPostController.php';
		$controller = new EditPostController($dbc);
	break;

	// Blog Admin
	case 'blogAdmin';
		require 'app/controllers/BlogAdminController.php';
		$controller = new BlogAdminController($dbc);		
	break;

	case 'error404':
		require 'app/controllers/Error404Controller.php';
		$controller = new Error404Controller($dbc);
	break;


	default:
		require 'app/controllers/Error404Controller.php';
		$controller = new Error404Controller($dbc);
	break;


}

$controller->buildHTML();


















