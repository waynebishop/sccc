<?php

class BlogMyAccountController extends PageController {

	// Properties- these first three actually relate to other style of error message generation per Login and Register
	private $firstNameMessage;
	private $lastNameMessage;
	private $emailMessage;


	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct();

		// Save the database connection per private $dbc above
		$this->dbc = $dbc;

		// Run the ** mustBeLoggedIn ** function located in the PageController to ensure logged in
		$this->mustBeLoggedIn();

		// Did the user submit new contact details
		if( isset($_POST['update-contact'] ) ) {
			$this->processNewContactDetails();

		}


	}


	// Methods (functions)

	public function buildHTML() {
		
		echo $this->plates->render('blogMyAccount', $this->data);	
		
	}

	private function processNewContactDetails() {

		// Validation 
		$totalErrors = 0;

		// Validate the first name
		if( strlen($_POST['first-name']) > 50 ) {
			$this->data['firstNameMessage'] = '<span class="politeWarning">Must be no more than 50 characters</span>';
			$totalErrors++;
		}

		if( strlen($_POST['last-name']) > 50 ) {
			$this->data['lastNameMessage'] = '<span class="politeWarning">Must be no more than 50 characters</span>';
			$totalErrors++;
		}

		if( strlen($_POST['phone-number']) > 50 ) {
			$this->data['phoneNumberMessage'] = '<span class="politeWarning">Must be no more than 50 characters</span>';
			$totalErrors++;
		}

		// If total errors is 0 good to go
		if( $totalErrors == 0) {
			// Form validation passed
			// Update the database
			$firstName = $this->dbc->real_escape_string($_POST['first-name']);
			$lastName = $this->dbc->real_escape_string($_POST['last-name']);
			$phoneNumber = $this->dbc->real_escape_string($_POST['phone-number']);

			$userID = $_SESSION['id'];

			// Prepare the SQL to update Users table by setting columns where for this id person
			$sql = "UPDATE users 
					SET first_name = '$firstName', 
					last_name = '$lastName',
					phone = '$phoneNumber'
					WHERE id = $userID ";

			// Run the query
			$this->dbc->query( $sql );





		}








	}

}