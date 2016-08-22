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
		if(strlen($_POST['search']) === 0) {
			$searchTerm = "";
		} else {
			$result = $_POST['search'];
			$searchTerm = strtolower($result);
		}

		$this->data['searchTerm'] = $searchTerm;

		$sql = "SELECT posts.id, title AS score_title, intro AS score_intro
			FROM posts
			WHERE
				title LIKE '%$searchTerm%' OR 
				intro LIKE '%$searchTerm%'
			ORDER BY score_title ASC";

		$result = $this->dbc->query($sql);

		if( !$result || $result->num_rows == 0) {
			$this->data['searchResults'] = "No results";
		} else {
			$this->data['searchResults'] = $result->fetch_all(MYSQLI_ASSOC);
		}
	}
}

