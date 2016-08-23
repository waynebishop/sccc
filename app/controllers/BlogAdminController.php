<?php


class BlogAdminController extends PageController {
	// Properties
	
	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct();

		$this->dbc = $dbc;

		$this->mustBeLoggedIn();



		// Did user submit user edit form
		if( isset($_POST['edit-user']) ) {
			$this->processUserEdit();

		}

		// Did user submit user user search
		if( isset($_POST['user_search']) ) {
			$this->userSearch();

		}

				
	}

	// Methods (functions)
	public function buildHTML() {
		echo $this->plates->render('blogAdmin', $this->data);			
	}

	private function userSearch() {
		if(strlen($_POST['user_search']) === 0) {
			$searchTerm = "";
		} else {
			$result = $_POST['user_search'];
			$searchTerm = strtolower($result);
		}

		$this->data['searchTerm'] = $searchTerm;

		$sql = "SELECT user.id, email, first_name, last_name, phone, status
			FROM users
			WHERE
			email = '%$searchTerm%' ";

		$result = $this->dbc->query($sql);

		if( !$result || $result->num_rows == 0) {
			$this->data['userSearchResults'] = "No results";
		} else {
			$this->data['userSearchResults'] = $result->fetch_all(MYSQLI_ASSOC);
		}


	}

}