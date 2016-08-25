<?php

class BlogSearchController extends PageController {
	// Properties - specific to this page
	
	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct(); 

		$this->dbc = $dbc;

		$this->getSearch();
	}

	// Methods (functions)
	public function buildHTML() {
		echo $this->plates->render('blogSearch', $this->data);	
	}

	private function getSearch() {

		// Set $userID as anon if not signed in, or per $_SESSION['id'] if signed in.
		if( $_SESSION['privilege'] != 'anon' ) {

			// If NOT anon then IS logged in so set userID to SESSION['id'] 
			$userID = $_SESSION['id'];

		} else {
			
			// For this function default $userID to non-exitent user # 0 
			$userID = 0;

		}

		// Set search term per input OR blank

		if( !isset($_POST['search'])) {
			$_POST['search'] = "";
		}
		
		if(strlen($_POST['search']) === 0) {
			$searchTerm = "";

		} else {
			$result = $_POST['search'];
			$searchTerm = strtolower($result);
		}

		$this->data['searchTerm'] = $searchTerm;

		$sql = "SELECT posts.id, title AS score_title, intro AS score_intro, article AS score_article
			FROM posts
			WHERE
				(title LIKE '%$searchTerm%' OR 
				intro LIKE '%$searchTerm%' OR
				article LIKE '%$searchTerm%')";

		if( $_SESSION['privilege'] != 'admin' ) {

			$sql .= " AND (user_id = $userID
					OR status = 'Approved')	
					ORDER BY score_title ASC";
		
		} else {

			$sql .= " ORDER BY score_title ASC";	

		}		
	
		$result = $this->dbc->query($sql);

		if( !$result || $result->num_rows == 0) {
			$this->data['searchResults'] = "No results";
		} else {
			$this->data['searchResults'] = $result->fetch_all(MYSQLI_ASSOC);
		}
	}
}

