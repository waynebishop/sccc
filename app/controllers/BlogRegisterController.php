<?php

class BlogRegisterController {

	// Properties (attributes)
	private $emailMessage;
	private $passwordMessage;
	private $dbc;

	// Constructor
	public function __construct($dbc) {

		// Save the database connection per private $dbc above
		$this->dbc = $dbc;

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

		// Make sure the email is not in use
		$filteredEmail = $this->dbc->real_escape_string( $_POST['email'] );
		
		$sql = "SELECT email 
				FROM users
				WHERE email = '$filteredEmail' ";

		// Run the query
		$result = $this->dbc->query($sql);

		// If the query failed OR there is a result
		if( !$result || $result->num_rows > 0 ) {
			$this->emailMessage = 'E-Mail in use';
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

			// Validation passed good to go!

			// Filter user data before using it in query
			

			// Hash the password
			$hash = password_hash( $_POST['password'], PASSWORD_BCRYPT );

			// Prepare the sql
			$sql = "INSERT INTO users (email, password)
					VALUES ('$filteredEmail', '$hash')";

			// Run the query
			$this->dbc->query($sql);

			// Check to make sure this worked


			// Log the user in - insert_id shows the latest added use ID
			$_SESSION['id'] = $this->dbc->insert_id;  

			// Redirect th user to the blog home page
			header('Location: index.php?page=blogHome'); 

		
		}



	}



}