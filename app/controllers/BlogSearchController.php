<?php

class BlogHomeController extends PageController {

	// Properties - specific to this page
	


	// Constructor
	public function __construct($dbc) {

		// Run the parent constructor
		parent::__construct(); 

		$this->dbc = $dbc;


	}


	// Methods (functions)

	public function buildHTML() {

		// Get latest posts
		$allData = $this->getLatestPosts();

		$data = [];

		$data['allPosts'] = $allData;

		echo $this->plates->render('blogHome', $data);	
		
	}

	private function getLatestPosts() {

		// Prepare some SQL
		$sql = "SELECT * 
				FROM posts ";

		// Run the SQL and capture the result
		$result = $this->dbc->query($sql);

		// Extract the results
		$allData = $result->fetch_all(MYSQLI_ASSOC);


		// Return the results to the code that called this function 
		return $allData;

	}


}
