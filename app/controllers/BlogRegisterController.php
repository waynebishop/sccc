<?php

class BlogRegisterController {

	// Properties (attributes)
	private $emailMessage;
	private $passwordMessage;

	// Constructor
	public function __construct() {

		// If the user has submitted rego form
		if( isset($_POST['new-account']) ) {
			$this->validateRegistrationForm();
		}

	}


	// Methods (functions)
	
	public function registerAccount() {

		// Validate the users data


		// Check the database to see if email in use


		// Check the strength of the password


		// Register the account or show error messages



		// If successful log user in and redirect to Blog Home

	}

	public function buildHTML() {

		// Instantiate Plates Library
		$plates = new League\Plates\Engine('app/templates');

		// Prepare a container for data
		$data = [];

		// If there is an Email error
		if($this->emailMessage != '') {
			$data['emailMessage'] = $this->emailMessage;
		}

		// If there is a message for password
		if($this->passwordMessage != '') {
			$data['passwordMessage'] = $this->passwordMessage;
		}

		echo $plates->render('blogRegister', $data);


	}

	private function validateRegistrationForm () {
		
		$totalErrors = 0;

		// Make sure the Email has been provided and valid
		if( $_POST['email'] == '' ) {
			// Email is invalid
			$this->emailMessage = 'Invalid E-mail address';
			$totalErrors++; 
		}

		// Password must be at least 8 characters long
		if( strlen($_POST['password']) < 8 ) {
			// Password too short
			$this->passwordMessage = 'Password must be at least 8 characters long';
			$totalErrors++;
		}

		// Is this data valid to go into database?
		if( $totalErrors == 0) {

			// Validation passed good to go

		}



	}



}