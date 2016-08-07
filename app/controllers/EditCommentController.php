<?php

class EditCommentController {

	// Properties
	private $dbc;


	// Constructor
	public function __construct($dbc) {

		// Save the database connection per private $dbc above
		$this->dbc = $dbc;

		

	}


	// Methods (functions)

	public function buildHTML() {

	// Instantiate Plates Library
	$plates = new League\Plates\Engine('app/templates');	
		
	echo $plates->render('editComment');	

		
	}


}