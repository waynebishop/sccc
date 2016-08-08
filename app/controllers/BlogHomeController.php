<?php

class BlogHomeController extends PageController {

	// Properties - specific to this page
	


	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct(); 

		$this->dbc = $dbc;


	}


	// Methods (functions)

	public function buildHTML() {

		// Get latest posts

		
		echo $this->plates->render('blogHome');	
		
	}


}
