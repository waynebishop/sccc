<?php

class BlogLoginController extends PageController {

	// Properties
	


	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct();

		// If user already logged in then redirect to blogHome page
		$this->mustBeLoggedOut();

		// Save the database connection per private $dbc above
		$this->dbc = $dbc;

		// If the login form has been submitted
		if( isset($_POST['login']) ) {
			$this->processLoginForm();
		}

	}


	// Methods (functions)

	public function buildHTML() {
		
	echo $this->plates->render('blogLogin', $this->data);	
		
	}

	private function processLoginForm() {

		$totalErrors = 0;

		// Make sure email address entered
		if( strlen($_POST['email']) < 6 ) {
			// Prepare error mesages
			$this->data['emailMessage'] = 'Invalid E-Mail';
			$totalErrors++;

		}

		// Make sure password at least 8 characters 
		if( strlen($_POST['password']) < 8 ) {
			// Prepare error message
			$this->data['passwordMessage'] = 'Invalid Password';
			$totalErrors++;

		}

		// If no basic errors
		if( $totalErrors == 0 ) {

			// Check DB for Email address and Get the hashed password too
			$filteredEmail = $this->dbc->real_escape_string( $_POST['email'] );

			// Prepare SQL
			$sql = "SELECT id, password
					FROM users
					WHERE email = '$filteredEmail' ";

			// Run the query
			$result = $this->dbc->query( $sql );

			// Is there a result
			if ( $result->num_rows == 1 ) {

				// Check the password
				$userData = $result->fetch_assoc();

				// Check the password
				$passwordResult = password_verify( $_POST['password'], $userData['password'] );

				// If the result was a match - true
				if( $passwordResult == true ) {
					// Log user in
					$_SESSION['id'] = $userData['id'];

					header('Location: index.php?page=blogHome');

				} else {
					// Prepare eror message
					$this->data['loginMessage'] = 'E-Mail or Password incorrect';
				}



			} else {

				// Credentials do not match SCCC records
				$this->data['loginMessage'] = 'E-Mail or Password incorrect';


			} 		


		}

	}


}