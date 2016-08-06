<?php


// Make verything in the vendor folder available to use
require 'vendor/autoload.php';

// Instantiate Plates Library
$plates = new League\Plates\Engine('app/templates');

// Appropriate page

// Has the user requested a page?
if( isset( $_GET['page'] ) ) {

	// Requested page
	$page = $_GET['page'];

} else {

	// Home page
	$page = 'home';
}


// load the appropriate files based on page
switch($page) {

	// Home page
	case 'home';
		echo $plates->render('home');
	break;

	// Blog Home page 
	case 'blogHome';
		echo $plates->render('blogHome');
	break;

	// Blog post
	case 'blogPost';
		echo $plates->render('blogPost');
	break;

	// Blog Register	
	case 'blogRegister';
		echo $plates->render('blogRegister');
	break;

	// Blog Login
	case 'blogLogin';
		echo $plates->render('blogLogin');
	break;

	// Blog My Account
	case 'blogMyAccount';
		echo $plates->render('blogMyAccount');
	break;	

	// New Post
	case 'newPost';
		echo $plates->render('newPost');
	break;

	// Blog Pending
	case 'blogPending';
		echo $plates->render('blogPending');
	break;

	// Edit Comment
	case 'editComment';
		echo $plates->render('editComment');
	break;

	// Edit Post
	case 'editPost';
		echo $plates->render('editPost');
	break;

	// New Post
	case 'blogAdmin';
		echo $plates->render('blogAdmin');
	break;



	default:
		echo $plates->render('error404');
	break;


}


















