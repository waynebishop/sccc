<?php

class BlogMyAccountController extends PageController {

	// Properties
	


	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct();

		// Save the database connection per private $dbc above
		$this->dbc = $dbc;

		$this->mustBeLoggedIn();		

	}


	// Methods (functions)

	public function buildHTML() {
		
		echo $this->plates->render('blogMyAccount');	

		
	}


}