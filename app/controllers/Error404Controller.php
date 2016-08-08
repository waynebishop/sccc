<?php

class Error404Controller extends PageController {

	// Properties


	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct(); 

		$this->dbc = $dbc;


	}


	// Methods (functions)

	public function buildHTML() {	
		
		echo $this->plates->render('error404');	
	
	}


}