<?php

class NewPostController extends PageController {

	// Properties
	


	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct(); 

		// Save the database connection per private $dbc above
		$this->dbc = $dbc;

		$this->mustBeLoggedIn();


		// Did the user submit the new post form?
		if( isset($_POST['new-post'])  ) {

			$this->processNewPost();

		}


		

	}


	// Methods (functions)

	public function buildHTML() {
		
		echo $this->plates->render('newPost', $this->data);	
		
	}

	private function processNewPost() {

		// Count errors
		$totalErrors = 0;

		// Title

		$title = trim($_POST['title']);

		if( strlen ( $title ) == 0 ) {
			$this->data['titleMessage'] = '<span class="politeWarning">Required</span>';
			$totalErrors++;

			// die('title too short');

		} elseif( strlen( $title ) > 100 ) {
			$this->data['titleMessage'] = '<span class="politeWarning">Must be less than 100 characters</span>';	
			$totalErrors++;

			// die('title too long');
		}



	}


}