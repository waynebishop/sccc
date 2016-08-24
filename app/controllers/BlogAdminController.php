<?php


class BlogAdminController extends PageController {
	// Properties
	
	
	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct();

		$this->dbc = $dbc;

		$this->mustBeLoggedIn();

		if( $_SESSION['privilege'] != 'admin' ) {

			header("Location: index.php?page=home");	

		} 



		// Did user submit user edit form
		if( isset($_POST['edit-user']) ) {
			$this->processUserEdit();

		}

		// Did user submit user user search
		if( isset($_POST['user_search']) ) {
			$this->getUserInfo();

		}

				
	}

	// Methods (functions)
	public function buildHTML() {
		echo $this->plates->render('blogAdmin', $this->data);			
	}

	private function getUserInfo() {
		if(strlen($_POST['user_search']) === 0) {
			$searchTerm = "";
		} else {
			$result = $_POST['user_search'];
			$searchTerm = strtolower($result);
			$searchTerm = $this->dbc->real_escape_string($searchTerm);
		}

		$this->data['searchTerm'] = $searchTerm;

		$sql = "SELECT id, email, first_name, last_name, phone, privilege
				
				FROM users
				
				WHERE id = $searchTerm";

				

		$result = $this->dbc->query($sql);


		if( !$result || $result->num_rows == 0) {
			
			$this->data['originalUserName'] = 'No matches';

		} else {
			

			// Check if Admin submiitted a User edit form.
			if(isset($_POST['edit-user']) ) {
				// Use form data
				$this->data['post'] = $_POST;

				$result = $result->fetch_assoc();
				$this->data['originalUserName'] = $result['email'];
			

			} else {
				// Use DB data
				$result = $result->fetch_assoc();

				$this->data['post'] = $result;

				$this->data['originalUserName'] = $result['email'];
				
			}

			
		}

	}

	private function processUserEdit() {

		// Validation
		$totalErrors = 0;

		$email = trim($_POST['email']);
		$firstName = trim($_POST['firstName']);
		$lastName = trim($_POST['lastName']);
		$phone = trim($_POST['phone']);
		$privilege = trim($_POST['privilege']);
		$id = trim($_POST['userID']);

		
		// validate email ( AKA username)
		if( strlen( $email ) > 255 ) {
			$totalErrors++;
			$this->data['emailError'] = 'Must not exceed 255 characters. Thanks.';
		}

		// Validate first name
		if( strlen( $firstName ) > 50 ) {
			$totalErrors++;
			$this->data['firstNameError'] = 'Must not exceed 50 characters. Thanks.';
		}

		// Validate last name
		if( strlen( $lastName ) > 50 ) {
			$totalErrors++;
			$this->data['lastNameError'] = 'Must not exceed 50 characters. Thanks.';
		}

		// Validate phone
		if( strlen( $phone ) > 50 ) {
			$totalErrors++;
			$this->data['phoneError'] = 'Must not exceed 50 characters. Thanks.';
		}

		// Validate privilege
		if( strlen( $privilege ) == 0 ) {
			$totalErrors++;
			$this->data['privilegeError'] = 'Please choose a Privilege status. Thanks.';
		}

		// If no errors
		if( $totalErrors == 0 ) {

			$userID = $id;

			// Upload data
			$email = $this->dbc->real_escape_string($email);
			$firstName = $this->dbc->real_escape_string($firstName);
			$lastName = $this->dbc->real_escape_string($lastName);
			$phone = $this->dbc->real_escape_string($phone);
			$privilege = $this->dbc->real_escape_string($privilege);
			$userID = $this->dbc->real_escape_string($userID);

			// Prepare the SQL
			$sql = "UPDATE users
					SET email = '$email',
						first_name = '$firstName',
						last_name = '$lastName',
						phone = '$phone',
						privilege = '$privilege'
					WHERE id = $userID";
			
		}			
	
		// Run query
		$this->dbc->query($sql);

		// Validation to make sure it ran
		if( $this->dbc->affected_rows == 0 ) {
				$this->data['userUpdateMessage'] = 'Nothing changed. Update failed OR no changes submitted.';
			} else {

			// Redirect user back to blogAdmin
			header("Location: index.php?page=blogAdmin");

		}	


	}


}























