<?php

class BlogMyAccountController extends PageController {

	// Properties
	


	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct();

		// Save the database connection per private $dbc above
		$this->dbc = $dbc;

		// If you are not logged in
		if( !isset($_SESSION['id']) ) {
			// Redirect the user to the login page
			header ('Location: Index.php?page=blogLogin');
		}

		

	}


	// Methods (functions)

	public function buildHTML() {
		
		echo $this->plates->render('blogMyAccount');	

		
	}


}